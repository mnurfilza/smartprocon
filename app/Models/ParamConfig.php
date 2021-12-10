<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParamConfig extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 'desc', 'value',
      ];    
      protected $table= "param_configs";
}
