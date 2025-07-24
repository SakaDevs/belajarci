<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Admin extends BaseController
{
        public function users()
        {
            $db = \Config\Database::connect();
            $builder = $db->table("users");
            $builder->select("users.id as userid, username, email, full_name, user_image, name, description");
            $builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
            $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
            $query = $builder->get();

            $data['users'] = $query->getResult();
        return view('users', $data) ;
        }
}
