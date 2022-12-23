<?php

namespace App\Models\people;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $table = 'staffs';

    protected $fillable = [
        'name',
        'gender',
        'phone_number',
        'birth_of_date',
        'address'
    ];
}
