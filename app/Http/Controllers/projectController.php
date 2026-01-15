<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\views\project;

class projectController extends Controller
{
    public function index()
    {
        return view('project', [
            'nama' => 'Nathan'
        ]);
    }
}
