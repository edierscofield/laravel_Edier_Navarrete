<?php


namespace App\Http\Controllers;

use App\Models\curso;
use COM;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    // /**
    //  * Display a listing of the resource.
    //  *

    //  */
    public function index()
    {
        $course = curso::all();
        //return $course;

        return view('cursos.index', compact('course'));

    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('cursos.create');
    }

    /**
     * Store a newly created resource in storage.

     */
    public function store(Request $request)
    {
       // return $request->all(); con esto devuelvo toda la informacion
         $course = new Curso();
         $course->nombre = $request->input('nombre');
         $course->descripcion = $request->input('descripcion');

         $course->save();
         return 'Guardado exitoso';

        }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          $curso = Curso::findOrFail($id);
    return view('cursos.show', compact('curso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
