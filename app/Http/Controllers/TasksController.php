<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Http\Requests\createTaskRequest;
use Illuminate\Foundation\Validation\ValidatesRequests;

class TasksController extends Controller
{
    use ValidatesRequests;#идет в виде трейда

    public function index(){
        $tasks=Task::all();
        #return view('tasks.index');
        return view('tasks.index',['tasks'=>$tasks]);
    }
    public function create(){
        return view('tasks.create');
    }
    #Request
    public function tore(createTaskRequest $request){
       # $this->validate($request,[
       #     'title'=>'required',
       #     'description'=>'required'
        #]);
        Task::created($request->all());
        return redirect()->route('tasks.index');

    }
    public function store(Request $request){
        #$task = new Task();
       # $task->fill($request->all());
       # $task->save();

         $this->validate($request,[
             'title'=>'required',
             'description'=>'required'
        ]);
        Task::create($request->all());
        return redirect()->route('tasks.index');
    }
    public function edit($id){
        $myTask = Task::find($id);
        return view('tasks.edit',['task'=>$myTask]);
    }
    public function update(Request $request,$id){
         $this->validate($request,[
             'title'=>'required',
             'description'=>'required'
        ]);
         $myTask = Task::find($id);
         $myTask->fill($request->all());
         $myTask->save();

         return redirect()->route('tasks.index');
    }
    public function show($id)
    {
        $myTask=Task::find($id);
            return view('tasks.show',['task'=>$myTask]);
    }
    public function destroy($id)
    {
        Task::find($id)->delete();
        return redirect()->route('tasks.index');
    }

}

