<?php

namespace App\Http\Controllers;

use App\Models\TiposDeDocumento;
use Illuminate\Http\Request;

/**
 * Class TiposDeDocumentoController
 * @package App\Http\Controllers
 */
class TiposDeDocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiposDeDocumentos = TiposDeDocumento::paginate(10);

        return view('tipos-de-documento.index', compact('tiposDeDocumentos'))
            ->with('i', (request()->input('page', 1) - 1) * $tiposDeDocumentos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tiposDeDocumento = new TiposDeDocumento();
        return view('tipos-de-documento.create', compact('tiposDeDocumento'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TiposDeDocumento::$rules);

        $tiposDeDocumento = TiposDeDocumento::create($request->all());

        return redirect()->route('tipos-de-documento.index')
            ->with('success', 'TiposDeDocumento created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tiposDeDocumento = TiposDeDocumento::find($id);

        return view('tipos-de-documento.show', compact('tiposDeDocumento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tiposDeDocumento = TiposDeDocumento::find($id);

        return view('tipos-de-documento.edit', compact('tiposDeDocumento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TiposDeDocumento $tiposDeDocumento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TiposDeDocumento $tiposDeDocumento)
    {
        request()->validate(TiposDeDocumento::$rules);

        $tiposDeDocumento->update($request->all());

        return redirect()->route('tipos-de-documento.index')
            ->with('success', 'TiposDeDocumento updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tiposDeDocumento = TiposDeDocumento::find($id)->delete();

        return redirect()->route('tipos-de-documento.index')
            ->with('success', 'TiposDeDocumento deleted successfully');
    }
}
