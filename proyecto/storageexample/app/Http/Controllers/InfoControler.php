<?php

namespace App\Http\Controllers;

use App\Http\Requests\InfoRequest;
use App\Models\Info;
use Illuminate\Http\Request;

class InfoControler extends Controller
{
    public function index()
    {
       
        $infos = \App\Models\Info::all();
        return view('index', compact('infos'));
    }

    public function create()
    {
        
        return view('create');
    }


public function store(InfoRequest $request)
{
    if ($request->hasFile('file')) {
        $file = $request->file('file');
        $fileName = time() . '.' . $file->extension();
        $request->file->storeAs('public/upload', $fileName);

        $info = new Info();
        $info->name = $request->name;
        $info->file_url = $fileName;
        $info->save();

        echo "Archivo subido exitosamente: " . $fileName;

        return redirect()->route('index')->with('success', 'Info created successfully.');
    } else {
        return back()->withErrors(['file' => 'No se subió ningún archivo.']);
    }
}

}
