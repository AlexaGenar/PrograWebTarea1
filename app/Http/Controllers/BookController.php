<?php
namespace App\Http\Controllers;

class BookController extends Controller
{
    private function getBooks()
    {
        return [
            1 => [
                'id' => 1,
                'title' => 'Operating System Concepts',
                'edition' => '9th',
                'copyright' => 2012,
                'language' => 'English',
                'pages' => 976,
                'author' => 'Abraham Silberschatz',
                'author_id' => 1,
                'publisher' => 'John Wiley & Sons',
                'publisher_id' => 1,
            ],
            2 => [
                'id' => 2,
                'title' => 'Database System Concepts',
                'edition' => '6th',
                'copyright' => 2010,
                'language' => 'English',
                'pages' => 1376,
                'author' => 'Abraham Silberschatz',
                'author_id' => 1,             
                'publisher' => 'John Wiley & Sons',
                'publisher_id' => 1,
            ],
            3 => [
                'id' => 3,
                'title' => 'Computer Networks',
                'edition' => '5th',
                'copyright' => 2010,
                'language' => 'English',
                'pages' => 960,       
                'author' => 'Andrew S. Tanenbaum',
                'author_id' => 2,
                'publisher' => 'Pearson Education',
                'publisher_id' => 2,
            ],
            4 => [
                'id' => 4,
                'title' => 'Modern Operating Systems',
                'edition' => '4th',
                'copyright' => 2014,
                'language' => 'English',
                'pages' => 1136,        
                'author' => 'Andrew S. Tanenbaum',
                'author_id' => 2,              
                'publisher' => 'Pearson Education',
                'publisher_id' => 2,
            ],
        ];
    }

    public function index()
    {
        $books = $this->getBooks();
        return view('books.index', compact('books'));
    }

    public function show($id)
    {
        $books = $this->getBooks();
        $book = $books[$id];
        return view('books.show', compact('book'));
    }
}