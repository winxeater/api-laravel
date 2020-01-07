<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proprietario extends Model
{
    protected $fillable = [
        'name',
        'fantasy_name', 
        'cel', 
        'forma_pag',
        'rg',
        'flag'
    ];
}
