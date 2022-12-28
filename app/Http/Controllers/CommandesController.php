<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class CommandesController extends Controller
{
    
    function ListerLesCommandes($idClient){
        return response()->json(Client::find($idClient)->commandes()->with('produit')->get());
    }
}
