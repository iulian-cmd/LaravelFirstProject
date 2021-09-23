@extends('template')

@section('titre')
List of products
@endsection

@section('contenu')
<h4>Page with the list of products and the price:</h4>
@foreach($products as $product)
<div>
    Name of product: {{$product->nomProduct}}</br>
    Price of product: EUR {{$product->prixProduct}} </br>
    *
</div>
@endforeach

@endsection