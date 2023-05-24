<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;


class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Books::with('publisher', 'categories')->get()->toQuery()->simplePaginate(8);
        return view('pages.home', compact('books'));
    }

    public function detail($id)
    {
        $book = Books::with('publisher', 'categories')->where('id', $id)->first();
        return view('pages.detail', compact('book'));
    }
}
