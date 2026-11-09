<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function prosesLogin(Request $request)
    {
        $request->validate([
            'username' => 'required'
        ]);

        $username = $request->input('username');

        return redirect()->route('dashboard', [
            'username' => $username
        ]);
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username', 'pengunjung');

        return view('dashboard', compact('username'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username', 'pengunjung');

        return view('profile', compact('username'));
    }

    public function pengelolaan(Request $request)
    {
        $username = $request->query('username', 'pengunjung');

        $menu = [
            [
                'nama' => 'Butterscotch',
                'kategori'=> 'Minuman',
                'harga' => 25000
            ],
            [
                'nama' => 'Matcha Latte',
                'kategori' => 'Minuman',
                'harga' => 20000
            ],
            [
                'nama' => 'Americano',
                'kategori' => 'Minuman',
                'harga' => 15000
            ],
            [
                'nama' => 'Dimsum Mentai',
                'kategori' => 'Makanan',
                'harga' => 30000
            ],
            [
                'nama' => 'Matcha Cheesecake',
                'kategori' => 'Makanan',
                'harga' => 28000
            ]
        ];

        return view('pengelolaan', compact('username', 'menu'));
    }
}
