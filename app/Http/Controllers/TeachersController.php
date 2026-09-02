<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teachers;
use App\Models\Areas;
use App\Models\TrainingCenters;

class TeachersController extends Controller
{
    public function create()
    {
        $areas = Areas::all();
        $trainingCenters = TrainingCenters::all();

        return view('Teachers.create', compact('areas', 'trainingCenters'));
    }

    public function dato(Request $request)
    {
        Teachers::create($request->only('name', 'email', 'area_id', 'training_centers_id'));

        return redirect()->route('teacher.index');
    }

    public function index()
    {
        $teachers = Teachers::with('area', 'trainingCenter')
            ->orderBy('id', 'desc')
            ->get();

        return view('Teachers.index', compact('teachers'));
    }

    public function show(int $id)
    {
        $teacher = Teachers::findOrFail($id);

        return view('Teachers.show', compact('teacher'));
    }

    public function edit(Teachers $teachers)
    {
        $areas = Areas::all();
        $trainingCenters = TrainingCenters::all();

        return view('Teachers.edit', compact('teachers', 'areas', 'trainingCenters'));
    }

    public function update(Request $request, Teachers $teachers)
    {
        $teachers->update($request->all());

        return redirect()->route('teacher.index');
    }

    public function destroy(Teachers $teachers)
    {
        $teachers->delete();

        return redirect()->route('teacher.index');
    }
}
