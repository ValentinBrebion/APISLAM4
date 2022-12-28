<?php

namespace App\Http\Controllers;

use App\Models\Demo;
use App\Models\Produit;
use App\Models\Commande;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProduitsController;

class ProduitsController extends Controller
{
    function liste(){
        return response()->json(Produit::all());
    }

    function detail($id){
        return response()->json(Produit::find($id));
    }

    function ajouter(Request $request){
        $produit = new Produit();
        $produit->nom = $request->nom;
        $produit->description = $request->description;
        $produit->lien_image = $request->lien_image;
        $produit->prix = $request->prix;
        $produit->tva = $request->tva;
        $produit->save();
        return response()->json($produit);
    }

    function ajouterCommande(Request $request){
        $commande = new Commande();
        $commande->id_client = $request->id_client;
        $commande->id_produit = $request->id_produit;
        $commande->quantite = $request->quantite;
        $commande->date = $request->date;
        $commande->save();
        return response()->json($commande);        
        
        // Code permettant de créer une commande

    }
}
