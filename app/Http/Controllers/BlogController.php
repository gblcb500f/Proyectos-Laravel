<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\BlogRequest;
class BlogController extends Controller
{
    public function __construct()
    {
       // $this->middleware('auth')->except('index');
    }
    public function index(){
        clock(Blog::latest()->get());
        return view('projects.index',['blog'=>Blog::with('user')->latest()->get()]);
    }
    public function create(){
        return view('projects.create',['blog'=>new Blog]);
    }
    public function store(BlogRequest $request)
    {

        //Blog::created($request->validate());
        
        $blog = new Blog($request->validated());
        $blog->user()->associate(Auth::user());
        $blog->save(); 

        /*$entrada=$request->all();
        $entrada['user_id']=auth()->user()->id;
        if($archivo=$request->file('file')){
            $nombre=$archivo->getClientOriginalName();
            $archivo->move('images',$nombre);
            $entrada['img']=$nombre;
        }
       
        Blog::create($request->validated() );*/
    return redirect()->route('projects.index')->with('status','El proyecto fue creado con exito'); 
    }
    public function show(Blog $blog){
       return view('projects.show',['blog'=>$blog]);
    }
    public function edit(Blog $blog){
        return view('projects.edit',['blog'=>$blog]);
    }

    public function update(BlogRequest $request,Blog $blog){
        $blog->update($request->validated());
        return redirect()->route('projects.index',$blog)->with("status","El proyecto fue actualizado con exito");
    }
    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect()->route('projects.index')->with("status","El proyecto fue eliminado con exito");
    }

}
