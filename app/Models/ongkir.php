<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ongkir extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table= "ongkirs";
    protected $fillable = [
        'id', 'id_kota', 'kota','price'
    ];  
}
