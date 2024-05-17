<?php

namespace App\Http\Controllers;

use App\Models\Copia;
use Illuminate\Http\Request;

/**
 * Class CopiaController
 * @package App\Http\Controllers
 */
class CopiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $copias = Copia::paginate(10);

        return view('copia.index', compact('copias'))
            ->with('i', (request()->input('page', 1) - 1) * $copias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $copia = new Copia();
        return view('copia.create', compact('copia'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Copia::$rules);

        $copia = Copia::create($request->all());

        return redirect()->route('copias.index')
            ->with('success', 'Copia created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $copia = Copia::find($id);

        return view('copia.show', compact('copia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $copia = Copia::find($id);

        return view('copia.edit', compact('copia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Copia $copia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Copia $copia)
    {
        request()->validate(Copia::$rules);

        $copia->update($request->all());

        return redirect()->route('copias.index')
            ->with('success', 'Copia updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $copia = Copia::find($id)->delete();

        return redirect()->route('copias.index')
            ->with('success', 'Copia deleted successfully');
    }
}
