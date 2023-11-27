<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function updateAnnonces(Request $request)
{
    // Valider et sauvegarder les données
    $data = $request->validate([
        'site_annonces' => 'required|string',
    ]);

   // modifier le fichier dans storage/app/public/annonces.json
    $file = storage_path('app/public/annonces.json');
    $json = json_decode(file_get_contents($file), true);
    $json['site_annonces'] = $data['site_annonces'];

    return back()->with('success', 'Les annonces ont été mises à jour.');
}
}
