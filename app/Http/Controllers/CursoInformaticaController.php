<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CursoInformatica;

class CursoInformaticaController extends Controller
{
    public function index()
    {
        $cursosInformatica = CursoInformatica::all();
        return view('cursoinformatica.index', compact('cursosInformatica'));
    }

    public function create()
    {
        return view('cursoinformatica.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'nullable',
            'duracion' => 'required',
            'nivel' => 'required',
        ]);

        CursoInformatica::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'duracion' => $request->duracion,
            'nivel' => $request->nivel,
        ]);

        return redirect()->route('cursoinformatica.index')->with('success', 'Curso de informática creado correctamente.');
    }

    public function show($id)
    {
        $cursoInformatica = CursoInformatica::findOrFail($id);
        return view('cursoinformatica.show', compact('cursoInformatica'));
    }

    public function edit($id)
    {
        $cursoInformatica = CursoInformatica::findOrFail($id);
        return view('cursoinformatica.edit', compact('cursoInformatica'));
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'nombre' => 'required',
        'descripcion' => 'nullable',
        'duracion' => 'required|integer|min:1',
        'nivel' => 'required',
        'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $cursoInformatica = CursoInformatica::findOrFail($id);

    if ($request->hasFile('imagen')) {
        $imagePath = $request->file('imagen')->store('cursos', 'public');
        $cursoInformatica->imagen = $imagePath;
    }

    $cursoInformatica->update($request->except(['imagen']));

    return redirect()->route('cursoinformatica.show', $cursoInformatica->id)->with('success', 'Curso de informática actualizado correctamente.');
}

    public function destroy($id)
    {
        $cursoInformatica = CursoInformatica::findOrFail($id);
        $cursoInformatica->delete();

        return redirect()->route('cursoinformatica.index')->with('success', 'Curso de informática eliminado correctamente.');
    }
}
