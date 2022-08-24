<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DataPekerja;
use App\Models\DataPenduduk;

class DataPekerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datapekerja = DataPekerja::all();
        $datapenduduk = DataPenduduk::all();
        return view ('admin.data-pekerja-migran.index')->with('datapekerja', $datapekerja, 'datapenduduk', $datapenduduk);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datapenduduk = DataPenduduk::all();
        return view ('admin.data-pekerja-migran.create')->with('datapenduduk', $datapenduduk);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'nik' => 'required|digits:16',
            'id_penduduk' => 'required',
            'alamat' => 'required',
            'tempat_bekerja' => 'required',
            'tujuan' => 'required',
            'keterangan' => 'required'
        ];

        $messages = [
            'nik.required' => 'NIK harus diisi!',
            'nik.digits' => 'NIK harus 16 digit!',
            'id_penduduk.required' => 'Nama harus diisi!',
            'alamat.required' => 'Alamat harus diisi!',
            'tempat_bekerja.required' => 'Agama harus dipilih!',
            'tujuan.required' => 'Agama harus dipilih!',
            'keterangan.required' => 'Agama harus dipilih!',
        ];

        $this->validate($request, $rules, $messages);


        $pekerja = new DataPekerja;
        $pekerja->nik = $request->nik;
        $pekerja->id_penduduk = $request->id_penduduk;
        $pekerja->alamat = $request->alamat;
        $pekerja->tempat_bekerja = $request->tempat_bekerja;
        $pekerja->tujuan = $request->tujuan;
        $pekerja->keterangan = $request->keterangan;
        // dd($pekerja);
        $pekerja->save();

        return redirect('admin/data-pekerja-migran')->with('status', 'Data Berhasil diinput!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datapekerja = DataPekerja::findOrFail($id);
        $datapenduduk = DataPenduduk::all();
        return view ('admin.data-pekerja-migran.edit', compact('datapekerja', 'datapenduduk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'nik' => 'required|digits:16',
            'id_penduduk' => 'required',
            'alamat' => 'required',
            'tempat_bekerja' => 'required',
            'tujuan' => 'required',
            'keterangan' => 'required'
        ];

        $messages = [
            'nik.required' => 'NIK harus diisi!',
            'nik.digits' => 'NIK harus 16 digit!',
            'id_penduduk.required' => 'Nama harus diisi!',
            'alamat.required' => 'Alamat harus diisi!',
            'tempat_bekerja.required' => 'Agama harus dipilih!',
            'tujuan.required' => 'Agama harus dipilih!',
            'keterangan.required' => 'Agama harus dipilih!',
        ];

        $this->validate($request, $rules, $messages);


        $pekerja = DataPekerja::find($id);
        $pekerja->nik = $request->nik;
        $pekerja->id_penduduk = $request->id_penduduk;
        $pekerja->alamat = $request->alamat;
        $pekerja->tempat_bekerja = $request->tempat_bekerja;
        $pekerja->tujuan = $request->tujuan;
        $pekerja->keterangan = $request->keterangan;
        // dd($pekerja);
        $pekerja->save();

        return redirect('admin/data-pekerja-migran')->with('status', 'Data Berhasil diinput!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DataPekerja::find($id)->delete();
        return back()->with('status','Data dihapus!');
    }
}
