<?php

namespace App\Models\receipt;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_name',
        'phone_number',
        'address',
        'email',
        'date',
        'money'
    ];
}
