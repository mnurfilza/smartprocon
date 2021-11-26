<?php

namespace App\Http\Controllers;

use App\Models\type_object;
use Illuminate\Http\Request;

class OfferingController extends Controller
{
    public function index()
    {
        //show page offering
        $typeObject = new type_object;
        $solutions = SolutionController::getAllSolution();   
        $objects = TypeObjectController::GetAllData($typeObject);
        $citi = CitiController::getAllCiti();
        return view('offering',['data'=>$solutions, 'objects'=>$objects,'citi'=>$citi]);
    }
    
}

?>