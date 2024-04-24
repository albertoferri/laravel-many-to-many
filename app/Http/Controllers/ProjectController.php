<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Technology;
use App\Models\Type;
use App\Http\Requests\StoreProjectRequest;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view("project.index", compact("projects"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // prelevo le categorie dal db per passarle
        $types = Type::all();
        $technologies = Technology::all();

        return view("project.create", compact('types', 'technologies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {

        $request->validated();


        $newProject = new Project();

        
        if($request->hasFile('thumb')){
            // qui ci salviamo il percorso dell'immagine in una variabile e contemporanteamente salviamo l'immagine nel server
            $path = Storage::disk('public')->put('project_image', $request->thumb);
            $newProject->thumb = $path;
        }

        $newProject->fill($request->all());
        
        $newProject->save();

        $newProject->technologies()->attach($request->technologies);


        return redirect()->route("project.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('project.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $types = Type::all();
        $technologies = Technology::all();

        return view('project.edit', compact('project', 'types', 'technologies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreProjectRequest $request, Project $project)
    {

        $request->validated();


        $project->update($request->all());

        if($request->hasFile('thumb')){
            // qui ci salviamo il percorso dell'immagine in una variabile e contemporanteamente salviamo l'immagine nel server
            $path = Storage::disk('public')->put('project_image', $request->thumb);
            $project->thumb = $path;
        }

        $project->save();
        
        return redirect()->route('project.show', $project->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        
        return redirect()->route("project.index");
    }
}
