<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OptionsController extends Controller
{
    public function Options(){
              
        $data = '{
          "results": [
            {
              "id": 1,
              "text": "Option 1"
            },
            {
              "id": 2,
              "text": "Option 2"
            }
          ],
          "pagination": {
            "more": false
          }
        }';

        return response()->json(json_decode($data), 200); 
        
        //return view('options.mostrar');
    }
}
