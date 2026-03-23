<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\ProjectHistory;

class ProjectController extends Controller
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
            'description' => 'required',
            'screenshots.*' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $data = $request->except('screenshots');

        // Handle technology as comma-separated string
        if ($request->filled('technology')) {
            $data['technology'] = array_map('trim', explode(',', $request->technology));
        } else {
            $data['technology'] = [];
        }

        // Default handling for other potential null columns
        $data['repo_url'] = $request->input('repo_url', '');
        $data['progress'] = $request->input('progress', 0);
        if ($request->hasFile('screenshots')) {
            $paths = [];
            foreach ($request->file('screenshots') as $file) {
                $paths[] = $file->store('project-screenshots', 'public');
            }
            $data['screenshots'] = $paths;
        }

        $project = Project::create($data);

        return redirect()->route('dashboard')->with('success', 'Project launched successfully.');
    }

    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $request->validate([
            'screenshots.*' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $data = $request->except(['screenshots', '_token', '_method']);

        // Handle technology as comma-separated string
        if ($request->filled('technology')) {
            $data['technology'] = array_map('trim', explode(',', $request->technology));
        } else {
            $data['technology'] = [];
        }

        // Handle new screenshot uploads
        if ($request->hasFile('screenshots')) {
            $existing = $project->screenshots ?? [];
            $paths = [];
            foreach ($request->file('screenshots') as $file) {
                $paths[] = $file->store('project-screenshots', 'public');
            }
            $data['screenshots'] = array_merge($existing, $paths);
        }

        $project->update($data);
        return redirect()->route('dashboard')->with('success', 'Project recalibrated successfully.');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        if (request()->expectsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Project berhasil dipindahkan ke Space Debris.',
            ]);
        }

        return redirect()->route('dashboard')->with('success', 'Project decommissioned to Debris Field.');
    }

    public function restore($id)
    {
        $project = Project::withTrashed()->findOrFail($id);

        $project->restore();

        return redirect()->back()->with('success', 'Project successfully restored.');
    }

    public function forceDelete($id)
    {
        $project = Project::withTrashed()->findOrFail($id);

        // Delete screenshot files from storage
        if ($project->screenshots) {
            foreach ($project->screenshots as $path) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($path);
            }
        }

        $project->forceDelete();

        if (request()->expectsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Module purged permanently.',
            ]);
        }

        return redirect()->route('projects.trash')->with('success', 'Module purged permanently.');
    }

    public function trash()
    {
        $projects = Project::onlyTrashed()->latest()->get();
        return view('projects.trash', compact('projects'));
    }

    public function deleteScreenshot(Request $request, Project $project)
    {
        $path = $request->input('path');
        $screenshots = $project->screenshots ?? [];
        
        \Illuminate\Support\Facades\Log::info('Attempting to delete screenshot', [
            'project_id' => $project->id,
            'path_to_delete' => $path,
            'existing_screenshots' => $screenshots
        ]);

        $key = array_search($path, $screenshots);

        if ($key !== false) {
            // Delete file from storage
            if (\Illuminate\Support\Facades\Storage::disk('public')->exists($path)) {
                \Illuminate\Support\Facades\Storage::disk('public')->delete($path);
                \Illuminate\Support\Facades\Log::info('File deleted from storage', ['path' => $path]);
            } else {
                \Illuminate\Support\Facades\Log::warning('File not found in storage', ['path' => $path]);
            }

            // Remove from array and update DB
            unset($screenshots[$key]);
            $project->screenshots = array_values($screenshots);
            $project->save();
            
            \Illuminate\Support\Facades\Log::info('DB record updated', ['new_screenshots' => $project->screenshots]);

            if ($request->expectsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Screenshot removed successfully.',
                ]);
            }

            return back()->with('success', 'Screenshot removed successfully.');
        }
        
        \Illuminate\Support\Facades\Log::error('Path not found in screenshots array', [
            'path' => $path,
            'array' => $screenshots
        ]);

        if ($request->expectsJson()) {
            return response()->json([
                'success' => false,
                'message' => 'Screenshot was not found in our database.',
            ], 404);
        }

        return back()->with('error', 'Screenshot was not found in our database.');
    }
}
