<?php

namespace App\Repositories;

use App\Models\Book;

class BookRepository
{
    public function list()
    {
        return Book::select('books.*', 'users.name as user_name')
            ->join('users', 'users.id', '=', 'books.user_id')
            ->get();
    }

    public function byId(int $id)
    {
        return Book::find($id);
    }

    public function create(array $data)
    {

    }

    public function update(Book $book, array $data)
    {

    }
}
