<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers; 
use App\Http\Requests;
use App\Login;

class LoginController extends Controller
{
    public function index()
    {
    	return view('login');
    }

     public function login(Request $request)
    {
        $username = $request->username;
        $password = md5($request->password);
        $status = $request->status;

        $cekUser = Login::where('username', $username)
                            ->where('password', $password)
                            ->where('status',$status)
                            ->first();

        if ($cekUser!=null) {
            if ($cekUser->status==0) {
                return redirect('sekretariat');
            }elseif ($cekUser->status==1) {
                return redirect('pegawai');
            }elseif ($cekUser->status==2) {
                return redirect('umum');
            }
            
        }else{
            return redirect('')->with('message', 'Username atau Password Salah');   
        }

    }
}
