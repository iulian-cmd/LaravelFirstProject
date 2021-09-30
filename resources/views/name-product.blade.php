@extends('template')

@section('titre')
List of products
@endsection

@section('contenu')
<h4>List of the products sorted by name:</h4>
@foreach($products as $product)
<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">Name of product: {{$product->nomProduct}}</h5>
        <!-- <p>{{$product->descriptionProduct}}</p> -->
        <p class="card-text">Price of product: EUR {{$product->prixProduct}}</p>
        <p class="card-text">Weight of product: Kgs {{$product->poidsProduct}}</p>
        <p class="card-text">Available quantity: {{$product->quantiteDisponible}}</p>
    </div>
</div>
@endforeach

@endsection