<?php

namespace App\Controllers;

use App\Models\LowonganModel;
use CodeIgniter\HTTP\ResponseInterface;

class Lowongans extends BaseController
{
    protected $lowonganModel;
    public function findbyid($id): string
    {
        $detail = $this->lowonganModel->where('id', $id)->first();
        return view('detail', compact('detail'));
    }

    public function __construct(){
    }
}
