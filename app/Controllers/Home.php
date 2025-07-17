<?php

namespace App\Controllers;
use App\Models\LowonganModel;
class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function contact(): string
    {
        $data = [
            'contacts' => [ 
                [
                    'Nama'  => 'Saka',
                    'Email' => 'Saka@gmail.com',
                    'Umur'  => '16',
                ],
                [
                    'Nama'  => 'Hana',
                    'Email' => 'Hana@gmail.com',
                    'Umur'  => '16',
                ],
                [
                    'Nama'  => 'Niki',
                    'Email' => 'Niki@gmail.com',
                    'Umur'  => '20',
                ],
                [
                    'Nama'  => 'IingLaravel',
                    'Email' => 'Iing@gmail.com',
                    'Umur'  => '5`20',
                ],
                [
                    'Nama'  => 'Engkong',
                    'Email' => 'engkong@gmail.com',
                    'Umur'  => '20542',
                ],
                [
                    'Nama'  => 'ninda',
                    'Email' => 'Ninda@gmail.com',
                    'Umur'  => '204',
                ]
            ]
        ];
        return view('contact', $data);
    }
    public function about(): string
    {   
        return view('about');
    }
    public function layanan(): string
    {
        return view('company_profile');
    }
    public function lowongan(): string{
        $lowongan = (new LowonganModel())->findAll();
  
        return view('lowongan', compact('lowongan'));
    }
}
