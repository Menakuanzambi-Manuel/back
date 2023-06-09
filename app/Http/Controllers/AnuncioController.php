<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anuncio;

class AnuncioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anuncios = Anuncio::get();
        return view('admin.anuncios.index', compact('anuncios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.anuncios.create');   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       /* $request->validate([
            'descricao' =>['required', 'max:100', 'min:50'],
        ]);*/

        $anuncios = new Anuncio;
        $anuncios->descricao = $request->input('descricao');
        $anuncios->save();
        return redirect()->route('anuncios.index');
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
        $anuncios = Anuncio::find($id);
        return view('admin.anuncios.edit', compact('anuncios'));
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
        $anuncios = Anuncio::find($id);
        $anuncios->descricao = $request->input('descricao');
        $anuncios->save();

        return redirect()->route('anuncios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $anuncios = Anuncio::findOrFail($id);
        $anuncios->delete();
        return redirect()->route('anuncios.index');
    }
}
