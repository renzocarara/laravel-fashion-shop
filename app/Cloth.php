<?php


// NOTA: siccome Laravel non sembra costruire bene il plurale del nome del modello Cloth,
// gli dico io il nome della tabella da cercare nel DB aggiungendo la seguente linea:
// protected $table = "clothes";
// nel file Model.php nella cartella
// qui sotto:
// vendor\laravel\framework\src\Illuminate\Database\Eloquent\Model.php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Cloth extends Model
{
    //
}
