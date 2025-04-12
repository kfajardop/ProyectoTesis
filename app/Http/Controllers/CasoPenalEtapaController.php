<?php

namespace App\Http\Controllers;

use App\Models\CasoPenalEtapa;
use App\Http\Requests\CasoPenalEtapaRequest;

/**
 * Class CasoPenalEtapaController
 * @package App\Http\Controllers
 */
class CasoPenalEtapaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $casoPenalEtapas = CasoPenalEtapa::paginate();

        return view('caso-penal-etapa.index', compact('casoPenalEtapas'))
            ->with('i', (request()->input('page', 1) - 1) * $casoPenalEtapas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $casoPenalEtapa = new CasoPenalEtapa();
        return view('caso-penal-etapa.create', compact('casoPenalEtapa'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CasoPenalEtapaRequest $request)
    {
        CasoPenalEtapa::create($request->validated());

        return redirect()->route('caso-penal-etapas.index')
            ->with('success', 'CasoPenalEtapa created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $casoPenalEtapa = CasoPenalEtapa::find($id);

        return view('caso-penal-etapa.show', compact('casoPenalEtapa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $casoPenalEtapa = CasoPenalEtapa::find($id);

        return view('caso-penal-etapa.edit', compact('casoPenalEtapa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CasoPenalEtapaRequest $request, CasoPenalEtapa $casoPenalEtapa)
    {
        $casoPenalEtapa->update($request->validated());

        return redirect()->route('caso-penal-etapas.index')
            ->with('success', 'CasoPenalEtapa updated successfully');
    }

    public function destroy($id)
    {
        CasoPenalEtapa::find($id)->delete();

        return redirect()->route('caso-penal-etapas.index')
            ->with('success', 'CasoPenalEtapa deleted successfully');
    }
}
