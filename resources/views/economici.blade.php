@extends('layouts.view_structure')

{{-- imposto il titolo della pagina --}}
@section('page-title', "Fashion Shop - Economici")

@section('content')

<main>

    <section class="container">

        <h2 class="text-center">Vetrina prodotti</h2>
        <p class="text-center"><strong>Prodotti economici</strong></p>

        <div class="d-flex">
            @include ('layouts.menu')
            <div class="splash-screen">
                <div class="card-container d-flex justify-content-start flex-wrap">
                    @foreach ($cheap_list as $prodotto )

                    <div class="card col-lg-3 border-danger" style="width: 18rem;">
                        {{-- <img src="..." class="card-img-top" alt="..."> --}}
                        <div class="card-body text-info">
                            <h5 class="card-title">{{ $prodotto->name }}</h5>
                            <p class="card-text">{{ $prodotto->description }}</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">categoria: {{ $prodotto->category }}</li>
                            {{-- <li class="list-group-item">disponibilità: </li> --}}
                            <li class="list-group-item">prezzo: {{ $prodotto->price }} €</li>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="card-link">Inserisci nel carrello</a>
                            {{-- <a href="#" class="card-link">Ulteriori dettagli</a> --}}
                        </div>
                    </div>

                    @endforeach
                </div>
            </div>

    </section>

</main>

@endsection