@extends('layouts.view_structure')

{{-- imposto il titolo della pagina --}}
@section('page-title', "Fashion Shop - Home")

@section('content')

<main>

    <section class="container">

        <h1 class="text-center"><strong>Gestione catalogo prodotti</strong></h1>
        <div class="d-flex">
            @include ('layouts.left-side-menu')
            <div class="right-panel">
                <img src="https://velvetmag.it/wp-content/uploads/2017/05/copertina.jpeg" alt="splash screen shopping">
            </div>
        </div>

    </section>

</main>

@endsection