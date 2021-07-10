<?php

namespace App\Http\Controllers;

use App\Models\Escuela;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class EscuelaController extends Controller
{
    /**
     * Load the table rows and generate the pagination
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {

        $escuelas = Escuela::latest()->paginate(5);

        return view('Escuela.table', compact('escuelas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('Escuela.insert');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'Nombre' => 'required',
            'Direccion' => 'required',
            'logotipo' => 'max:2048',

        ]);

        if ($request->hasFile('logotipo'))
        {
            $file = $request->file('logotipo');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/', $filename);
            $request->logotipo = $filename;
        }


        Escuela::create($request->all());



        return redirect()->route('escuela.index')
            ->with('success', 'Escuela insert.');
    }

    /**
     * @param Escuela $escuela
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Escuela $escuela)
    {
        return view('Escuela.edit', compact('escuela'));
    }


    /**
     * @param Request $request
     * @param Escuela $escuela
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Escuela $escuela)
    {
        $request->validate([
            'Nombre' => 'required',
            'Direccion' => 'required',
            'logotipo' => 'max:2048'


        ]);

        if ($request->hasFile('logotipo'))
        {
            $file = $request->file('logotipo');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/', $filename);
            $request->logotipo = $filename;
        }

        $escuela->update($request->all());


        return redirect()->route('escuela.index')
            ->with('success', 'Escuela update');
    }

    /**
     * @param Escuela $escuela
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Escuela $escuela)
    {
        $escuela->delete();

        return redirect()->route('escuela.index')
            ->with('success', 'Escuela deleted');
    }
}
