<?php

namespace App\Models\receipt;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\people\Client;

class Receipt extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'money'
    ];

    public function clients()
    {
        return $this->hasOne(Client::class, 'id', 'customer_id');
    }
}
