<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LowonganModel;
use CodeIgniter\HTTP\ResponseInterface;

class Lowongans extends BaseController
{
    public function findbyid($id)
    {
        $detail = (new LowonganModel())->where("id", $id)->first();
        return view('detail', compact('detail'));
    }
}
