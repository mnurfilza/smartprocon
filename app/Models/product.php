<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table= "products";
    protected $fillable = [
        'sku', 'nama', 'type_barang','berat_barang','garansi','harga_satuan','description','createBy','updateBy'
    ];  
    public $timestamps = false;
}
