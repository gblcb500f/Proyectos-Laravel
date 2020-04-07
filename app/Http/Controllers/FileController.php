<?php

namespace App\Http\Controllers;

use App\File;
use App\Http\Requests\Files;
use Illuminate\Http\Request;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(File $id)
    { 
        $file = File::find($id);
        return view('files.index',['file'=>$file]);
    }
    public function show(File $file){
        return view('files.index',['file'=>$file]);
    }
    
    public function upload($id, Files $request)
    {
        $file = $request->file('file');
        $path = public_path() . '/images/projects';
        $fileName = uniqid() . $file->getClientOriginalName();
    
        $file->move($path, $fileName);
    
        $projectImage = new File();
        $projectImage->project_id = $id;
        $projectImage->user_id = auth()->user()->id;
        $projectImage->file_name = $fileName;
        $projectImage->save();
    }
}
