@extends('layouts.view_structure')

{{-- imposto il titolo della pagina --}}
@section('page-title', "Fashion Shop - Home")

@section('content')

<main>

    <section class="container">

        <h1 class="text-center"><strong>Prodotti online per tutte le tasche</strong></h1>
        <div class="d-flex">
            @include ('layouts.menu')
            <div class="splash-screen">
                <img src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fretailblog.jll.com%2Fwp-content%2Fuploads%2F2018%2F02%2FBrand.jpg&f=1&nofb=1" alt="splash screen shopping">
            </div>
        </div>

    </section>

</main>

@endsection