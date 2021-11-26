<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ongkos_pasang extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['id_kota','kota','provinsi','type_barang','harga'];
    protected $table= "ongkos_pasang";


}