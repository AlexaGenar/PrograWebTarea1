<?php
namespace App\Http\Controllers;

class AuthorController extends Controller
{
    private function getAuthors()
    {
        return [
            1 => [
                'id' => 1,
                'author' => 'Abraham Silberschatz',
                'nationality' => 'Israeli / American',
                'birth_year' => 1952,
                'fields' => 'Database Systems, Operating Systems',
                 'books__book_id' => [1, 2],
                'books__title' => [
                    'Operating System Concepts',
                    'Database System Concepts',
                ],
            ],
            2 => [
                'id' => 2,
                'author' => 'Andrew S. Tanenbaum',
                'nationality' => 'Dutch / American',
                'birth_year' => 1944,
                'fields' => 'Distributed Computing, Operating Systems',
                'books__book_id' => [3, 4],
                'books__title' => [
                    'Computer Networks',
                    'Modern Operating Systems',
                ],
            ],
        ];
    }

    public function index()
    {
        $authors = $this->getAuthors();
        return view('authors.index', compact('authors'));
    }

    public function show($id)
    {
        $authors = $this->getAuthors();
        $author = $authors[$id];
        return view('authors.show', compact('author'));
    }
}