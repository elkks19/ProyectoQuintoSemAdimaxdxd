<?php

namespace App\Http\Controllers;

use App\Models\TiposDeCopium;
use Illuminate\Http\Request;

/**
 * Class TiposDeCopiumController
 * @package App\Http\Controllers
 */
class TiposDeCopiumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiposDeCopia = TiposDeCopium::paginate(10);

        return view('tipos-de-copium.index', compact('tiposDeCopia'))
            ->with('i', (request()->input('page', 1) - 1) * $tiposDeCopia->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tiposDeCopium = new TiposDeCopium();
        return view('tipos-de-copium.create', compact('tiposDeCopium'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TiposDeCopium::$rules);

        $tiposDeCopium = TiposDeCopium::create($request->all());

        return redirect()->route('tipos-de-copia.index')
            ->with('success', 'TiposDeCopium created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tiposDeCopium = TiposDeCopium::find($id);

        return view('tipos-de-copium.show', compact('tiposDeCopium'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tiposDeCopium = TiposDeCopium::find($id);

        return view('tipos-de-copium.edit', compact('tiposDeCopium'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TiposDeCopium $tiposDeCopium
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TiposDeCopium $tiposDeCopium)
    {
        request()->validate(TiposDeCopium::$rules);

        $tiposDeCopium->update($request->all());

        return redirect()->route('tipos-de-copia.index')
            ->with('success', 'TiposDeCopium updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tiposDeCopium = TiposDeCopium::find($id)->delete();

        return redirect()->route('tipos-de-copia.index')
            ->with('success', 'TiposDeCopium deleted successfully');
    }
}
