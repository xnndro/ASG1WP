<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Books;
use App\Models\Categories;

class BookCategory extends Model
{
    use HasFactory;
    protected $table = 'book_categories';
    protected $fillable = [
        'book_id',
        'category_id'
    ];

    public function book()
    {
        return $this->belongsTo(Books::class, 'book_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id', 'id');
    }
}
