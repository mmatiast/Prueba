<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Requests\SaveProjectRequest;
class ProjectController extends Controller
{
    public function index()
    {
        return view('projects.index', [
        'projects' => Project::paginate()
       ]);
    }
    public function show($id)
     {
       return view('projects.show', [
         'project'=> Project::findOrFail($id)
       ]);
     }

      public function create()
     {
       return view('projects.create', [
        'project' => new Project
       ]);
     }

     public function store(SaveProjectRequest $request)
     {
        Project::create($request->validated());
        return redirect()->route('projects.index')->with('status', 'El proyecto fue creado con exitos');
     }
     public function edit(Project $project)
     {
       return view('projects.edit',[
         'project' => $project
       ]);
     }
      public function update(SaveProjectRequest $request, $id)
     {
      $project= Project::findOrFail($id);
       $project->update( $request->all() );
       return redirect()->route('projects.show', $project->id)->with('status', 'El proyecto fue actualizado con exitos');
     }
     public function destroy(Project $project)
     {
        $project->delete();
       return redirect()->route('projects.index')->with('status', 'El proyecto fue eliminado con exitos');

     }


}
