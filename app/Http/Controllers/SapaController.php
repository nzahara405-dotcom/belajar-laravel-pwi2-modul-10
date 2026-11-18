<?php

namespace App\Http\Controllers;

class SapaController extends Controller
{
    public function index()
    {
        $nama = 'Nayla Zahara Hidayat';

        return view('pages.sapa', [
            'nama' => $nama,
        ]);
    }
}
