<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\LoyaltyPoint;
use App\Models\LoyaltyTransaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $cart = session('cart', []);

        if (empty($cart)) {
            return back()->with('error', 'Panier vide');
        }

        DB::beginTransaction();

        try {

            $total = 0;
            foreach ($cart as $item) {
                $total += $item['price'] * $item['quantity'];
            }

            $order = Order::create([
                'user_id' => Auth::id(),
                'total' => $total,
                'payment_method' => $request->payment_method,
                'status' => 'pending'
            ]);

            foreach ($cart as $id => $item) {
                $order->items()->create([
                    'product_id' => $id,
                    'quantity' => $item['quantity'],
                    'price' => $item['price'],
                ]);
            }

            // 🔥 SYSTEME FIDELITE

            $user = Auth::user();

            // Créer loyalty si n'existe pas
            $loyalty = LoyaltyPoint::firstOrCreate(
                ['user_id' => $user->id],
                ['points' => 0]
            );

            $pointsEarned = floor($order->total / 1000) * 10;

            if ($pointsEarned > 0) {

                $loyalty->increment('points', $pointsEarned);

                LoyaltyTransaction::create([
                    'user_id' => $user->id,
                    'points' => $pointsEarned,
                    'type' => 'earned',
                    'description' => 'Points gagnés pour commande #' . $order->id
                ]);
            }

            DB::commit();

            // vider panier
            session()->forget('cart');

            return redirect()->route('payment.redirect', $order->id);
        } catch (\Exception $e) {

            DB::rollBack();

            return back()->with('error', 'Erreur lors de la commande');
        }
    }
}
