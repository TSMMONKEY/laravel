<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

     /**
     * Display a listing of the resource.
     */
    public function to_do()
    {
        return view("pages.todo.todo");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "task_name" => "required|max:255",
            "task"=>"required|max:255",
            "task_description"=>"required|max:255"
        ]);

        $tasks = new Tasks();
        $tasks->task_name = $request->input('task_name');
        $tasks->task = $request->input('task');
        $tasks->task_description = $request->input('task_description');
        $tasks->save();

        return redirect('/dashboard')->with('success',$tasks->task_name .'Was Created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tasks $tasks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tasks $tasks)
    {
        $task = tasks::where([
            'id'=> '1'
            ])->first();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tasks $tasks)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tasks $tasks)
    {
        //
    }
}
