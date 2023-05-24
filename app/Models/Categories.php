<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BookCategory;

class Categories extends Model
{
    use HasFactory;
    protected $table = 'categories';

    protected $fillable = [
        'name'
    ];

    public function books()
    {
        return $this->hasMany(BookCategory::class, 'category_id', 'id');
    }
}
