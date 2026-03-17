<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PegawaiController extends Controller
{
    public function index(Request $request)
    {


        $query = Pegawai::query();
        $pegawais = $query->orderBy('created_at', 'desc')->get();

        return view('pegawai.index', compact('pegawais'));
    }

    public function create()
    {
        return view('pegawai.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:pegawais,email',
            'jabatan' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $namaFile = null;
        // 2. Handle Upload Foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');


            $namaFile = $file->hashName();

            $file->move(public_path('uploads/pegawai'), $namaFile);
        }

        Pegawai::create([
            'nama'          => $request->nama,
            'email'         => $request->email,
            'jabatan'       => $request->jabatan,
            'tanggal_lahir' => $request->tanggal_lahir,
            'tanggal_masuk' => $request->tanggal_masuk,
            'foto'          => $namaFile
        ]);

        return redirect('/pegawai')->with('success', 'Pegawai berhasil ditambahkan!');
    }


    public function apiList()
    {
        try {
            $pegawai = \App\Models\Pegawai::all();

            return response()->json([
                'success' => true,
                'message' => 'List Data Pegawai',
                'data'    => $pegawai
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal mengambil data',
                'error'   => $e->getMessage()
            ], 500);
        }
    }
}
