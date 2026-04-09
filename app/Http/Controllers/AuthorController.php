<?php 
namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
   
    public function index()
    {
        $authors = Author::all(); 
        return view('authors.index', compact('authors'));
    }

    
    public function show($id)
    {
        $author = Author::findOrFail($id);  
        return view('authors.show', compact('author'));
    }

    
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

  
    public function update(Request $request, $id)
    {
        $request->validate([
            'author' => 'required|string|max:255',
            'nationality' => 'required|string|max:255',
            'birth_year' => 'required|integer',
            'fields' => 'required|string|max:255',
        ]);

        $author = Author::findOrFail($id);  
        $author->update($request->all());  

        return redirect()->route('authors.index'); 
    }
}
