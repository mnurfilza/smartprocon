<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubSolutionPackage extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'id', 'id_solution_package', 'package','sku','nama_barang','jumlah','ruangan','lantai',
    ];
    protected $table= "sub_solution_packages";


}
