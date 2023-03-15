<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }
    public function register_proses(Request $request){
        // $request menyimpan sementara proses dari register_proses

        // $validasi menyimpan $request yang sdh di validasi
        $validasi = $request->validate([
          'name' => 'required|max:128',
          'email' => 'required|unique:users|email',
          'password' => 'required|min:2|confirmed'
        ]);

        // password yang sdh di validasi akan di hash dengan metode make
        $validasi['password'] = Hash::make($validasi['password']);


        // model dari user akan membuat yang sdh divalidasi
          User::create($validasi);

// jika berhasil maka akan dikembalikan kehalaman /

          return redirect('/');
      }
}
