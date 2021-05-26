<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ospite extends Model
{
    public $table = 'ospiti'; //la coleghiamo alla nostra tabella nell Mysql

    protected $fillable = [
        'name',
        'lastname',
        'date_of_birth', 
        'document_type', 
        'document_number'
    ] ;
}
