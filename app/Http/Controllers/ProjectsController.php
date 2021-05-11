<?php

namespace App\Http\Controllers;

use Facade\FlareClient\Api;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

use App\Models\Project;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProjectsController extends Controller
{
    
    public function index() 

    {

        $projects = auth()->user()->projects;

        return view('projects.index', compact('projects'));

    }

    public function show(Project $project) 

    {

        // if (auth()->user()->isNot($project->owner) ) {
        //     abort(403);
        // }

        return view('projects.show', compact('project'));

    }

    public function create() 
    
    {
        return view('projects.create');
    }
    
    public function store() 

    {
        
        //validate
        

        $attributes = request()->validate([
            'title' => 'required', 
            'description' => 'required'
            
        ]);

        $attributes['owner_id'] = Auth::id();

        auth()->user->projects->create($attributes);

        return redirect('/projects');

    }

}
