<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

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


    public function store(){

        Project::create(request()->all());

        //  Project::create([

        // 'name' => request('name'),
        // 'description' => request('description'),
        
         //]);

        

        return redirect('/');
    }


    public function show($id)
    {

        dd(Project::where('id',$id)->firts());

        

        
    }
}
