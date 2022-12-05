<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function index(){
        $anggotas = Anggota::all();

        return view('index', compact(['anggotas']));
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){

        $request->validate([
            'nama' => 'required|min:3',
            'kelahiran' => 'required|min:3',
            'tinggi_badan' => 'required',
            'tgl_lahir' => 'required',
            'tgl_gabung' => 'required',
            'club' => 'required',
        ]);
      
        Anggota::create($request->all());

        return redirect('/anggota');
    }

    public function edit($id){

        $anggotas = Anggota::find($id);

        return view('edit', compact(['anggotas']));
    }

    public function update($id, Request $request){

        $request->validate([
            'nama' => 'required|min:3',
            'kelahiran' => 'required|min:3',
            'tinggi_badan' => 'required',
            'tgl_lahir' => 'required',
            'tgl_gabung' => 'required',
        ]);

        Anggota::find($id)->update($request->all());

        return redirect('/anggota');
    }

    public function destroy($id)
    {
        Anggota::find($id)->delete();
       
        return redirect('/anggota');
    }
}
