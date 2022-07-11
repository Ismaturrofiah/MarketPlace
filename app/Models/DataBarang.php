<?php

namespace App\Models;

use CodeIgniter\Model;

class DataBarang extends Model
{
    protected $table      = 'barang';
    protected $primaryKey = 'id_barang';
    protected $allowedFields = ['id_barang', 'nama', 'jenis', 'harga', 'gambar', 'keterangan'];

    public function getData()
    {
        return $this->db->table('barang')->join('jenis', 'barang.jenis=jenis.id_jenis')->get()->getResultArray();
    }

    public function idbarang()
    {
        $kode = $this->db->table('barang')
            ->select('RIGHT(id_barang,4) as id_barang', false)
            ->orderBy('id_barang', 'DESC')
            ->limit(1)->get()->getRowArray();

        if (empty($kode['id_barang'])) {
            $no = 1;
        } else {
            $no = intval($kode['id_barang']) + 1;
        }

        $kodemax = str_pad($no, 4, "0", STR_PAD_LEFT);
        $kodejadi = "BRG-" . $kodemax;
        return $kodejadi;
    }
}
