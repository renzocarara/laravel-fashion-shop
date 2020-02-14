<?php

// NOTA: siccome Laravel non sembra costruire bene il plurale del nome del modello Cloth,
// gli dico io il nome della tabella da cercare nel DB aggiungendo la seguente linea:
// protected $table = "clothes";

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cloth extends Model
{
    // indico a Larvel come si chiama la tabella del DB da utilizzare
    protected $table = 'clothes';

    // indico quali sono i campi 'fillabili', in automatico, tramite il metodo fill()
    // cioè quando utilizzo il metodo fill(), Laravel automaticamente mi copia nel mio
    // oggetto (che è poi un record) che va scritto nel DB, i campi della tabella
    // che specifico qui sotto
    protected $fillable=['name','category','description','price'];

}
