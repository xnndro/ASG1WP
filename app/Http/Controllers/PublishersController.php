<?php

namespace App\Http\Controllers;

use App\Models\Publishers;
use Illuminate\Http\Request;

class PublishersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $publishers = Publishers::all();
        return view('pages.publisher', compact('publishers'));
    }

    public function details($id)
    {
        $publisher = Publishers::with('books')->where('id', $id)->first();
        return view('pages.publisher_details', compact('publisher'));
    }
}
