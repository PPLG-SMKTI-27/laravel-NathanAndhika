<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\project;
use App\Models\ProjectHistory;

class projectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->get();
        $histories = ProjectHistory::latest()->take(10)->get();
        return view('dashboard', compact('projects', 'histories'));
    }

    public function portfolio()
    {
        $projects = Project::latest()->get();

        return view('portofolio', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        $project = Project::create($request->all());

        ProjectHistory::create([
            'project_id' => $project->id,
            'title' => $project->title,
            'action' => 'created'
        ]);

        return redirect()->route('projects.index');
    }

    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $project->update($request->all());
        return redirect()->route('projects.index');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        ProjectHistory::create([
            'project_id' => $project->id,
            'title' => $project->title,
            'action' => 'deleted'
        ]);

        return back();
    }

    public function restore($id)
    {
        $project = Project::withTrashed()->findOrFail($id);

        $project->restore();

        // simpan history restore
        ProjectHistory::create([
            'project_id' => $project->id,
            'title' => $project->title,
            'action' => 'restored'
        ]);

        return redirect()->back()->with('success', 'Project berhasil direstore');
    }

    public function forceDelete($id)
    {
        $project = Project::withTrashed()->findOrFail($id);
        $project->forceDelete();

        return redirect()->back()->with('success', 'Project dihapus permanen');
    }

    public function trash()
    {
        $projects = Project::onlyTrashed()->latest()->get();
        return view('projects.trash', compact('projects'));
    }
}
