<?php

namespace App\Http\Controllers;

use App\Http\Resources\AlumnoCollection;
use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new AlumnoCollection(Alumno::all());
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
