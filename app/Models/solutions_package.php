<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class solutions_package extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'id','id_solution', 'nama_solution', 'id_object','nama_object',
    ];
    protected $table= "solutions_packages";

}
