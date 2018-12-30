<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Http\Requests\ProjectRequest;

// $project = new Project();
        // $project->name = "Labo";
        // $project->description = "installation du labo";
        // $project->save();

// Project::create([

//  'name' => "kalama",
//  'description' => "devellopement"


// ]);
class ProjectsController extends Controller
{
    //


    public function index(){



$project = Project::get()->all();
    	

    	return view('Projects.index')->withProject($project);
    }


    public function create(){


    	return view('projects.create');
    }


    public function store(ProjectRequest $request){



        // request()->validate([
        //     'name' => 'required|min:6',
        //     'description' => 'required|between:6,500',
        // ]);

        $projectid = Project::create(request()->all());

        //  Project::create([

        // 'name' => request('name'),
        // 'description' => request('description'),
        
         //]);

        

        return redirect()->route('projects.show',$projectid);
    }


    public function show(Project $project)
    {

        
        //$project = Project::find($id);
        //$project = Project::where('id',$id)->first();

        return view('projects.show',[

            'project' => $project

        ]);
        
    }

    public function edit(Project $project){

        return view('projects.edit',[

            'project' => $project

        ]);
    }
    

    public function update(Project $project, ProjectRequest $request)
    {

        $project->update([
            'name' => request()->name,
            'description' => request()->description,
    
        ]);
        // $project->name = request()->name;
        // $project->description = request()->description;
        // $project->save();

        return redirect()->route('projects.show',$project);
    }

    public function destroy(Project $project){

        $project->delete();


        return redirect('/');
    }

    
}
