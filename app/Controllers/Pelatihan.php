<?php

namespace App\Controllers;
use App\Models\PelatihanModel;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Pelatihan extends BaseController
{
    public function reguler()
    {
        $pelatihan = (new PelatihanModel())->findAll();
        return view('pelatihan_reguler', compact('pelatihan'));
    }
    public function tambah()
    {
        return view('pelatihan_reguler_tambah');
    }
    public function add()
    {
        $data = [
            'nama_pelatihan' => $this->request->getPost('nama_pelatihan'),
            'jenis_pelatihan' => $this->request->getPost('jenis_pelatihan'),
            'total_hari' => $this->request->getPost('total_hari'),
            'total_peserta' => $this->request->getPost('total_peserta'),
            'pembukaan' => $this->request->getPost('pembukaan'),
        ];

        $foto = $this->request->getFile('gambar');
        if ($foto && $foto->isValid() && !$foto->hasMoved()) {
            $newname = $foto->getRandomName();
            $foto->move('uploads/foto_pelatihan_reguler' , $newname);
            $data['gambar'] = $newname;
        }
        $pelatihan = new PelatihanModel();
        $pelatihan->insert($data);
        return redirect('pelatihan/regular');
        
    }

    public function edit($id)
    {
        $pelatihanModel = new PelatihanModel();
        $data['pelatihan'] = $pelatihanModel->find($id);
        if (!$data['pelatihan']) {
            return redirect()->to('/')->with('error','');
        }
        return view('pelatihan_reguler_edit', compact('data'));
    }
    public function delete($id)
    {
        $pelatihan = new PelatihanModel();
        $latihan = $pelatihan->find($id);

        if ($latihan && isset($latihan['gambar'])) {
            $gambar = '/uploads/foto_pelatihan_reguler/' . $latihan['gambar'];
            $path = FCPATH . $gambar;
            if (file_exists($path)) {
                unlink($path);
            }
        }
        $pelatihan->delete($id);
        return redirect()->to('pelatihan/regular');
    }
}

