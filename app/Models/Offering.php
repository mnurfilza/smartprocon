<?php

namespace App\Models;


use App\Models\customer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offering extends Model
{
    use HasFactory;

    protected $fillable = ['id','customer_id','option','number_of_floors_and_rooms','system','budget'];

    public function customer(){
        return $this->belongsTo(customer::class,'customer_id','id');
    }

    public $timestamps = false;
}
