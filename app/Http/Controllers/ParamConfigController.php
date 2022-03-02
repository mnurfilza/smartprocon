<?php

namespace App\Http\Controllers;

use App\Models\ParamConfig;
use Illuminate\Http\Request;

class ParamConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $param = ['data'=> ParamConfig::paginate(10)];
        return view('dashboard.config_page.config_page',$param);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ParamConfig  $paramConfig
     * @return \Illuminate\Http\Response
     */
    public function show(ParamConfig $paramConfig)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ParamConfig  $paramConfig
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $param = ['old'=>ParamConfig::find($id)];
       
        return view('dashboard.config_page.form_config_page',$param);
    }
   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ParamConfig  $paramConfig
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ParamConfig $paramConfig)
    {
        $messages = [
            'required' => ':attribute wajib diisi',
        ];
         $validaateData = $request->validate([
            'value' => 'required',
        ],$messages);

       


        try {
            ParamConfig::where('id',$request->id_config)->update($validaateData);
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors(['error',$th->getMessage()]);
        }

        return redirect('/paramconfig')->with('success', 'Berhasil mengubah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ParamConfig  $paramConfig
     * @return \Illuminate\Http\Response
     */
    public function destroy(ParamConfig $paramConfig)
    {
        //
    }
}
