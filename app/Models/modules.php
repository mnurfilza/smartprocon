<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modules extends Model
{
    use HasFactory;
    protected $table = "modules";
    public $timestamps = false;
    protected $fillable = ['id','id_solutions','solutions','link'];
}
