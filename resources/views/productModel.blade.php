@extends('template')

@section('titre')
List of products
@endsection

@section('contenu')
<h2>Je suis la page de la liste des products de la BDD...</h2>
@foreach($products as $product)
<div>
    {{$product->nomProduct}}
</div>
@endforeach
@endsection