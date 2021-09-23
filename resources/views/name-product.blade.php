@extends('template')

@section('titre')
List of products
@endsection

@section('contenu')
<h4>List of the products sorted by name:</h4>
@foreach($products as $product)
<div>
    <h5>Name of product: {{$product->nomProduct}}</h5>
    <!-- <p>{{$product->descriptionProduct}}</p> -->
    <p>Price of product: EUR {{$product->prixProduct}}</p>
    <p>Weight of product: Kgs {{$product->poidsProduct}}</p>
    <p>Available quantity: {{$product->quantiteDisponible}}</p>

</div>
@endforeach

@endsection