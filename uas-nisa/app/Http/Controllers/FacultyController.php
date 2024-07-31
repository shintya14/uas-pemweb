<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    public function index()
    {
        $faculties = Faculty::all();
        return view('faculties.index', compact('faculties'));
    }

    public function create()
    {
        return view('faculties.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'lecturer_code' => 'required|string|max:255',
            'lecturer_name' => 'required|string|max:255',
            'study_program' => 'required|string|max:255',
            'campus_base' => 'required|string|max:255',
        ]);

        Faculty::create($request->only([
            'lecturer_code',
            'lecturer_name',
            'study_program',
            'campus_base',
        ]));

        return redirect()->route('faculties.index')->with('success', 'Faculty created successfully.');
    }

    public function show(Faculty $faculty)
    {
        return view('faculties.show', compact('faculty'));
    }

    public function edit(Faculty $faculty)
    {
        return view('faculties.edit', compact('faculty'));
    }

    public function update(Request $request, Faculty $faculty)
    {
        $request->validate([
            'lecturer_code' => 'required|unique:faculties,lecturer_code,' . $faculty->id,
            'lecturer_name' => 'required',
            'study_program' => 'required',
            'campus_base' => 'required',
        ]);

        $faculty->update($request->all());
        return redirect()->route('faculties.index')->with('success', 'Faculty updated successfully.');
    }

    public function destroy(Faculty $faculty)
    {
        $faculty->delete();
        return redirect()->route('faculties.index')->with('success', 'Faculty deleted successfully.');
    }
}
