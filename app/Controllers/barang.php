<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BarangModel;
use CodeIgniter\HTTP\ResponseInterface;

class Barang extends BaseController
{
    public function __construct()
    {
        $this->barang = new BarangModel();
    }
    public function index()
    {
        $data = [
            'active' => 'barang',
            'judul' => 'Master Data',
            'barang'=> $this->barang->findAll()
        ];
        return view('barang', $data);
    }
    public function detail(int $id)
    {
        return $this->response->setJSON($this->barang->find($id));
    }
    public function tambah()
    {
        return view('tambah_barang');
    }

    public function store()
    {
        $data = $this->request->getPost();


        $this->barang->save($data);

       
        return redirect()->route('barang::index');
    }

    public function edit(int $id)
    {
        $data = [
            'title' => 'Edit barang',
            'barang' => $this->barang->find($id),
        ];

        return view('barang/edit', $data);
    }

    public function update(int $id)
    {
        $data = $this->request->getPost();

        if (! $this->validateData($data, $this->rules)) {
            return redirect()->back()->with('message', $this->validator->getErrors());
        }

        $this->barang->update($id, $data);

        return redirect()->route('barang::index')->with('message', 'Sukses ubah data');
    }
}

