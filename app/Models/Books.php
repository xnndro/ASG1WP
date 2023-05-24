<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Publishers;
use App\Models\BookCategory;

class Books extends Model
{
    use HasFactory;
    protected $table = 'books';

    protected $fillable = [
        'publisher_id',
        'title',
        'author',
        'year',
        'synopsis',
        'image'
    ];

    public function publisher()
    {
        return $this->belongsTo(Publishers::class, 'publisher_id', 'id');
    }

    public function categories()
    {
        return $this->hasMany(BookCategory::class, 'book_id', 'id');
    }
}
