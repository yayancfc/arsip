<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SekretariatController extends Controller
{
    public function index()
    {
    	return view('sekretariat/index');
    }

    public function pegawai()
    {
    	return view('sekretariat/pegawai');
    }

    public function laporan()
    {
    	return view('sekretariat/laporan');
    }

    public function detail()
    {
        return view('sekretariat/detail');
    }
}
