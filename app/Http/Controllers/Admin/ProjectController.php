<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $projects = Project::paginate();
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {

        $this->validate_form($request);

        $data = $request->all();
        $new_project = new Project;
        $new_project->fill($data);
        $new_project->save();

        return redirect()->route('admin.projects.show', $new_project)->with('message', 'Progetto creato con successo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     */
    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     */
    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     */
    public function update(Request $request, Project $project)
    {

        $this->validate_form($request);

        $data = $request->all();
        $project->update($data);
        return redirect()->route('admin.projects.show', compact('project'))->with('message', 'Progetto modificato con successo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('admin.projects.index')->with('message', 'Progetto eliminato con successo');
    }

    private function validate_form($request)
    {
        $request->validate([
            'title' => 'required|string|max:100',
            'author' => 'required|string|max:100',
            'description' => 'string|nullable',
            'project_link' => 'required|url'
        ], [
            'title.required' => 'Il titolo non può essere vuoto',
            'title.string' => "Il titolo dev'essere una stringa",
            'title.max' => 'La lunghezza massima è di 100 caratteri',
            'author.required' => "L'autore non può essere vuoto",
            'author.string' => "Il campo autore dev'essere una stringa",
            'author.max' => 'La lunghezza massima è di 100 caratteri',
            'description.string' => "La descrizione dev'essere un testo",
            'project_link.required' => "Il link non può essere vuoto",
            'project_link.url' => "Il link dev'essere un URL valido"
        ]);
    }
}
