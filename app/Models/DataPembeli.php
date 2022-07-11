<?php

namespace App\Models;

use CodeIgniter\Model;

class DataPembeli extends Model
{
    protected $table      = 'pembeli';
    protected $primaryKey = 'id_pembeli';
    protected $allowedFields = ['nama_lengkap', 'tanggal_lahir', 'jeniskelamin', 'alamat'];

    public function getData()
    {
        return $this->db->table('pembeli')->get()->getResultArray();
    }
}
