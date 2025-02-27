<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos = Alumno::all()->sortBy("nombre");
        return view("alumnos.index",["alumnos" => $alumnos]);

        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validar
        //recoger los datos
        $datos = $request->input();

        $alumno = new Alumno($datos);
        $alumno->save();
        session()->flash("status","Se ha creado el alumno $alumno->nombre");
        return redirect(route("alumnos.index"));

         // $nombre = $_POST['nombre'];
        //guardarlo en la bd
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }
public function create()
    {
        return view("alumnos.create");
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }
    public function edit(Alumno $alumno)
    {
        return view("alumnos.create",["alumno" => $alumno]);
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        session()->flash("status","Se ha borrado $alumno->nombre");
        return redirect(route("alumnos.index"));

        //
    }
}
