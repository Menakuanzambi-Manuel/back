<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = Curso::get();
        return view('admin.cursos.index', compact('cursos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cursos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$request->validate([
            'nome' =>['required', 'max:100', 'min:50'],
            'sigla' => ['required', 'max:5', 'min:3'],
        ]);*/

        $cursos = new Curso;
        $cursos->nome = $request->input('nome');
        $cursos->sigla = $request->input('sigla');
        $cursos->save();

        return redirect()->route('cursos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cursos = Curso::find($id);
        return view('admin.cursos.edit', compact('cursos'));
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
        $cursos = Curso::find($id);
        $cursos->nome = $request->input('nome');
        $cursos->sigla = $request->input('sigla');
        $cursos->save();

        return redirect()->route('cursos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cursos = Curso::findOrFail($id);
        $cursos->delete();
        return redirect()->route('cursos.index');
    }
}
