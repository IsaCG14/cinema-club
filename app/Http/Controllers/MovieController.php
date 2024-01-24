<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Models\Movie;
use App\Http\Requests\MovieCreateRequest;
use App\Http\Requests\MovieUpdateRequest;
use Illuminate\Routing\Route;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelis = Movie::All();
        return view("index", compact("pelis"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("estrenos");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MovieCreateRequest $request)
    {
        Movie::create($request->all());

        //Guardar imagen
        $movie = Movie::latest()->first();
        $id = $movie->id;
        $image = $request->file("image");
        $image->move('images', 'poster'.$id.'.jpg');

        return redirect('movie');
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
    public function edit(Request $request)
    {
        $id = $request['id'];
        $movie = Movie::find($id);
        return view("editar", ['movie'=>$movie]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MovieUpdateRequest $request, $id)
    {
        $movie = Movie::find($id);
        $movie->fill($request->all());
        $movie->save();
        return Redirect::to("/movie");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rutaImagen = public_path('images/poster'.$id.'.jpg');
        if (file_exists($rutaImagen)) {
            unlink($rutaImagen);
        }
        $movie = Movie::find($id);
        $movie->delete();
        return Redirect::to("/movie");
    }
}
