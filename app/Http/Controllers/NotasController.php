<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nota;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\NotasRequest;
class NotasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notas = Nota::all();
        return view('notas.index',compact('notas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      /*   if(auth()->user()->can('eliminar notas')){ */
          return view('notas.crear');
       /*  }
        about(403); */
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NotasRequest $request)
    {
        $nota = new Nota($request->validated());
        $nota->save();
        return redirect()->route('notas.index')->with('status','El proyecto fue creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eliminar($id)
    {
     /*   if(auth()->user()->can('eliminar notas')){ */
        Nota::findOrFail($id)->delete();
        return redirect()->back();
     /*   }
       abort(403); */
    }
}
