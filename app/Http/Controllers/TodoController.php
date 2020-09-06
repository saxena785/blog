<?php

namespace App\Http\Controllers;
use App\Todo;
//use Illuminate\Http\Request;
use App\Http\Requests\TodoCreateRequest;

class TodoController extends Controller
{

     public function index(){
         
       $todos = Todo::all(); 
       //return $todos;
        
       return view('todos.index',compact('todos'));

     }
  
     public function create(){


    return view ('todos.create');
     }

     public function store(TodoCreateRequest $request)
     {
         //validation

       /*  $validatedData = $request->validate([
          'title' => 'required|max:255',
          
      ]);*/
         // dd($request->all());
      Todo::create($request->all());
       return redirect()->back()->with('message','Message created succesfully');
        //return view ('todos.store');
    }

     public function edit($id){

       // dd($id);
        $todo= Todo::find($id);
         
        return view ('todos.edit',compact('todo'));
    }
}
