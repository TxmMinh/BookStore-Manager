<?php

namespace App\Models\book;
use App\Models\people\Staff;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImportBook extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_code',
        'staff_code',
        'extra_number',
        'unit_import',
        'date',
    ];

    public function books()
    {
        return $this->hasOne(Book::class, 'id', 'book_code');
    }

    public function staffs()
    {
        return $this->hasOne(Staff::class, 'id', 'staff_code');
    }

}
