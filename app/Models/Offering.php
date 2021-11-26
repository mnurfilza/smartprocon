<?php

namespace App\Models;


use App\Models\customer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offering extends Model
{
    use HasFactory;

    protected $fillable = ['id','id_solution','id_customer','option','number_of_floors','number_of_rooms','object_id','object','budget','solution'];

    public function customer(){
        return $this->belongsTo(customer::class,'customer_id','id');
    }

    public $timestamps = false;
}
