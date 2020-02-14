@extends('layouts.view_structure')

{{-- imposto il titolo della pagina --}}
@section('page-title', "Fashion Shop - Catalogo")

@section('content')

<main>

    <section class="container">

        <h2 class="text-center">Vetrina prodotti</h2>
        <p class="text-center"><strong>Catalogo completo</strong></p>

        <div class="d-flex">
            @include ('layouts.left-side-menu')
            <div class="right-panel">

                <div class="card-container d-flex justify-content-start flex-wrap">
                    @foreach ($full_list as $product )

                    <div class="card col-lg-3 border-danger" style="width: 18rem;">
                        {{-- <img src="..." class="card-img-top" alt="..."> --}}
                        <div class="card-body text-info">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">categoria: {{ $product->category }}</li>
                            {{-- <li class="list-group-item">disponibilità: </li> --}}
                            <li class="list-group-item">prezzo: {{ $product->price }} €</li>
                        </ul>
                        <div class="card-body">
                            {{-- <a href="#" class="card-link">Inserisci nel carrello</a> --}}
                            {{-- <a href="#" class="card-link">Ulteriori dettagli</a> --}}
                        </div>
                    </div>

                    @endforeach
                </div>
            </div>
    </section>

</main>

@endsection