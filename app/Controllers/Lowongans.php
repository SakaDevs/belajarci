<?php

namespace App\Controllers;

use App\Models\LowonganModel;
use CodeIgniter\HTTP\ResponseInterface;

class Lowongans extends BaseController
{
    protected $lowonganModel;

    public function __construct()
    {
        $this->lowonganModel = new LowonganModel();
    }
    public function findbyid($id): string
    {
        $detail = $this->lowonganModel->where('id', $id)->first();
        return view('detail', compact('detail'));
    }
    public function search()
{
    $keyword = $this->request->getGet('keyword');
    $lowonganModel = new LowonganModel();

    if ($keyword) {
        $lowongan = $lowonganModel
            ->like('judul_lowongan', $keyword, 'both')
            ->orLike('detail_lengkap', $keyword, 'both')
            ->orLike('nama_perusahaan', $keyword, 'both')
            ->findAll();
    } else {
        $lowongan = $lowonganModel->findAll();
    }

    return view('search', ['lowongan' => $lowongan]);
}
}
