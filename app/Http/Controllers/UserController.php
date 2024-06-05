<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Fungsi untuk menampilkan formulir
    public function index()
    {
       $userArray = session('user_data', []);
       return view('user.index', compact('userArray'));
    }

    public function form()
    {
        return view('user.form');
    }

    // Fungsi untuk menangani data formulir yang dikirimkan
    public function processForm(Request $request)
    {
        // Validasi data formulir
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
        ]);
        $userArray = $request->session()->get('user_data', []);
        // Simpan data ke dalam sesi
        $userArray[] = [
        'nama' => $request->input('nama'),
        'alamat' => $request->input('alamat'),
        ];
        // $request->session()->put('user', $user);
        $request->session()->put('user_data', $userArray);

        // Redirect dengan pesan sukses
        return redirect()->route('user.index')->with('success', 'Data berhasil disimpan');

    }
}
