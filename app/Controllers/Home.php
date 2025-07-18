<?php

namespace App\Controllers;
use App\Models\LowonganModel;
class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function about(): string
    {   
        return view('about');
    }
    public function layanan(): string
    {
        return view('company_profile');
    }
    public function jadwal(): string
    {
        return view('jadwal');
    }
    public function register(): string
    {
        return view('register');
    }
    public function login(): string {
        return view('auth/login');
    }
    public function lowongan(): string{
        $lowongan = (new LowonganModel())->findAll();
  
        return view('lowongan', compact('lowongan'));
    }
}
