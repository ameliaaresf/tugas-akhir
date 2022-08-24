<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DataPerpindahan;
use App\Models\DataPenduduk;

class DataPerpindahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataperpindahan = DataPerpindahan::all();
        $datapenduduk = DataPenduduk::all();
        return view ('admin.data-perpindahan.index')->with('dataperpindahan', $dataperpindahan, 'datapenduduk', $datapenduduk);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datapenduduk = DataPenduduk::all();
        return view ('admin.data-perpindahan.create')->with('datapenduduk', $datapenduduk);
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
            'tgl_pindah' => 'required',
            'jk' => 'required',
            'alamat_asal' => 'required',
            'alamat_pindah' => 'required',
            'status' => 'required',
            'pekerjaan' => 'required',
            'kw' => 'required'
        ];

        $messages = [
            'nik.required' => 'NIK harus diisi!',
            'nik.digits' => 'NIK harus 16 digits!',
            'id_penduduk.required' => 'Nama harus diisi!',
            'tgl_pindah.required' => 'Tanggal pindah harus diisi!',
            'jk.required' => 'Jenis kelamin harus diisi!',
            'alamat_asal.required' => 'Alamat asal harus diisi!',
            'alamat_pindah.required' => 'Alamat saat ini harus diisi!',
            'status.required' => 'Status perpindahan harus diisi!',
            'pekerjaan.required' => 'Pekerjaan harus diisi!',
            'kw.required' => 'Kewarganegaraan harus diisi!'
        ];

        $this->validate($request, $rules, $messages);

        $date =  date('y-m-d', strtotime($request->tgl_pindah));

        $perpindahan = new DataPerpindahan;
        $perpindahan->nik = $request->nik;
        $perpindahan->id_penduduk = $request->id_penduduk;
        $perpindahan->tgl_pindah = $date;
        $perpindahan->jk = $request->jk;
        $perpindahan->alamat_asal = $request->alamat_asal;
        $perpindahan->alamat_pindah = $request->alamat_pindah;
        $perpindahan->status = $request->status;
        $perpindahan->pekerjaan = $request->pekerjaan;
        $perpindahan->kw = $request->kw;
        // dd($perpindahan);
        $perpindahan->save();

        return redirect('admin/data-perpindahan')->with('status', 'Data Berhasil diinput!');
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
        $dataperpindahan = DataPerpindahan::findOrFail($id);
        $datapenduduk = DataPenduduk::all();
        return view ('admin.data-perpindahan.edit', compact('dataperpindahan', 'datapenduduk'));
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
            'tgl_pindah' => 'required',
            'jk' => 'required',
            'alamat_asal' => 'required',
            'alamat_pindah' => 'required',
            'status' => 'required',
            'pekerjaan' => 'required',
            'kw' => 'required'
        ];

        $messages = [
            'nik.required' => 'NIK harus diisi!',
            'nik.digits' => 'NIK harus 16 digits!',
            'id_penduduk.required' => 'Nama harus diisi!',
            'tgl_pindah.required' => 'Tanggal pindah harus diisi!',
            'jk.required' => 'Jenis kelamin harus diisi!',
            'alamat_asal.required' => 'Alamat asal harus diisi!',
            'alamat_pindah.required' => 'Alamat saat ini harus diisi!',
            'status.required' => 'Status perpindahan harus diisi!',
            'pekerjaan.required' => 'Pekerjaan harus diisi!',
            'kw.required' => 'Kewarganegaraan harus diisi!'
        ];

        $this->validate($request, $rules, $messages);

        $date =  date('y-m-d', strtotime($request->tgl_pindah));

        $perpindahan = DataPerpindahan::find($id);
        $perpindahan->nik = $request->nik;
        $perpindahan->id_penduduk = $request->id_penduduk;
        $perpindahan->tgl_pindah = $date;
        $perpindahan->jk = $request->jk;
        $perpindahan->alamat_asal = $request->alamat_asal;
        $perpindahan->alamat_pindah = $request->alamat_pindah;
        $perpindahan->status = $request->status;
        $perpindahan->pekerjaan = $request->pekerjaan;
        $perpindahan->kw = $request->kw;
        // dd($perpindahan);
        $perpindahan->save();

        return redirect('admin/data-perpindahan')->with('status', 'Data Berhasil diinput!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DataPerpindahan::find($id)->delete();
        return back()->with('status','Data dihapus!');
    }
}
