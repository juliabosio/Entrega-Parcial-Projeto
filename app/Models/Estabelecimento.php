<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estabelecimento extends Model
{
    protected $table = 'estabelecimentos';
    protected $fillable = ['nome','cidade','updated_at','created_at'];
}