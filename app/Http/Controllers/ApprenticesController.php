<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apprentices;
use App\Models\Computers;
use App\Models\Courses;


class ApprenticesController extends Controller
{
    public function create()
    {
        $computers = Computers::all();
        $courses = Courses::all();

        return view('Apprentices.create', compact('computers', 'courses'));
    }

    public function dato(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'cell_number' => ['required', 'string', 'max:20'],
            'course_id' => ['nullable', 'exists:courses,id'],
            'computer_id' => ['nullable', 'exists:computers,id'],
        ]);

        Apprentices::create($validated);

        return redirect()->route('aprendiz.index');
    }

    public function index()
    {
        $apprentices = Apprentices::with('computer', 'course')->orderBy('id', 'desc')->get();

        return view('Apprentices.index', compact('apprentices'));
    }

    public function show(int $id)
    {
        $aprendiz = Apprentices::findOrFail($id);

        return view('Apprentices.show', compact('aprendiz'));
    }

    public function edit(Apprentices $apprentices)
    {
        $courses = Courses::all();
        $computers = Computers::all();

        return view('Apprentices.edit', compact('apprentices', 'courses', 'computers'));
    }

    public function update(Request $request, Apprentices $apprentices)
    {
        $apprentices->update($request->only(
            'name',
            'email',
            'cell_number',
            'course_id',
            'computer_id'
        ));

        return redirect()->route('aprendiz.index');
    }

    public function destroy(Apprentices $apprentices)
    {
        $apprentices->delete();

        return redirect()->route('aprendiz.index');
    }
}
