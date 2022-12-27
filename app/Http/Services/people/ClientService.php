<?php

namespace App\Http\Services\people;

use App\Models\people\Client;
use Illuminate\Support\Facades\Session;

class ClientService
{
    public function get()
    {
        return Client::orderByDesc('id')->paginate(10);
    }

}
