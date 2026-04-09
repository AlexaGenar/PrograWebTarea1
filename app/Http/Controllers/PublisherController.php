<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    // Mostrar lista de publishers
    public function index()
    {
        $publishers = Publisher::all();  // Obtener publishers desde la base de datos
        return view('publishers.index', compact('publishers'));
    }

    // Mostrar publisher individual
    public function show($id)
    {
        $publisher = Publisher::findOrFail($id);  // Buscar publisher por ID
        return view('publishers.show', compact('publisher'));
    }

    // Mostrar formulario para crear publisher
    public function create()
    {
        return view('publishers.create');  // Vista para crear un nuevo publisher
    }

    // Almacenar publisher en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'publisher' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'founded' => 'required|integer',
            'genere' => 'required|string|max:255',
        ]);

        Publisher::create($request->all());  

        return redirect()->route('publishers.index');  
    }

    // Mostrar formulario para editar publisher
    public function edit($id)
    {
        $publisher = Publisher::findOrFail($id);  
        return view('publishers.edit', compact('publisher'));  
    }

    // Actualizar publisher en la base de datos
    public function update(Request $request, $id)
    {
        $request->validate([
            'publisher' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'founded' => 'required|integer',
            'genere' => 'required|string|max:255',
        ]);

        $publisher = Publisher::findOrFail($id);  
        $publisher->update($request->all());  
        return redirect()->route('publishers.index');  
    }
}