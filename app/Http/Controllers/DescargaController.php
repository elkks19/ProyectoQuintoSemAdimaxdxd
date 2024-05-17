<?php

namespace App\Http\Controllers;

use App\Models\Descarga;
use Illuminate\Http\Request;

/**
 * Class DescargaController
 * @package App\Http\Controllers
 */
class DescargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $descargas = Descarga::paginate(10);

        return view('descarga.index', compact('descargas'))
            ->with('i', (request()->input('page', 1) - 1) * $descargas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $descarga = new Descarga();
        return view('descarga.create', compact('descarga'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Descarga::$rules);

        $descarga = Descarga::create($request->all());

        return redirect()->route('descargas.index')
            ->with('success', 'Descarga created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $descarga = Descarga::find($id);

        return view('descarga.show', compact('descarga'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $descarga = Descarga::find($id);

        return view('descarga.edit', compact('descarga'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Descarga $descarga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Descarga $descarga)
    {
        request()->validate(Descarga::$rules);

        $descarga->update($request->all());

        return redirect()->route('descargas.index')
            ->with('success', 'Descarga updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $descarga = Descarga::find($id)->delete();

        return redirect()->route('descargas.index')
            ->with('success', 'Descarga deleted successfully');
    }
}
