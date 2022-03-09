<?php

namespace App\Http\Controllers;

use App\Models\solution;
use Illuminate\Http\Request;

class SolutionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $param = ['data'=> solution::paginate(10)];
        return view('dashboard.solution.solution',$param);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.solution.form_solution');

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
            'max'=>':attribute maksimal :max karakter',
        ];
        $request->validate([
            'nama_solution' => 'required|max:50',
            'keterangan' => 'required|max:100',

        ],$messages);
        try {
            
            $tb = new solution();
            $tb->nama_solution = $request->nama_solution;
            $tb->keterangan = $request->keterangan;
            $tb->save();

        } catch (\Throwable $th) {
            return redirect()->back()->withErrors(['error', 'Gagal menambahkan data']);
        }

        return redirect('/solution')->with('success', 'Berhasil menambahkan');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\solution  $solution
     * @return \Illuminate\Http\Response
     */
    public function show(solution $solution)
    {
        return solution::find($solution->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\solution  $solution
     * @return \Illuminate\Http\Response
     */
    public function edit(solution $solution)
    {

        $param =['old'=> $this->show($solution)]; 
        return view('dashboard.solution.form_solution',$param);    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\solution  $solution
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, solution $solution)
    {
        $messages = [
            'required' => ':attribute wajib diisi',
            'max'=>':attribute maksimal :max karakter',
        ];
         $validaateData = $request->validate([
            'nama_solution' => 'required|max:50',
            'keterangan' => 'required|max:100',
        ],$messages);

       
        try {
            solution::where('id',$solution->id)->update($validaateData);
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors(['error',$th->getMessage()]);
        }

        return redirect('/solution')->with('success', 'Berhasil mengubah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\solution  $solution
     * @return \Illuminate\Http\Response
     */
    public function destroy(solution $solution)
    {
        solution::destroy($solution->id);
        return redirect()->back()->with('success', 'Berhasil menghapus data');
    }


    public function getAllSolution()
    {
        return solution::all();
    }
}
