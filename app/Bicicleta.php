<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bicicleta extends Model
{
    protected $table = 'bicicleta';
    protected $fillable = [
        'fabricante', 'modelo', 'cor', 'marcha', 'marca', 'proprietario', 'celular', 'email'
    ];

    public $timestamps = false;
    public $incrementing = false;
}
