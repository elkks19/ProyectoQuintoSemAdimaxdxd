<?php

namespace App\Http\Controllers;

use App\Models\CategoriasPorDocumento;
use Illuminate\Http\Request;

/**
 * Class CategoriasPorDocumentoController
 * @package App\Http\Controllers
 */
class CategoriasPorDocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoriasPorDocumentos = CategoriasPorDocumento::paginate(10);

        return view('categorias-por-documento.index', compact('categoriasPorDocumentos'))
            ->with('i', (request()->input('page', 1) - 1) * $categoriasPorDocumentos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoriasPorDocumento = new CategoriasPorDocumento();
        return view('categorias-por-documento.create', compact('categoriasPorDocumento'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CategoriasPorDocumento::$rules);

        $categoriasPorDocumento = CategoriasPorDocumento::create($request->all());

        return redirect()->route('categorias-por-documento.index')
            ->with('success', 'CategoriasPorDocumento created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categoriasPorDocumento = CategoriasPorDocumento::find($id);

        return view('categorias-por-documento.show', compact('categoriasPorDocumento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoriasPorDocumento = CategoriasPorDocumento::find($id);

        return view('categorias-por-documento.edit', compact('categoriasPorDocumento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CategoriasPorDocumento $categoriasPorDocumento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoriasPorDocumento $categoriasPorDocumento)
    {
        request()->validate(CategoriasPorDocumento::$rules);

        $categoriasPorDocumento->update($request->all());

        return redirect()->route('categorias-por-documento.index')
            ->with('success', 'CategoriasPorDocumento updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $categoriasPorDocumento = CategoriasPorDocumento::find($id)->delete();

        return redirect()->route('categorias-por-documento.index')
            ->with('success', 'CategoriasPorDocumento deleted successfully');
    }
}
