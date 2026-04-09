<?php

namespace App\Http\Controllers;

use App\Models\Book;  // Asegúrate de importar el modelo Book
use Illuminate\Http\Request;

class BookController extends Controller
{
    // Muestra todos los libros
    public function index()
    {
        $books = Book::all();  // Obtiene todos los libros de la base de datos
        return view('books.index', compact('books'));  // Pasa los libros a la vista
    }

    // Muestra el detalle de un libro específico
    public function show($id)
    {
        $book = Book::findOrFail($id);  // Encuentra el libro por ID o lanza un error 404 si no existe
        return view('books.show', compact('book'));  // Pasa el libro a la vista
    }

    // Muestra el formulario para crear un nuevo libro
   // Muestra el formulario para crear un nuevo libro
public function create()
{
    $authors = Author::all();  // Obtener todos los autores desde la base de datos
    $publishers = Publisher::all();  // Obtener todas las editoriales desde la base de datos
    return view('books.create', compact('authors', 'publishers'));  // Pasar los autores y publishers a la vista
}

    // Guarda un nuevo libro en la base de datos
    public function store(Request $request)
    {
        $request->validate([  // Valida los datos del formulario
            'title' => 'required',
            'edition' => 'required',
            'copyright' => 'required',
            'language' => 'required',
            'pages' => 'required|integer',
            'author_id' => 'required|exists:authors,id',  // Valida que el autor exista
            'publisher_id' => 'required|exists:publishers,id',  // Valida que la editorial exista
        ]);

        // Crea el libro en la base de datos
        Book::create($request->all()); 

        return redirect()->route('books.index');  // Redirige a la lista de libros
    }

    // Muestra el formulario para editar un libro
    public function edit($id)
    {
        $book = Book::findOrFail($id);  // Encuentra el libro por ID o lanza error 404
        return view('books.edit', compact('book'));  // Pasa el libro a la vista de edición
    }

    // Actualiza los datos de un libro en la base de datos
    public function update(Request $request, $id)
    {
        $request->validate([  // Valida los datos del formulario
            'title' => 'required',
            'edition' => 'required',
            'copyright' => 'required',
            'language' => 'required',
            'pages' => 'required|integer',
            'author_id' => 'required|exists:authors,id',  // Valida que el autor exista
            'publisher_id' => 'required|exists:publishers,id',  // Valida que la editorial exista
        ]);

        $book = Book::findOrFail($id);  // Encuentra el libro por ID o lanza error 404
        $book->update($request->all());  // Actualiza los datos del libro

        return redirect()->route('books.index');  // Redirige a la lista de libros
    }
}