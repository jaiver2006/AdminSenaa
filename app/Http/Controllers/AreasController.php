<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Areas;

class AreasController extends Controller
{
    public function create()
    {
        return view('Areas.create');
    }

    public function salida(Request $request)
    {
        Areas::create($request->only('name'));

        return redirect()->route('area.index');
    }

    public function index()
    {
        $areas = Areas::orderBy('id', 'desc')->get();

        return view('Areas.index', compact('areas'));
    }

    public function show(int $id)
    {
        $area = Areas::findOrFail($id);

        return view('Areas.show', compact('area'));
    }

    public function edit(Areas $areas)
    {
        return view('Areas.edit', compact('areas'));
    }

    public function update(Request $request, Areas $areas)
    {
        $areas->name = $request->name;
        $areas->save();

        return redirect()->route('area.index');
    }

    public function destroy(Areas $areas)
    {
        $areas->delete();

        return redirect()->route('area.index');
    }
}
