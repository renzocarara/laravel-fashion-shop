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
    public function fullList(){
        // questa funzione accede al DB e tramite il metodo all()
        // ritorna tutti i record della tabella
        // la tabella è quella associta alla classe (modello) Cloth
        // modello Cloth ====> tabella nel DB Clothes
        // In questo specifico caso ho forzato io questa associazione,
        // specificandogli il nome della tabella da cercare, nel file Cloth.php,
        // normalmente Laravel ricava il nome della tabella facendo il 'plurale'
        // del nome del Model
        $collection=Cloth::all();
        // il controller ritorna una view alla quale passa dei dati,
        // sono i dati letti dal DB (una 'collection')
        return view('home',['catalogo' => $collection]);
    }
}
