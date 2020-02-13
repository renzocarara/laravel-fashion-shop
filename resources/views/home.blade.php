@extends('layouts.view_structure')

{{-- imposto il titolo della pagina --}}
@section('page-title', "Fashion Shop")

@section('content')

<main>

    <section class="">

        <h1>Catalogo prodotti</h1>
        {{-- {{ dd($catalogo)}} --}}

        @foreach ($catalogo as $key => $prodotto )

        <h3>Prodotto n. {{ $key + 1 }}</h3>
        <p> nome: {{ $prodotto['name'] }} </p>
        <p> categoria: {{ $prodotto['category'] }} </p>
        <p> descrizione: {{ $prodotto['description'] }} </p>
        <p> prezzo: {{ $prodotto['price'] }} €</p>

        @endforeach

    </section>




</main>

@endsection