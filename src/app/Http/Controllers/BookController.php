<?php

namespace App\Http\Controllers;

use App\Repositories\BookRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    private $bookRepository;

    public function __construct(BookRepository $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }

    public function list()
    {
        return view('books.list', ['books' => $this->bookRepository->list()]);
    }

    public function view($id)
    {
        if (!$book = $this->bookRepository->byId($id)) {
            abort(404);
        }

        return view('books.book', ['book' => $book]);
    }

    public function create(UserRepository $userRepository)
    {
        return view('books.create', ['users' => $userRepository->all()]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required', 'max:255'],
            'description' => ['nullable', 'max:255']
        ], [
            'title.required' => 'Custom error',
        ]);

        $book = $this->bookRepository->create($data);

        return redirect(route('books.view', ['id' => $book->id]));
    }
}
