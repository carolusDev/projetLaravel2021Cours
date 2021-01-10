<?php

namespace App\Http\Controllers;
use App\Models\{Task, Category, Board}; use Illuminate\Http\Request; use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{

    /**
     * Create the controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->authorizeResource(Task::class, 'task');
    }

    /**
     * Display a listing of the resource.
     *
     * @param  \App\Models\Board $board
     * @return \Illuminate\Http\Response
     */
    public function main(Board $board)
    {
        //return view();
    }


    /**
     * Show the form for creating a new resource from a specific board.
     *
     * @param Board $board
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Board $board)
    {
        $user = Auth::user();
        $categories = Category::all();
        //return view();
    }

    /**
     * Store a newly created resource in storage for a given board.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param Board $board
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Board $board)
    {
        //
        $validatedData['board_id'] = $board->id;
        Task::create($validatedData);
        //return view();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Board $board
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Board $board, Task $task)
    {
        //
        //return view();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Board $board
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Board $board, Task $task)
    {
        $user = Auth::user();
        $categories = Category::all();
        //return view();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Board $board
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Board $board, Task $task)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'max:4096',
            'state' => 'required|todo,ongoing,done',
            'due_date' => 'required|date|after:today',
            'category_id' => 'nullable|integer|exists:categories,id',
        ]);

        $validatedData['board_id'] = $board->id;
        $task->update($validatedData);
        //return view();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Board $board
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Board $board, Task $task)
    {
        $task->delete();
        //return view();
    }
}
