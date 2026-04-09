<?php 
namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    // Mostrar lista de autores
    public function index()
    {
        $authors = Author::all();  // Obtener autores desde la base de datos
        return view('authors.index', compact('authors'));
    }

    // Mostrar autor individual
    public function show($id)
    {
        $author = Author::findOrFail($id);  // Buscar autor por ID
        return view('authors.show', compact('author'));
    }

    // Mostrar formulario para crear autor
    public function create()
    {
        return view('authors.create');  
    }

    public function store(Request $request)
    {
        $request->validate([
            'author' => 'required|string|max:255',
            'nationality' => 'required|string|max:255',
            'birth_year' => 'required|integer',
            'fields' => 'required|string|max:255',
        ]);

        Author::create($request->all());  

        return redirect()->route('authors.index');  
    }

   
    public function edit($id)
    {
        $author = Author::findOrFail($id);  
        return view('authors.edit', compact('author')); 
    }

    // Actualizar autor en la base de datos
    public function update(Request $request, $id)
    {
        $request->validate([
            'author' => 'required|string|max:255',
            'nationality' => 'required|string|max:255',
            'birth_year' => 'required|integer',
            'fields' => 'required|string|max:255',
        ]);

        $author = Author::findOrFail($id);  // Buscar autor por ID
        $author->update($request->all());  // Actualizar autor con nuevos datos

        return redirect()->route('authors.index');  // Redirigir al listado de autores
    }
}
