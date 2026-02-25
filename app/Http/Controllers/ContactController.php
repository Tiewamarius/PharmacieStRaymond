<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function create()
    {
        return view('contact.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'subject' => 'nullable|string|max:255',
            'category' => 'required|string',
            'message' => 'required|string',
            'attachment' => 'nullable|file|max:2048',
            'consent' => 'required'
        ]);

        if ($request->hasFile('attachment')) {
            $filePath = $request->file('attachment')->store('contacts', 'public');
        }

        // Ici tu peux envoyer un mail ou sauvegarder en base

        return back()->with('success', 'Votre demande a été envoyée avec succès.');
    }
}
