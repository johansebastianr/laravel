<?php

namespace App\Http\Controllers;

use App\Models\Cursos;
use App\Models\User;
use App\Models\Profile;
use App\Models\Coche;
use App\Models\Empleado;
use App\Models\Categoría;
use App\Models\Post;
use App\Models\Video;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    public function index()
    {

    $user = User::find(1);
    return $user->profile;
    
    $coche = Coche::find(1);
    return $coche->empleado;

    $post = Post::find(1);
    return $post->user;

    $video = Video::find(1);
    return $video->user;

    $video = User::find(1);
    return $user->video;

    //$cursos = Cursos::orderBy('id', 'desc')->get();
    //return view('curso.listar', compact('cursos'));

    }

    public function create()
    {
        return view('curso.create');

    }

    public function store(Request $request)
    {

        $curso = new Cursos();
        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;

        //ADJUNTAR EL PDF
        $file = $request->file("urlPdf");
        $nombreArchivo = "pdf_" . time() . "." . $file->guessExtension();
        $request->file('urlPdf')->storeAs('public/imagenes', $nombreArchivo);
        $curso->urlPdf = $nombreArchivo;
        $curso->save();
        return redirect()->route('curso.index');

    }
     //Edit
     public function edit(Cursos $curso){//Encuentro el Curso

        return view('curso.edit',compact('curso'));

    }
    // update
      public function update(Request $request, Cursos $curso){

        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->save();

        return redirect()->route('curso.index');

      }
    public function show(Cursos $curso)
    {

        return view('curso.show', compact('curso'));


    }

    public function destroy(Cursos $curso)
    {

        $curso->delete();
        return redirect()->route('curso.index');
    }
}
