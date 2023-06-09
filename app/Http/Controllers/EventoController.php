<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos = Evento::get();
        return view('admin.eventos.index', compact('eventos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.eventos.create');
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
            'descricao' => ['required', 'max:200', 'min:100'],
            'imagem' => ['required', 'mines:jpg,png,jpeg']
        ]);*/

        $eventos = new Evento;

        if($request->hasFile('imagem')){
            $eventos->imagem = $request->imagem->store('foto');
        }

        $eventos->nome = $request->input('nome');
        $eventos->descricao = $request->input('descricao');
        $eventos->save();
        return redirect()->route('eventos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $eventos = Evento::find($id);
        return view('admin.eventos.edit', compact('eventos'));
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
        
        $eventos = Evento::find($id);
        $eventos->nome = $request->input('nome');
        $eventos->descricao = $request->input('descricao');
        $eventos->imagem = $request->input('imagem');
        $eventos->save();

        return redirect()->route('eventos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eventos = Evento::findOrFail($id);
        $eventos->delete();
        return redirect()->route('eventos.index');
    }
}
