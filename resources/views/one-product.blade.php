@extends('template')

@section('titre')
List of products
@endsection

@section('contenu')
<h2>Sorted by one article</h2>

<div>
    {{$product}}
</div>

@endsection