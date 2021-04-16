<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index() {
        $mhs = Mahasiswa::paginate(10);
        return view('mhsindex', ['mhs' => $mhs]);
    }
    public function tambah() {
        return view('mhstambah');
    }
    public function store(Request $request) {
        $this->validate($request, [
            'nim' => 'required|numeric',
            'nama' => 'required|min:5|max:100',
            'prod' => 'required|min:5|max:100',
            'alamat' => 'required'
        ]);
        Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'prod' => $request->prod,
            'alamat' => $request->alamat
        ]);
        return redirect('/mahasiswa');
    }
    public function edit($id) {
        $mhs = Mahasiswa::find($id);
        return view('mhsedit', ['mhs' => $mhs]);
    }
    public function update(Request $request) {
        $this->validate($request, [
            'nim' => 'required|numeric',
            'nama' => 'required|min:5|max:100',
            'prod' => 'required|min:5|max:100',
            'alamat' => 'required'
        ]);
        $mhs = Mahasiswa::find($request->id);
        $mhs->nim = $request->nim;
        $mhs->nama = $request->nama;
        $mhs->prod = $request->prod;
        $mhs->alamat = $request->alamat;
        $mhs->save();
        return redirect('/mahasiswa');
    }
    public function delete($id) {
        $mhs = Mahasiswa::find($id);
        $mhs->delete();
        return redirect('/mahasiswa');
    }
}
