<?php

namespace App\Controllers;

use App\Models\modelObat;

class Obat extends BaseController
{
    public function __construct()
    {
        $this->modelObat = new modelObat();
    }
    public function index()
    {
        $obat = $this->modelObat->findAll();

        $data = [
            'title' => 'Daftar Obat',
            'obat' => $obat
        ];

        return view('layout/table', $data);
    }
}
