<?php

namespace App\Models\book;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';

    protected $fillable = [
        'name',
        'author_id',
        'category_id',
        'publishing_house_id',
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

    public function publishing_houses()
    {
        return $this->hasOne(Publishing_house::class, 'id', 'publishing_house_id');
    }


}
