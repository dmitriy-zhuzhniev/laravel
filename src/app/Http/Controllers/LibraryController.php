<?php

namespace App\Http\Controllers;

use App\Models\Library;
use App\Repositories\LibraryRepository;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function index(LibraryRepository $repository)
    {
        return view('libraries.list', ['libraries' => $repository->all()]);
    }

    public function create()
    {
        return view('libraries.create');
    }

    public function store(Request $request, LibraryRepository $repository)
    {
        $data = $request->validate(['title' => 'required|min:3']);

        $repository->create($data['title']);

        return redirect(route('libraries.index'));
    }

    public function show(LibraryRepository $repository, $id)
    {
        if (!$library = $repository->byId($id)) {
            abort(404);
        }

        return view('libraries.show', ['library' => $library]);
    }

    public function edit(LibraryRepository $repository, $id)
    {
        if (!$library = $repository->byId($id)) {
            abort(404);
        }

        return view('libraries.edit', ['library' => $library]);
    }

    public function update(Request $request, LibraryRepository $repository, $id)
    {
        $data = $request->validate(['title' => 'required|min:3']);

        if (!$library = $repository->byId($id)) {
            abort(404);
        }

        $repository->update($library, $data['title']);

        return redirect(route('libraries.show', ['library' => $library->id]));
    }

    public function destroy(LibraryRepository $repository, $id)
    {
        if (!$library = $repository->byId($id)) {
            abort(404);
        }

        $repository->delete($library);

        return redirect(route('libraries.index'));
    }
}
