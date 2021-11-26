<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type_object extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'id','nama_object', 'keterangan', 
        
    ];
    protected $table= "type_objects";

}
