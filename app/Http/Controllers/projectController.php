<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\project;

class projectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        // $projects = collect([]);

        return view('project', [
            'nama' => 'Nathan',
            'projects' => $projects,
        ]);
    }
}
