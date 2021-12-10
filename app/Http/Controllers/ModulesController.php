<?php

namespace App\Http\Controllers;

use App\Models\modules;
use App\Models\solution;
use Illuminate\Http\Request;

class ModulesController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $param = ['data'=> modules::paginate(10)];
        return view('dashboard.modules.modules',$param);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $param = ["solution"=>solution::all()];
        return view('dashboard.modules.form_modules',$param);    
    }


    public function store(Request $request)
    {

        $messages = [
            'required' => ':attribute wajib diisi',
        ];
        $request->validate([
            'solution' => 'required',
            'link' => 'required',
        ],$messages);

        try {

        $solution = new solution();
        $modules = new modules();
        $solutionCount = $modules->where('id_solutions', $request->solution)->get()->count();
        if ($solutionCount > 0){
            throw new \Exception("Modules For This Solution Already Exists");   
        }

       
        $modules->id_solutions = $request->input('solution');
        $modules->solutions = $solution->find($modules->id_solutions)->nama_solution;
        $modules->link = $request->input('link');
        $modules->save();

        } catch (\Throwable $th) {
            return back()->withErrors(['error', $th->getMessage()]);
        }
        //store normaly
        return redirect('/modules')->with('success', 'Berhasil menambahkan data');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\modules  $modules
     * @return \Illuminate\Http\Response
     */
    public function show(modules $modules)
    {
        return modules::where('id',$modules->id)->first();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\modules  $modules
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        
        $modules = new modules();
        $modules->id = $id;
        $param =['old'=> $this->show($modules),'solution'=> solution::all()]; 
        return view('dashboard.modules.form_modules',$param);    
    }


    public function update(Request $request, modules $modules)
    {
        //

        $messages = [
            'required' => ':attribute wajib diisi',
        ];
        $request->validate([
            'solution' => 'required',
            'link' => 'required',
        ],$messages);

        try {

        $solution = new solution();

        $modules->id_solutions = $request->input('solution');
        $modules->solutions = $solution->find($modules->id_solution)->nama_solution;
        $modules->link = $request->input('link');
        $modules->save();

        } catch (\Throwable $th) {
            return back()->withErrors(['error', $th->getMessage()]);
        }
        //store normaly
        return redirect()->back()->with('success','Data Berhasil Disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\modules  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        //
        modules::where('id',$id)->delete();
        return redirect()->back()->with('success', 'Berhasil menghapus data');
    }


   
}
