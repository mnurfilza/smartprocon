<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class solution extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'id', 'nama_solution', 'keterangan',
    ];
}
