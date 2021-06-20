<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dossier extends Model
{
    public $table="Dossiers";
    protected $fillable = [
        'id',
        'numero',
        'titreDossier',
        'service',
        'dateCreation',
        'instance',
        'etat',
        'document'
    ];
}
