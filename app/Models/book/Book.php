<?php

namespace App\Models\book;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'author_id',
        'category_id',
        'publishing_house',
        'number',
    ];

    public function authors()
    {
        return $this->hasOne(Author::class, 'id', 'author_id');
    }

    public function categories()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

}
