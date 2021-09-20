<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listeProduits()
    {
        return "Voici la liste de produits";
    }

    public function detailsProduit($id)
    {
        return "Voici le detail du produit " . $id;
    }
}
