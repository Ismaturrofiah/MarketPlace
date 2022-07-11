<?php

namespace App\Controllers;

use App\Models\DataBarang;
use App\Models\DataPembeli;
use App\Models\DataTransaksi;

class Dashboard extends BaseController
{
    public function __construct()
    {
        $this->dataBarang = new DataBarang();
        $this->dataPembeli = new DataPembeli();
        $this->dataTransaksi = new DataTransaksi();
        helper('form');
    }

    public function index()
    {
        $users = new \Myth\Auth\Models\UserModel();
        $data = [
            'title' => 'Dashboard',
            'users' => $users->countAll(),
            'barang' => $this->dataBarang->countAll(),
            // 'orders' => $this->dataTransaksi->VerifPegawai(),
            'transaksi' => $this->dataTransaksi->countAll(),
            'veriftran' => $this->dataTransaksi->where(['verifikasi' => "Belum"])->countAllResults(),
        ];

        return view('index', $data);
    }

    public function form()
    {
        $data = [
            'title' => 'Biodata Pembeli',
            'validation' => \Config\Services::validation(),
            'nama' => $this->dataPembeli->where(['id_pembeli' => user_id()])->first()
        ];

        return view('formpembeli', $data);
    }

    public function simpan()
    {
        if (!$this->validate([
            'nama_lengkap' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama lengkap mohon diisi'
                ]
            ],
            'tanggal_lahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tanggal lahir mohon diisi'
                ]
            ],
            'jeniskelamin' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jenis kelamin mohon diisi'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat mohon diisi'
                ]
            ],
        ])) {
            $validation = \Config\Services::validation();
            session()->setFlashdata('errors', $this->validator->listErrors());
            return redirect()->to('/forms')->withInput()->with('validation', $validation);
        }

        $simpan = [
            'nama_lengkap' => $this->request->getVar('nama_lengkap'),
            'tanggal_lahir' => $this->request->getVar('tanggal_lahir'),
            'jeniskelamin' => $this->request->getVar('jeniskelamin'),
            'alamat' => $this->request->getVar('alamat'),
        ];

        $this->dataPembeli->insert($simpan);

        session()->setFlashdata('yes', 'Data berhasil ditambah');
        return redirect()->to('/');
    }

    public function profile()
    {
        $data = [
            'title' => 'My Profile',
        ];

        return view('profile', $data);
    }
}
