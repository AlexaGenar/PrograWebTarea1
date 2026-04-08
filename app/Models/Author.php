<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable = ['author', 'nationality', 'birth_year', 'fields'];

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}