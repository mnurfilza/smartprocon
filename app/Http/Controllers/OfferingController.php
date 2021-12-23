<?php

namespace App\Http\Controllers;

use App\Models\Offering;
use App\Models\type_object;
use Illuminate\Http\Request;

class OfferingController extends Controller
{
    public function index()
    {
        //show page offering
        $typeObject = new type_object;
        $solutions = new SolutionController;
        $objects = new TypeObjectController;

        $citi = new CitiController;
        // return view('offering',['data'=>$solutions, 'objects'=>$objects,'citi'=>$citi]);
        return view('frontend.pages.offering',
        [
            'data'=>$solutions->getAllSolution(), 
            'objects'=>$objects->GetAllData(),
            'citi'=>$citi->getAllCiti(),
        ]);
    }


    public function showResult()
    {
        return view('result');
    }

}

?>
