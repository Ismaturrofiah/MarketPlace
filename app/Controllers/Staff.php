<?php

namespace App\Controllers;

use App\Models\DataBarang;
use App\Models\DataJenis;

class Staff extends BaseController
{
    public function __construct()
    {
        $this->dataBarang = new DataBarang();
        $this->dataJenis = new DataJenis();
        helper('form');
    }

    public function index()
    {
        $data = [
            'title' => 'Staff List',
            'validation' => \Config\Services::validation(),
            'barang' => $this->dataBarang->getData(),
        ];

        return view('user/list_staffs', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Staff List / Tambah Barang',
            'validation' => \Config\Services::validation(),
            'jenis' => $this->dataJenis->getData(),
        ];

        return view('user/tambah_staff', $data);
    }

    public function simpan()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama barang mohon diisi'
                ]
            ],
            'harga' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harga barang mohon diisi'
                ]
            ],
            'keterangan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Keterangan barang mohon diisi'
                ]
            ],
        ])) {
            $validation = \Config\Services::validation();
            session()->setFlashdata('errors', $this->validator->listErrors());
            return redirect()->to('/staff/tambah')->withInput()->with('validation', $validation);
        }

        $gambar = $this->request->getFile('gambar');
        $foto = $gambar->getRandomName();
        $id_barang = $this->dataBarang->idbarang();

        $simpan = [
            'id_barang' => $id_barang,
            'nama' => $this->request->getVar('nama'),
            'jenis' => $this->request->getVar('jenis'),
            'harga' => $this->request->getVar('harga'),
            'gambar' => $foto,
            'keterangan' => $this->request->getVar('keterangan'),
        ];

        $this->dataBarang->save($simpan);

        $gambar->move('gambar', $foto);

        session()->setFlashdata('yes', 'Data berhasil ditambah');
        return redirect()->to('/staff');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Staff List / Edit Barang',
            'barang' => $this->dataBarang->where(['id_barang' => $id])->first(),
            'jenis' => $this->dataJenis->getData(),
            'validation' => \Config\Services::validation()
        ];

        return view('user/edit_staff', $data);
    }

    public function ubah($id)
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama barang mohon diisi'
                ]
            ],
            'harga' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harga barang mohon diisi'
                ]
            ],
            'keterangan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Keterangan barang mohon diisi'
                ]
            ],
        ])) {
            $validation = \Config\Services::validation();
            session()->setFlashdata('errors', $this->validator->listErrors());
            return redirect()->to('/staff/edit' . $id)->withInput()->with('validation', $validation);
        }

        $gambar = $this->request->getFile('gambar');
        $foto = $gambar->getRandomName();
        $id_barang = $this->dataBarang->idbarang();

        $simpan = [
            'id_barang' => $id_barang,
            'nama' => $this->request->getVar('nama'),
            'jenis' => $this->request->getVar('jenis'),
            'harga' => $this->request->getVar('harga'),
            'gambar' => $foto,
            'keterangan' => $this->request->getVar('keterangan'),
        ];

        $this->dataBarang->update($id, $simpan);

        $gambar->move('gambar', $foto);

        session()->setFlashdata('yes', 'Data berhasil diubah');
        return redirect()->to('/staff');
    }

    public function delete($id)
    {
        $this->dataBarang->delete($id);

        session()->setFlashdata('hapus', 'Data berhasil dihapus');
        return redirect()->to('/staff');
    }
}
