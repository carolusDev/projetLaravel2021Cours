<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskUser extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('TaskUser.index', ['user' => $user]);

    }

    public function create()
    {
        return view('TaskUser.create');
    }

    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'title' => 'required|string|max:255', 
            'description' => 'max:4096'
        ]);
        $TaskUser = new TaskUser(); 
        $TaskUser->title = $validatedData['title'];
        $TaskUser->description = $validatedData['description'];
        $TaskUser->state = $validatedData['state'];
        $TaskUser->user_id = Auth::user()->id; 

        $TaskUser->save(); 
        return redirect('/TaskUser');
        
    }

    public function show(TaskUser $TaskUserTaskUserd)
    {
        $TaskUserUsersIds = $TaskUser->users->pluck('id'); 
        $usersNotInTaskUser  = User::whereNotIn('id', $TaskUserUsersIds)->get();
        return view('TaskUser.show', ['TaskUser' => $TaskUser, 'users' => $usersNotInTaskUser]);
    }

    public function edit(TaskUser $TaskUser)
    {
        return view('TaskUser.edit', ['TaskUser' => $TaskUser]);
    }

    public function update(Request $request, TaskUser $TaskUser)
    {
        $validatedData = $request->validate([
                'title' => 'required|string|max:255', 
                'description' => 'max:4096',
                'state' => 'required|string|max:30'
            ]
        );
        $TaskUser->title = $validatedData['title']; 
        $TaskUser->description = $validatedData['description']; 
        $TaskUser->state = $validatedData['state'];
        $TaskUser->update(); 

        return redirect('/TaskUser');
    }

    public function destroy(TaskUser $TaskUser)
    {
        $TaskUser->delete();
        return redirect('/TaskUser');
    }
}
