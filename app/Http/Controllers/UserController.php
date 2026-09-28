<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\UserModel;
use Illuminate\Http\Request;
class UserController extends Controller
{
    public $UserModel;
    public $KelasModel;

    public function __construct()
    {
        $this->UserModel = new UserModel();
        $this->KelasModel = new Kelas();
    }

    public function create()
    {
        $data = [
            'title' => 'Buat Pengguna Baru',
            'kelas' => $this->KelasModel->getKelas(),
        ];

        return view('create_user', $data);
    }

    public function store(Request $request)
    {
        $data = [
            'nama' => $request->nama,
            'nim' => $request->npm,
            'kelas_id' => $request->kelas_id,
        ];

        $this->UserModel->create($data);
        return redirect()->to('/user')->with('success', 'Data mahasiswa baru berhasil disimpan ke database.');
    }

    public function index()
    {
        $data = [
            'title' => 'Daftar Pengguna',
            'users' => $this->UserModel->getUser(),
        ];

        return view('list_user', $data);
    }
}
