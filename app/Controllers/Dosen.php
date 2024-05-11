<?php

namespace App\Controllers;

use App\Models\Dosen as DosenModel;

class Dosen extends BaseController
{
    protected $helpers = ['url', 'form'];
    protected $dosen;
    protected $rules;

    public function __construct()
    {
        $this->dosen = new DosenModel();
        $this->rules = [
            'kode_dosen'   => 'required',
            'nama_dosen'   => 'required',
            'status_dosen' => 'required',
        ];
    }

    public function index()
    {
        $data = [
            'DataDosen'  => $this->dosen->paginate('2', 'dosen'),
            'title' => 'List Dosen',
            'pager' => $this->dosen->pager,
        ];

        return view('dosen', $data);
    }     

    public function create()
    {
        return view('tambah');
    }

    public function store()
    {
        $data = $this->request->getPost();

        if (! $this->validateData($data, $this->rules)) {
            return redirect()->back()->with('message', $this->validator->getErrors());
        }

        $this->dosen->save($data);
        $token = getenv('TELEGRAM_BOT_TOKEN'); // token bot
        $user="Farid";
		$datas = [
		'text' =>"ANJAY BISA",
		'chat_id' => getenv('TELEGRAM_CHAT_ID')  //contoh bot, group id -442697126
		];
       
		file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($datas) );
       
        return redirect()->route('Dosen::index')->with('message', 'Sukses tambah data');
    }

    public function edit(int $id)
    {
        $data = [
            'title' => 'Edit Dosen',
            'dosen' => $this->dosen->find($id),
        ];

        return view('dosen/edit', $data);
    }

    public function update(int $id)
    {
        $data = $this->request->getPost();

        if (! $this->validateData($data, $this->rules)) {
            return redirect()->back()->with('message', $this->validator->getErrors());
        }

        $this->dosen->update($id, $data);

        return redirect()->route('Dosen::index')->with('message', 'Sukses ubah data');
    }
}