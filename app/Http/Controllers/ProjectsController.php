<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App/Project;

class ProjectsController extends Controller
{
	public function index()
	{
	$projects = Projects::all();	
	return view('projects.index')->with('projects', $projects);

	} 
	public function create()
	{
      return view('project.create');
	}
	public function store()
	{
      $project = new Project;
      $project->title = request()->title;
      $project->description = request()->title;
      $project->due_date= request(->due_date;
      $project->save();
	}
    public function show(Project $project)
    {
      return view('project.show')->with('project',$project);
    }
}
