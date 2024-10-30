<?php

// app/Http/Controllers/TelevisorController.php
namespace App\Http\Controllers;

use App\Models\Televisor;
use Illuminate\Http\Request;

class TelevisorController extends Controller
{
    public function index()
    {
        $televisores = Televisor::all();
        return view('televisores.index', compact('televisores')); // Verifica que el nombre coincida
    }

    public function create()
    {
        return view('televisores.create'); // Verifica que el nombre coincida
    }

    public function show(Televisor $televisor)
    {
        return view('televisores.show', compact('televisor')); // Verifica que el nombre coincida
    }

    public function edit(Televisor $televisor)
    {
        return view('televisores.edit', compact('televisor')); // Verifica que el nombre coincida
    }
}
