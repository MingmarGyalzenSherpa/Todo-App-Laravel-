<?php

namespace App\Http\Controllers;

use App\Models\todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{

    //display from database
    public function index(){
        return view('welcome',['list'=>Todo::all()]);
    }


    //save to database
    public function saveTodo(Request $data){
        $task = new Todo();
        $task->title = $data->title;
        $task->save();
        return redirect('/');
    }

    //delete from database
    public function deleteTodo($id){
       
        $task = Todo::find($id);
       
        $task->delete();
        return redirect('/');
    }

    public function editTodo($id){
        $data = Todo::find($id);
        return view('edit',['data' => $data]);
        

    }

    public function updateTodo(Request $req){

        $data = Todo::find($req->id);
        $data->title = $req->title;
        $data->save();
        return redirect('/');
    }
}