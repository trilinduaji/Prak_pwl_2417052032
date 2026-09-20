<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile($nama='', $npm='', $kelas='')
    {
        $data = [
            'nama' => $nama ?: 'Aji',
            'npm' => $npm ?: '2417052032',
            'kelas' => $kelas ?: 'SIF'
        ];
        return view('profile', $data);
    }
}
