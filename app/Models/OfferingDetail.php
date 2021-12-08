<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfferingDetail extends Model
{
    use HasFactory;
    protected $fillable = ['id','offering_id','sku','nama_produk','qty','harga','total','ongkir','ongkos_pasang'];
    public $timestamps = false;
    protected $table = "offering_details";

}
