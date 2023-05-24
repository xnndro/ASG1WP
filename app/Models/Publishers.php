<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Books;

class Publishers extends Model
{
    use HasFactory;
    protected $table = 'publishers';

    protected $fillable = [
        'name',
        'address',
        'phone',
        'email',
        'image'
    ];

    public function books()
    {
        return $this->hasMany(Books::class, 'publisher_id', 'id');
    }
}
