<?php

namespace App\Http\Controllers\Admin\People;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\people\Client;
use App\Http\Services\people\ClientService;

class ClientController extends Controller
{
    protected $clientService;

    public function __construct(ClientService $clientService)
    {
        $this->clientService = $clientService;
    }

    public function create()
    {
        return view('admin.people.client.add', [
            'title' => 'Thêm Khách Hàng Mới',
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'phone_number' => 'required',
            'email' => 'required'
        ]);

        $this->clientService->store($request);
        return redirect()->back();
    }

    public function index()
    {
        return view('admin.people.client.list', [
            'title' => 'Danh Sách Khách Hàng',
            'clients' => $this->clientService->get(),
        ]);
    }
}
