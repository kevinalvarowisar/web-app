<?php
namespace App\Http\Controllers;
use App\Models\Employe;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    // Menampilkan semua data pegawai
    public function index()
    {
        $data['judul'] = 'CRUD Data Pegawai';
        $data['employes'] = Employe::all();

        return view('tampil_data', $data);
    }

    // Menampilkan halaman form tambah pegawai
    public function create()
    {
        return view('tambah_data');
    }

    // Menyimpan data pegawai ke database
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'gender' => 'required',
            'gaji' => 'required|numeric',
        ]);

        $pegawai = new Employe();
        $pegawai->nama = $request->nama;
        $pegawai->alamat = $request->alamat;
        $pegawai->gender = $request->gender;
        $pegawai->gaji = $request->gaji;

        $pegawai->save();

        return redirect('/employe');
    }

    // Menampilkan form edit pegawai
    public function edit($id)
    {
        $pegawai = Employe::findOrFail($id);

        return view('edit_data', compact('pegawai'));
    }

    // Memperbarui data pegawai
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'gender' => 'required',
            'gaji' => 'required|numeric',
        ]);

        $pegawai = Employe::findOrFail($id);

        $pegawai->nama = $request->nama;
        $pegawai->alamat = $request->alamat;
        $pegawai->gender = $request->gender;
        $pegawai->gaji = $request->gaji;

        $pegawai->save();

        return redirect('/employe');
    }

    // Menghapus data pegawai
    public function destroy($id)
    {
        $pegawai = Employe::findOrFail($id);

        $pegawai->delete();

        return redirect('/employe');
    }

}
