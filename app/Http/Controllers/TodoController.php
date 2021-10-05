<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Models\User;
use Illuminate\Http\Request;

class TodoController extends Controller
{

    public function index(){
        $allTodo = Todo::orderBy('created_at', "DESC")->get();
        return view('todos.index', [
            'allTodos' => $allTodo
        ]);
    }

    public function create(){
        return view('todos.create', [
            "allTodos" => Todo::orderBy('created_at', "DESC")->get()
        ]);
    }

    public function store (Request $request){
        //dd($request->method());
        User::where();
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

    public function details($id){
        $todo = Todo::find($id);
        //$todo = Todo::select('completed')->where('id',$id)->first();
        $todoWithWhere = Todo::where('id', /* '=', */ $id)->first();

        //dd($todo, $todoWithWhere);

        if ($todo){
            //dd($todo);
            return view('todos.details', ['todo' => $todo]);
        }
    }

    public function update(Request $request, $id){
        $todo = Todo::find($id);
        if ($todo){
            $todo->update([
                'descritption' => $request->description
            ]);
        }
    }
}
