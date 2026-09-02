<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrainingCenters;

class TrainingCentersController extends Controller
{
    public function create()
    {
        return view('TrainingCenters.create');
    }

    public function dato(Request $request)
    {
        TrainingCenters::create($request->only('name', 'location'));

        return redirect()->route('trainingcenter.index');
    }

    public function index()
    {
        $trainingcenters = TrainingCenters::orderBy('id', 'desc')->get();

        return view('TrainingCenters.index', compact('trainingcenters'));
    }

    public function show(int $id)
    {
        $trainingcenter = TrainingCenters::findOrFail($id);

        return view('TrainingCenters.show', compact('trainingcenter'));
    }

    public function edit(TrainingCenters $trainingcenter)
    {
        return view('TrainingCenters.edit', compact('trainingcenter'));
    }

    public function update(Request $request, TrainingCenters $trainingcenter)
    {
        $trainingcenter->name = $request->name;
        $trainingcenter->location = $request->location;
        $trainingcenter->save();

        return redirect()->route('trainingcenter.index');
    }

    public function destroy(TrainingCenters $trainingcenter)
    {
        $trainingcenter->delete();

        return redirect()->route('trainingcenter.index');
    }
}
