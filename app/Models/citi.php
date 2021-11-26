<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class citi extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "regional";

    protected $fillable = [
        'id', 'id_provinsi', 'provinsi','nama_kota',
    ];

}
