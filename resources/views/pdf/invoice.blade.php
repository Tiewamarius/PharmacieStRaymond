<h2>Facture #{{ $order->id }}</h2>

<p>Total: {{ number_format($order->total, 0, ',', ' ') }} FCFA</p>

<table width="100%">
    <tr>
        <th>Produit</th>
        <th>Qté</th>
        <th>Prix</th>
    </tr>

    @foreach($order->items as $item)
    <tr>
        <td>{{ $item->product->name }}</td>
        <td>{{ $item->quantity }}</td>
        <td>{{ number_format($item->price, 0, ',', ' ') }}</td>
    </tr>
    @endforeach
</table>