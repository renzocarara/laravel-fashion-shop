<?php

// Questo controller è stato creato con il comando:
// >php artisan make:controller ClothController

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// devo aggiungere qui sotto questa 'use' perchè la classe ClothController
// usa il modello (classe) Cloth -- App è il nome della cartella dove è stato creato
// il file Cloth.php (creato con >php artisan make:model Cloth)
use  App\Cloth;


class ClothController extends Controller
{
    // prezzo massimo per considerare un prodotto economico
    public $max_price = 50;

    public function home(){
        // il controller ritorna semplicemente una view, senza parametri
        return view('home');
    }

    public function fullList(){
        // questa funzione accede al DB e tramite il metodo all()
        // ritorna tutti i record della tabella
        // la tabella è quella associta alla classe (Model) Cloth
        // modello 'Cloth' ====> tabella nel DB 'clothes'
        // In questo specifico caso ho forzato io questa associazione,
        // specificandogli, il nome della tabella da cercare, nel file Cloth.php,
        // normalmente Laravel ricava il nome della tabella facendo il 'plurale'
        // del nome del Model
        $collection=Cloth::all();
        // il controller ritorna una view alla quale passa dei dati,
        // sono i dati letti dal DB (una 'collection')
        // full_catalog è il nome della view (coincide con il nome del file .blade.php)
        // full_list è il nome di una variabile che passo alla view (è la collection ricavata dal DB)
        return view('full_catalog',['full_list' => $collection]);
    }
    public function cheapList(){

        // prezzo massimo per considerare un prodotto economico
        // $max_price = 50;

        // interroga il DB per ottenere una lista di prodotti economici
        // con prezzo minore o uguale ad un limite prefissato
        $collection=Cloth::where('price', '<=', $this->max_price)->get();
        // il controller ritorna una view alla quale passa dei dati,
        // sono i dati letti dal DB (una 'collection')
        // cheap_items è il nome della view (coincide con il nome del file .blade.php)
        // cheap_items_list è il nome di una variabile che passo alla view (è la collection ricavata dal DB)
        return view('cheap_items',['cheap_items_list' => $collection]);
    }
    public function createItem(){
        // questo metodo viene chiamato dal controller quando l'utente vuole creare un nuovo prodotto
        // viene ritornata una view ('create_item') che presenterà un 'form'
        // per l'inserimento dei dati del nuovo prodotto, la view NON riceve dati ingresso
        return view('create_item');
    }
    public function storeItem(Request $request){
        // questo metodo viene chiamato dal controller quando l'utente preme il bottone di SUBMIT
        // del FORM sulla view 'create_item', non c'è una view che viene ritornata e che
        // l'utente può vedere, è solo uno script che serve per scrivere nel DB i dati inseriti dall'utente,
        // dopodicè viene fatta una REDIRECT verso la rotta 'homepage'

        // metto i dati ricevuti tramite il parametro $request in una variabile
        $form_data_received=$request->all();
        // creo un nuovo oggetto di classe Cloth, da scrivere poi nel DB
        $new_item = new Cloth();
        // valorizzo il nuovo oggetto con i dati ricevuti
        // $new_item->name=$form_data_received['name'];
        // $new_item->category=$form_data_received['category'];
        // $new_item->description=$form_data_received['description'];
        // $new_item->price=$form_data_received['price'];

        // valorizzo il nuovo oggetto con i dati ricevuti
        $new_item->fill($form_data_received);

        // alla fine scrivo il nuovo oggetto nel DB
        $new_item->save();

        // faccio una REDIRECT vetso la rotta 'homepage'
        return redirect() -> route('homepage');
    }



} // end controller
