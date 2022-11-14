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
    public function deleteTodo(){
        return redirect('/');
    }
}