<?php

namespace App\Http\Controllers;

use App\Models\Date;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::orderBy('id','desc')->paginate(10);
        return view("home.index",compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $date = Date::all();
        return view('home.create',compact('date'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $validateDate = $request->validate([
            'name' => 'required|string|max:255',
            'task' => 'required|string|max:255',
            'priority' => 'required|integer|between:1,10',
            'date_id' => 'required|exists:dates,id',
        ]);
        Task::create($validateDate);
        return redirect()->route('home.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tasks = Task::find($id);
        return view('home.show',compact('tasks'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tasks = Task::find($id);
        $date = Date::all();
        return view('home.edit',compact('tasks','date'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validateDate = $request->validate([
            'name' => 'required|string|max:255',
            'task' => 'required|string|max:255',
            'priority' => 'required|integer|between:1,10',
            'date_id' => 'required|exists:dates,id',
        ]);
        Task::find($id)->update($validateDate);
        return redirect()->route('home.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Task::find($id)->delete();
        return redirect()->route('home.index');
    }
}
