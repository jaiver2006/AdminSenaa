<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;
use App\Models\Areas;
use App\Models\TrainingCenters;

class CoursesController extends Controller
{
    public function create()
    {
        $areas = Areas::all();
        $trainingCenters = TrainingCenters::all();

        return view('Courses.create', compact('areas', 'trainingCenters'));
    }
    public function dato(Request $request)
    {
        Courses::create($request->only(
            'numero_de_curso',
            'day',
            'area_id',
            'training_centers_id'
        ));

        return redirect()->route('course.index');
    }

    public function index()
    {
        $courses = Courses::with('area', 'training_center')->orderBy('id', 'desc')->get();

        return view('Courses.index', compact('courses'));
    }

    public function show(int $id)
    {
        $course = Courses::findOrFail($id);

        return view('Courses.show', compact('course'));
    }

    public function edit(Courses $courses)
    {
        $areas = Areas::all();
        $trainingCenters = TrainingCenters::all();

        return view('Courses.edit', compact('courses', 'areas', 'trainingCenters'));
    }

    public function update(Request $request, Courses $courses)
    {
        $courses->update($request->only(
            'numero_de_curso',
            'day',
            'area_id',
            'training_centers_id'
        ));

        return redirect()->route('course.index');
    }

    public function destroy(Courses $courses)
    {
        $courses->delete();

        return redirect()->route('course.index');
    }
}
