@extends('template')

@section('titre')
List of products
@endsection

@section('contenu')
<h2>List of the products sorted by price:</h2>
@foreach($products as $product)
<div>
    <p>Name of product: {{$product->nomProduct}}</p>
    <!-- <p>{{$product->descriptionProduct}}</p> -->
    <h5>Price of product: EUR {{$product->prixProduct}}</h5>
    <p>Weight of product: Kgs {{$product->poidsProduct}}</p>
    <p>Available quantity: {{$product->quantiteDisponible}}</p>

</div>
@endforeach
@endsection