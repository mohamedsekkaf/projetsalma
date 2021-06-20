<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    public $table="Dossiers";
    protected $fillable = [
        'id',
        'name',
        'size',
        'downloads'
    ];
}
