<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductModelController extends Controller
{
   public function nomPrix(){
        $products = Product::all()->sortBy('nomProduct');
        // return view('product-list', array('products'=>$products));
        return view('product-list', ['products'=>$products]);
        
}



    // public function productsId($id){
    //     $products = Product::find($id);
    //     return view('product-details')->with('product',$id);
    // }



    
    public function getByIdProduct($idProduct){
        $products = Product::find($idProduct);
        return view('one-product')->with('product',$idProduct);

    }

    public function getByNameProduct(){
        $products = Product::orderBy('nomProduct')->get();
        return view('name-product', array('products'=>$products));

    }
 
    public function getByPriceProduct(){
        $products = Product::orderBy('prixProduct')->get();
        return view('price-product', array('products'=>$products));
    }

}