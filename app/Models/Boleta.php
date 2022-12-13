<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boleta extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'table_id',
        'total'

    ];

    public function productBolet(){

        return $this->hasMany(Pedido::class,'boleta_id');
    }
}
