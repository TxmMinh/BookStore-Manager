<?php

namespace App\Models\book;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publishing_house extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

}
