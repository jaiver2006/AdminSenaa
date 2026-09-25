<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computers;

class ComputersController extends Controller
{
    public function create()
    {
        return view('Computers.create');
    }

    public function model(Request $request)
    {
        Computers::create([
            'number' => $request->numero,
            'brand'  => $request->marca,
        ]);

        return redirect()->route('computer.index');
    }

    public function index()
    {
        $computers = Computers::orderBy('id', 'desc')->get();
        return view('Computers.index', compact('computers'));
        return response()->json($computers);
    }

    public function show(int $id)
    {
        $computer = Computers::findOrFail($id);
        return view('Computers.show', compact('computer'));
    }

    public function edit(Computers $computer)
    {
        return view('Computers.edit', compact('computer'));
    }

    public function update(Request $request, Computers $computer)
    {
        $computer->number = $request->numero;
        $computer->brand = $request->marca;
        $computer->save();

        return redirect()->route('computer.index');
    }

    public function destroy(Computers $computer)
    {
        $computer->delete();

        return redirect()->route('computer.index');
    }
}
