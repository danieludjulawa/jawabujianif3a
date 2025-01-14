<?php

namespace App\Http\Controllers;

use App\Models\Borrowing;
use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;

class BorrowingController extends Controller
{
    public function index()
    {
        $borrowings = Borrowing::with(['book', 'user'])->get();
        return view('borrowings.index', compact('borrowings'));
    }

    public function create()
    {
        $books = Book::where('stock', '>', 0)->get();
        $users = User::all();
        return view('borrowings.create', compact('books', 'users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'book_id' => 'required|exists:books,id',
            'borrow_date' => 'required|date',
        ]);

        $book = Book::find($request->book_id);

        if ($book->stock <= 0) {
            return redirect()->back()->with('error', 'Book is out of stock.');
        }

        Borrowing::create($request->all());
        $book->decrement('stock');
        return redirect()->route('borrowings.index')->with('success', 'Borrowing created successfully.');
    }

    public function returnBook(Borrowing $borrowing)
    {
        $borrowing->update(['return_date' => now()]);
        $borrowing->book->increment('stock');
        return redirect()->route('borrowings.index')->with('success', 'Book returned successfully.');
    }
}
