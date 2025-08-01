<?php

namespace App\Controllers;

use App\Models\CustomUserModel;
use App\Models\LowonganModel;
use Config\Pager;
class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function jadwal(): string
    {
        return view('jadwal');
    }
    public function lowongan(): string{
        $lowongan = new LowonganModel();
        $data = [
            'lowongan' => $lowongan->asArray()->paginate(8, 'group1'),
            'pager' => $lowongan->pager,
        ];
        return view('lowongan', $data);
    }
    public function users($id)
    {
        $users = new \Myth\Auth\Models\UserModel();
        $detail = $users->where('id', $id)->first();
        if ($id != user_id() && !in_groups(['admin', 'Super'])) {
            return redirect()->to('/')->with('error', 'Akses ditolak!');
        }
           
        return view('users_profile', compact('detail'));
    }
    public function saveUser($id)
    {
        $user = new \Myth\Auth\Models\UserModel();
        $data = $this->request->getPost();
        
        $foto = $this ->request->getFile('user_image');
        if ($foto && $foto->isValid() && !$foto->hasMoved()) {
            $newname = $foto->getRandomName();
            $foto->move('uploads/foto_profile/', $newname);
            $data['user_image'] = $newname;
        }
        $user->skipValidation(true);
        $user->update($id, $data);
        return redirect()->to('users_profile/' .$id)->with('success', 'Berhasil');
    }
}
