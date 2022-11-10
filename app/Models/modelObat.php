<?php

namespace App\Models;

use CodeIgniter\Model;

class modelObat extends Model
{
    protected $table = 'obat';
    protected $primarykey = 'id';

    protected $returnType = 'array';

    protected $allowedFields = [
        'nama', 'jenis', 'jumlah'
    ];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}
