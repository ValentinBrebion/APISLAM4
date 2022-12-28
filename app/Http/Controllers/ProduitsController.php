<?php

namespace App\Http\Controllers;

use App\Models\Demo;
use App\Models\Produit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProduitsController;

class ProduitsController extends Controller
{
    function liste(){
        return response()->json(Produit::all());
    }
}
