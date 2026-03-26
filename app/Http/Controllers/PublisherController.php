<?php
namespace App\Http\Controllers;

class PublisherController extends Controller
{
    private function getPublishers()
    {
        return [
            1 => [
                'id' => 1,
                'publisher' => 'John Wiley & Sons',
                'country' => 'United States',
                'founded' => 1807,
                'genere' => 'Academic',
                 'books' => [
                ['id' => 1, 'title' => 'Operating System Concepts'],
                ['id' => 2, 'title' => 'Database System Concepts'],
            ],
            ],
            2 => [
                'id' => 2,
                'publisher' => 'Pearson Education',
                'country' => 'United Kingdom',
                'founded' => 1844,
                'genere' => 'Education',
                'books' => [
                ['id' => 3, 'title' => 'Computer Networks'],
                ['id' => 4, 'title' => 'Modern Operating Systems'],
            ],
            ],
        ];
    }

    public function index()
    {
        $publishers = $this->getPublishers();
        return view('publishers.index', compact('publishers'));
    }

    public function show($id)
    {
        $publishers = $this->getPublishers();
        $publisher = $publishers[$id];
        return view('publishers.show', compact('publisher'));
    }
}