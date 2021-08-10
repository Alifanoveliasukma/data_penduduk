<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Models\Datas;

class AdminController extends Controller
{
    public function index()
    {
        $penduduk = Datas::all();
        return view('index', compact(['penduduk']));
    }

    public function create()
    {
        return view('penduduk.create');
    }

    public function store(Request $request)
    {
       $penduduk = Datas::create($request->all());
       
       return redirect('/dashboard');
       
    }

    public function edit($id)
    {
        $penduduk = Datas::find($id);
        return view('edit', compact(['penduduk']));
    }

    public function update(Request $request, $id)
    {
        $penduduk = Datas::find($id);
        $penduduk->update($request->all());
        return redirect('/dashboard');
    }

    public function destroy($id)
    {
        $penduduk = Datas::find($id);
        $penduduk->delete();
        return redirect('/dashboard');
    }

    
}
