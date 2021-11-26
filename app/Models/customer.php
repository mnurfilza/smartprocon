<?php

namespace App\Models;

use App\Models\Offering;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{

    protected $fillable = [
      'id', 'name', 'email', 'phone_number', 'city', 'country' ,'create_at',
    ];    
    
    public function offering(){
        return $this->hasOne(Offering::class);
    }

    public $timestamps = false;
}


