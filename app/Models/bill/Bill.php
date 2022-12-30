<?php

namespace App\Models\bill;
use App\Models\people\Staff;
use App\Models\people\Client;

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

    public function clients()
    {
        return $this->hasOne(Client::class, 'id', 'customer_id');
    }

    public function staffs()
    {
        return $this->hasOne(Staff::class, 'id', 'staff_id');
    }

}
