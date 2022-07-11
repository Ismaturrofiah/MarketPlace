<?php

namespace App\Models;

use CodeIgniter\Model;

class DataTransaksi extends Model
{
    protected $table      = 'orders';
    protected $primaryKey = 'id_transaksi';
    protected $allowedFields = ['id_pembeli', 'jumlah_barang', 'harga_barang', 'total_harga', 'verifikasi'];

    public function getData()
    {
        return $this->db->table('orders')
            ->join('pembeli', 'pembeli.id_pembeli=orders.id_pembeli')
            ->get()->getResultArray();
    }

    public function VerifPegawai()
    {
        return $this->db->table('orders')
            ->join('pembeli', 'pembeli.id_pembeli=orders.id_pembeli')
            ->getWhere(['pembeli.verifikasi' => 'Belum'])->getResultArray();
    }
}
