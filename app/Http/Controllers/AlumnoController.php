<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Models\Escuela;

class AlumnoController extends Controller
{
    /**
     * Load the table rows and generate the pagination
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $alumnos = Alumno::latest()->paginate(5);
        $escuelas = Escuela::all();

        return view('Alumno.table', compact('alumnos'), compact('escuelas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Function load the view to generate new alumnes, also include data from escuela
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $escuelas = Escuela::all();

        return view('Alumno.insert', compact('escuelas'));
    }

    /**
     * Generate the new alumne
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'Nombre' => 'required',
            'Apellidos' => 'required',
            'Nacimiento' => 'required',
            'Ciudad' => 'required'
        ]);

        Alumno::create($request->all());

        return redirect()->route('alumno.index')
            ->with('success', 'Alumno insert.');
    }

    /**
     * Function to call the of edit
     * @param Alumno $alumno
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Alumno $alumno)
    {
        $escuelas = Escuela::all();

        return view('Alumno.edit', compact('alumno'), compact('escuelas'));
    }


    /**
     * Function to update
     * @param Request $request
     * @param Alumno $alumno
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Alumno $alumno)
    {
        $request->validate([
            'Nombre' => 'required',
            'Apellidos' => 'required',
            'Nacimiento' => 'required',
            'Ciudad' => 'required',
            'escuela_id' => 'required'
        ]);
        $alumno->update($request->all());

        return redirect()->route('alumno.index')
            ->with('success', 'Alumno update');
    }

    /**
     * Function to delete alumno
     * @param Alumno $alumno
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Alumno $alumno)
    {
        $alumno->delete();

        return redirect()->route('alumno.index')
            ->with('success', 'Alumno deleted');
    }



}
