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
        return view("product-list");
    }

    public function detailsProduit($id)
    {
        return view("product-details")->with('numero', $id);
    }
}
