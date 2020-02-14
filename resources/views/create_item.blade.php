@extends('layouts.view_structure')

{{-- imposto il titolo della pagina --}}
@section('page-title', "Fashion Shop - Create Item")

@section('content')

<main>

    <section class="container">

        <h2 class="text-center">Vetrina prodotti</h2>
        <p class="text-center"><strong>Crea un nuovo prodotto</strong></p>
        <div class="d-flex">
            @include ('layouts.left-side-menu')
            <div class="right-panel">
                {{-- al submit chiamo la route 'store' che non corrisponde ad una view da visualizzare, --}}
                {{-- ma è solo del codice che elabora i dati del form e crea un oggetto Cloth da scrivere nel DB --}}
                <form method="post" action="{{ route('store') }}">
                    {{-- questo è un token necessario per tutti i FORM in Laravel --}}
                    {{-- *********************************** --}}
                    {{-- *********** IMPORTANTE ************ --}}
                    @csrf
                    {{-- *********** IMPORTANTE ************ --}}
                    {{-- *********************************** --}}
                    <div class="form-group">
                        <label for="name-id">Nome:</label>
                        <input type="text" class="form-control" id="name-id" name="name" placeholder="nome del prodotto">
                    </div>
                    <div class="form-group">
                        <label for="category-id">Categoria:</label>
                        <input type="text" class="form-control" id="category-id" name="category" placeholder="tipologia prodotto">
                    </div>
                    <div class="form-group">
                        <label for="decription-id">Descrizione:</label>
                        <input type="text" class="form-control" id="description-id" name="description" placeholder="breve descrizione">
                    </div>
                    <div class="form-group">
                        <label for="price-id">Prezzo:</label>
                        <input type="text" class="form-control" id="price-id" name="price" placeholder="in € inclusa IVA">
                    </div>

                    <button type="submit" class="btn btn-success">Crea</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                </form>


            </div>
        </div>

    </section>

</main>

@endsection