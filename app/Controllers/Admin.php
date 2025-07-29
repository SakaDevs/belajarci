<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use SebastianBergmann\CodeUnit\FunctionUnit;

class Admin extends BaseController
{
        public function users()
        {
            $db = \Config\Database::connect();
            $builder = $db->table("users");
            $builder->select("users.id as userid, username, email, full_name, user_image, name, description");
            $builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
            $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
            $builder->where('auth_groups.name !=', 'Super');
            $query = $builder->get();

            $data['users'] = $query->getResult();
        return view('users', $data) ;
        }
        public function change($id)
        
        {
            if ($id == user_id()) {
                return redirect()->back()->with('error', 'tidak bisa mengubah akun diri sendiri');
            }
            $role = $this->request->getPost('role');
            $db = \Config\Database::connect();
            $group = $db->table('auth_groups')->where('name', $role)->get()->getRow();

            if (empty($group)) {
                return redirect('users');
            }
            $db->table('auth_groups_users')->where('user_id', $id)->delete();

            $db->table('auth_groups_users')->insert([
                'user_id' => $id,
                'group_id' => $group->id,
            ]);
            return redirect('users');
        }
        public function search()
        {
            $keyword = $this->request->getGet('keyword');
            $db = \Config\Database::connect();
            $builder = $db->table('users');
            $builder->select("users.id as userid, username, email, full_name, user_image, name, description");
            $builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
            $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');

            if ($keyword) {
                $builder->groupStart()
                    ->like('username', $keyword)
                    ->orLike('email', $keyword)
                    ->orLike('description', $keyword)
                ->groupEnd();
            }
            $query = $builder->get();
            $data['users'] = $query->getResult();
            return view('users', $data);
        }
      public function edit($id)
        {
            $users = new \Myth\Auth\Models\UserModel();
            $detail = $users->where('id', $id)->first();
            if (!$detail) {
                throw new \CodeIgniter\Exceptions\PageNotFoundException('User tidak ditemukan');
            }
            
            return view('users_profile_edit', compact('detail')); 
        }
}
