<?php

namespace App\Http\Controllers;

use App\Models\solution;
use App\Models\solutions_package;
use App\Models\type_object;
use Illuminate\Http\Request;

use function Psy\debug;

class SolutionsPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $param = ['data'=> solutions_package::paginate(10)];
        return view('dashboard.solution_package.solution_package',$param);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $param =['solution'=> solution::all(),'object'=> type_object::all()];
        return view('dashboard.solution_package.form_solution_package',$param);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':attribute wajib diisi',
        ];
        $request->validate([
            'nama_solution' => 'required',
            'nama_object' => 'required',

        ],$messages);


        try {
            
            $tb = new solutions_package();
            $tb->id_solution = $request->nama_solution;

            //find solution
            $solution = new solution();
            $solution->id = $request->nama_solution;
            $tb->nama_solution = SolutionController::show($solution)->nama_solution;
            //end find solution

            //find object
            $tb->id_object = $request->nama_object;
            $object= new type_object();
            $object->id = $request->nama_object;
            $tb->nama_object = TypeObjectController::show($object)->nama_object;
            //end object
            $tb->save();

        } catch (\Throwable $th) {
            return redirect()->back()->withErrors(['error', 'Gagal menambahkan data : '.$th->getMessage()]);
        }

        return redirect('/solutions_package')->with('success', 'Berhasil menambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\solutions_package  $solutions_package
     * @return \Illuminate\Http\Response
     */
    public function show(solutions_package $solutions_package)
    {
       
        return solutions_package::find($solutions_package->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\solutions_package  $solutions_package
     * @return \Illuminate\Http\Response
     */
    public function edit(solutions_package $solutions_package)
    {
        $param =['old'=> $this->show($solutions_package),'object'=> type_object::all(),'solution'=> solution::all()]; 
        return view('dashboard.solution_package.form_solution_package',$param);    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\solutions_package  $solutions_package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, solutions_package $solutions_package)
    {
        $messages = [
            'required' => ':attribute wajib diisi',
        ];
         $validaateData = $request->validate([
            'nama_solution' => 'required',
            'nama_object' => 'required',
        ],$messages);

        try {
             //find solution
             $solution = new solution();
             $solution->id = $request->nama_solution;
             $solutions_package->id_solution = $request->nama_solution;
             $solutions_package->nama_solution = SolutionController::show($solution)->nama_solution;
             //end find solution
 
             //find object
             $solutions_package->id_object = $request->nama_object;
             $object= new type_object();
             $object->id = $request->nama_object;
             $solutions_package->nama_object = TypeObjectController::show($object)->nama_object;
             //end object
             $solutions_package->save();
            } catch (\Throwable $th) {
            return redirect()->back()->withErrors(['error',$th->getMessage()]);
        }

        return redirect('/solutions_package')->with('success', 'Berhasil mengubah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\solutions_package  $solutions_package
     * @return \Illuminate\Http\Response
     */
    public function destroy(solutions_package $solutions_package)
    {
        solutions_package::destroy($solutions_package->id);
        return redirect()->back()->with('success', 'Berhasil menghapus data');
    }


    //get solution by object and solution id
    public function getSolution($id_solution, $id_object)
    {
        return solutions_package::where('id_solution',$id_solution)->where('id_object',$id_object)->first();
    }
}
