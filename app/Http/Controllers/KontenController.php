<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontenController extends Controller
{
    public function index()
    {
        return view('konten/index');
    }

    public function about()
    {
        $data['result'] = \App\Konten::all();
        return view('konten/about')->with($data);
    }

    public function contact()
    {
        return view('konten/contact');
    }

    public function services()
    {
        return view('konten/services');
    }

    public function admin()
    {
        return view('konten/admin');
    }

    public function create()
    {
        return view('konten/admin');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $status = \App\Konten::create($input);

        if ($status) return redirect('konten/admin')->with('success', 'Data berhasil ditambahkan');
        else return redirect('konten/admin')->with('error', 'Data gagal ditambahkan');


    }
}
