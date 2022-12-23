<?php

namespace App\Models\bill;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\book\Book;

class Buy extends Model
{
    use HasFactory;

    protected $fillable = [
        'mahoadon',
        'masach',
        'category',
        'number_buy',
        'unit_buy',
    ];

    public function books()
    {
        return $this->hasOne(Book::class, 'id', 'masach');
    }

}
