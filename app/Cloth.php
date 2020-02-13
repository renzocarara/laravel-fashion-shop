<?php


// NOTA: siccome Laravel non sembra costruire bene il plurale del nome del modello Cloth,
// gli dico io il nome della tabella da cercare nel DB aggiungendo la seguente linea:
// protected $table = "clothes";

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cloth extends Model
{
    protected $table = 'clothes';

}
