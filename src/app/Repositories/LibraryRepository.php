<?php

namespace App\Repositories;

use App\Models\Library;

class LibraryRepository
{
    public function all()
    {
        return Library::all();
    }

    public function byId(int $id)
    {
        return Library::find($id);
    }

    public function create(string $title): Library
    {
        $library = new Library();
        $library->title = $title;
        $library->save();

        return $library;
    }

    public function update(Library $library, string $title): Library
    {
        $library->title = $title;
        $library->save();

        return $library;
    }

    public function delete(Library $library)
    {
        $library->delete();
    }
}
