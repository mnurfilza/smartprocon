<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type_barang extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'id','type_barang', 'keterangan', 
        
    ];
    protected $table= "type_barang";

}
