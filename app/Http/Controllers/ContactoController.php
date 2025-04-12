<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use App\Http\Requests\ContactoRequest;

/**
 * Class ContactoController
 * @package App\Http\Controllers
 */
class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contactos = Contacto::paginate();

        return view('contacto.index', compact('contactos'))
            ->with('i', (request()->input('page', 1) - 1) * $contactos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $contacto = new Contacto();
        return view('contacto.create', compact('contacto'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContactoRequest $request)
    {
        Contacto::create($request->validated());

        return redirect()->route('contactos.index')
            ->with('success', 'Contacto created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $contacto = Contacto::find($id);

        return view('contacto.show', compact('contacto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $contacto = Contacto::find($id);

        return view('contacto.edit', compact('contacto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ContactoRequest $request, Contacto $contacto)
    {
        $contacto->update($request->validated());

        return redirect()->route('contactos.index')
            ->with('success', 'Contacto updated successfully');
    }

    public function destroy($id)
    {
        Contacto::find($id)->delete();

        return redirect()->route('contactos.index')
            ->with('success', 'Contacto deleted successfully');
    }
}
