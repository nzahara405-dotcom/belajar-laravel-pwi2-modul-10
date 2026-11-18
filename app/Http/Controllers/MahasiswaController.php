<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = [
            'Nayla Zahara Hidayat',
            'Nabila Elfalina Herawan',
            'Agni Zahraeni',
        ];

        return view('pages.mahasiswa', [
            'mahasiswa' => $mahasiswa,
        ]);
    }
}
