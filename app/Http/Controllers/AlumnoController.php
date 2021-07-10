<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Models\Escuela;

use Symfony\Component\Console\Input\Input;

class AlumnoController extends Controller
{
    /**
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
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $escuelas = Escuela::all();

        return view('Alumno.insert', compact('escuelas'));
    }

    /**
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
     * @param Alumno $alumno
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Alumno $alumno)
    {
        $escuelas = Escuela::all();

        return view('Alumno.edit', compact('alumno'), compact('escuelas'));
    }


    /**
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
