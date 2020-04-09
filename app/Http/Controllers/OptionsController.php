<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\options;

class OptionsController extends Controller
{
    public function Options(){
                  
        $options=options::all();
        $data=[];
        foreach($options as $i=>$option)
        {
          $data['results'][$i]['id']=$option->id;
          $data['results'][$i]['text']=$option->name;
        }
        $data['pagination']['more']=false;


        //seeder
        //factory
      
        return response()->json($data, 200); 
        
        //return view('options.mostrar');
    }
}
