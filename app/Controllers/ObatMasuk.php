<?php

namespace App\Controllers;

use App\Models\modelObat;

class ObatMasuk extends BaseController
{
    public function __construct()
    {
        $this->modelObatMasuk = new modelObat();
    }
    public function index()
    {
        $obat = $this->modelObat->findAll();

        $data = [
            'title' => 'Daftar Obat',
            'obat' => $obat
        ];

        return view('layout/obatMasuk', $data);
    }
}
