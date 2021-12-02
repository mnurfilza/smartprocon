<?php

namespace App\Http\Controllers;

use App\Models\OfferingDetail;
use Illuminate\Http\Request;

class OfferingDetailController extends Controller
{
    public function getOfferingDetail(OfferingDetail $offeringDetail)
    {
        return $offeringDetail->where('offering_id', $offeringDetail->offering_id)->get();
    }

}
