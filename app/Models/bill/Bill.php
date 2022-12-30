<?php

namespace App\Models\bill;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'staff_id',
        'sum_money',
        'payment',
        'debt',
        'book_id_list',
        'book_quantity_list',
    ];

}
