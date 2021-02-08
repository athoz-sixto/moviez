<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $texto=trim($request->get('txtabuscar'));
        //$peliculas=Pelicula::all();
        $peliculas=DB::table('peliculas')
            ->select('id','titulo_original','titulo_esp','anio','pais','director','genero','sinopsis','imagen')
            ->where('titulo_original','LIKE','%'.$texto.'%')
            ->orWhere('titulo_esp','LIKE','%'.$texto.'%')
            ->orderBy('titulo_original','asc')
            ->paginate(15);            
        //return $peliculas;
        return view('moviez.index',compact('peliculas','texto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('moviez.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pelicula = new Pelicula;
        $pelicula->titulo_original = $request->input('titulo_original');
        $pelicula->titulo_esp = $request->input('titulo_esp');
        $pelicula->anio = $request->input('anio');
        $pelicula->pais = $request->input('pais');
        $pelicula->director = $request->input('director');
        $pelicula->genero = $request->input('genero');
        $pelicula->sinopsis = $request->input('sinopsis');
        $pelicula->imagen = $request->input('imagen');
        $pelicula->save();
        return redirect()->route("moviez.index");
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
        $pelicula = Pelicula::findOrFail($id);
        return view ('moviez.edit', compact('pelicula'));
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
        $pelicula = Pelicula::findOrFail($id);
        $pelicula->titulo_original = $request->input('titulo_original');
        $pelicula->titulo_esp = $request->input('titulo_esp');
        $pelicula->anio = $request->input('anio');
        $pelicula->pais = $request->input('pais');
        $pelicula->director = $request->input('director');
        $pelicula->genero = $request->input('genero');
        $pelicula->sinopsis = $request->input('sinopsis');
        $pelicula->imagen = $request->input('imagen');
        $pelicula->save();
        return redirect()->route("moviez.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pelicula = Pelicula::findOrFail($id);
        $pelicula->delete();
        return redirect()->route("moviez.index");
    }
}
