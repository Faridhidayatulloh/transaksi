<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CustomerModel;
use CodeIgniter\HTTP\ResponseInterface;

class customer extends BaseController
{
    public function __construct()
    {
        $this->customer = new CustomerModel();
    }
    public function index()
    {
        $data = [
            'active' => 'customer',
            'judul' => 'Master Data',
            'customer'=> $this->customer->findAll()
        ];
        return view('customer', $data);
    }
    public function detail(int $id)
    {
        return $this->response->setJSON($this->customer->find($id));
    }
    public function tambah()
    {
        return view('tambah_customer');
    }

    public function store()
    {
        $data = $this->request->getPost();


        $this->customer->save($data);

       
        return redirect()->route('customer::index');
    }

    public function edit(int $id)
    {
        $data = [
            'title' => 'Edit customer',
            'customer' => $this->customer->find($id),
        ];

        return view('customer/edit', $data);
    }

    public function update(int $id)
    {
        $data = $this->request->getPost();

        if (! $this->validateData($data, $this->rules)) {
            return redirect()->back()->with('message', $this->validator->getErrors());
        }

        $this->customer->update($id, $data);

        return redirect()->route('customer::index')->with('message', 'Sukses ubah data');
    }
}



