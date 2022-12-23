<?php

namespace App\Models\bill;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    protected $fillable = [
        'mahoadon',
        'customer',
        'data',
        'sum_money',
        'tien_tra',
        'tien_no',
    ];
}
