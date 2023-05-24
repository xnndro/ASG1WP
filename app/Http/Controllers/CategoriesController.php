<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use App\Models\Books;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function details($id)
    {
        $book = Categories::with('books')->where('id', $id)->first();
        $book = Books::with('publisher', 'categories')->whereHas('categories', function ($query) use ($id) {
            $query->where('category_id', $id);
        })->get()->toQuery()->simplePaginate(8);
        $categories_name = Categories::where('id', $id)->first();
        return view('pages.category', compact('book', 'categories_name'));
    }
}
