<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carteira extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nome',
        'saldo',
        'imagem',
    ];
    public function categorias() {
    return $this->hasMany(Categoria::class);
}

}
