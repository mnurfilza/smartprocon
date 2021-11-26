<?php

namespace App\Http\Controllers;

use App\Models\modules;
use App\Models\modulesList;
use FFMpeg\Format\Audio\Aac;
use FFMpeg\Format\Video\X264;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use ProtoneMedia\LaravelFFMpeg\Support\FFMpeg;

class ModulesController extends Controller
{
    public function store(Request $request)
    {
        $list = new modulesList;
        $desc = $list->where('id_modules',$request->input('system'))->first();
        $modules = new modules;
        $modules->system = $desc->modules;
        $modules->id_module = $request->input('system');
        //upload pdf or video
        $file = $request->file('file');

        if ($file->getClientOriginalName() == null){
            return redirect()->back()->with('error', 'No file selected');
        }

        try {
            if ($file->getClientOriginalExtension() == "pdf"){
                $modules->pdf = base64_encode(file_get_contents($file));
                $modules->video ="";
            }elseif ($file->getClientOriginalExtension() == "mp4") {

                $modules->pdf = "";
                $path = 'assets/media/'.$modules->id_module.".mp4";
                Storage::disk('local')->put($path, file_get_contents($file));
                $modules->video = $path;
            }else{
                throw new \Exception("File type not supported");
            }
             } catch (\Throwable $th) {
            return back()->withErrors(['file' => $th->getMessage()]);
        }


        //check if module already exists
        $mod = $modules->where('id_module',$request->input('system'))->first();
        if ($mod !== null) {
            return back()->withErrors(['system' => 'Module already exists']);
        }
        $modules->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\modules  $modules
     * @return \Illuminate\Http\Response
     */
    public function show(modules $modules)
    {

        return view("dashboard.upload",['data'=>[],'list'=>[]]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\modules  $modules
     * @return \Illuminate\Http\Response
     */
    public function process(array $system)
    {
        print_r($system);
        die();

    }

    public function showPDF($id)
    {
        $modules = new modules;
        $file = $modules->where('id',$id)->first();
        $pdf = base64_decode($file->pdf);
        return response($pdf)->header('Content-Type', 'application/pdf');
    }

}
