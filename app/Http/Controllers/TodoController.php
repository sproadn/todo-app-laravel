<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function create(){
        return view('todos.create', [
            "allTodos" => Todo::orderBy('created_at', "DESC")->get()
        ]);
    }

    public function store (Request $request){
        //dd($request->method());
        if ($request->method() === "POST"){
            $datas = $request->all();
            Todo::create([
                'title' => $datas['title'],
                'description' => $datas['description'],
                'todo_date' => $datas['todo_date'],
                'completed' => false
            ]);

            return redirect()->route('create_todo');

            
        }
    }
}
