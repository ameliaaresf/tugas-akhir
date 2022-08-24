<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DataPerceraian;
use App\Models\DataPenduduk;


class DataPerceraianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataperceraian = DataPerceraian::all();
        $datapenduduk = DataPenduduk::all();
        return view ('admin.data-perceraian.index')->with('dataperceraian', $dataperceraian, 'datapenduduk', $datapenduduk);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datapenduduk = DataPenduduk::all();
        return view ('admin.data-perceraian.create')->with('datapenduduk', $datapenduduk);
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
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'jk' => 'required',
            'agama' => 'required',
            // 'status' => 'required',
            'pekerjaan' => 'required',
            'kw' => 'required',
            'nama_wali' => 'required',
            'nama_pasangan' => 'required'
        ];

        $messages = [
            'nik.required' => 'NIK harus diisi!',
            'nik.digits' => 'NIK harus 16 digit!',
            'id_penduduk.required' => 'Nama harus diisi!',
            'tempat_lahir.required' => 'Tempat lahir harus diisi!',
            'tgl_lahir.required' => 'Tanggal lahir harus diisi!',
            'jk.required' => 'Jenis kelamin harus diisi!',
            'agama.required' => 'Agama harus diisi!',
            // 'status.required' => 'Status harus diisi!',
            'pekerjaan.required' => 'Pekerjaan harus diisi!',
            'kw.required' => 'Kewarganegaraan harus diisi!',
            'nama_wali.required' => 'Nama wali harus diisi!',
            'nama_pasangan.required' => 'Nama pasangan harus diisi!'
        ];

        $this->validate($request, $rules, $messages);

        $date =  date('y-m-d', strtotime($request->tgl_lahir));

        $perceraian = new DataPerceraian;
        $perceraian->nik = $request->nik;
        $perceraian->id_penduduk = $request->id_penduduk;
        $perceraian->tempat_lahir = $request->tempat_lahir;
        $perceraian->tgl_lahir = $date;
        $perceraian->jk = $request->jk;
        $perceraian->alamat = $request->alamat;
        $perceraian->agama = $request->agama;
        // $perceraian->status = $request->status;
        $perceraian->pekerjaan = $request->pekerjaan;
        $perceraian->kw = $request->kw;
        $perceraian->nama_wali = $request->nama_wali;
        $perceraian->nama_pasangan = $request->nama_pasangan;
        // dd($perceraian);
        $perceraian->save();

        return redirect('admin/data-perceraian')->with('status', 'Data Berhasil diinput!');


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
        $dataperceraian = DataPerceraian::findOrFail($id);
        $datapenduduk = DataPenduduk::all();
        return view ('admin.data-perceraian.edit', compact('dataperceraian', 'datapenduduk'));
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
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'jk' => 'required',
            'agama' => 'required',
            // 'status' => 'required',
            'pekerjaan' => 'required',
            'kw' => 'required',
            'nama_wali' => 'required',
            'nama_pasangan' => 'required'
        ];

        $messages = [
            'nik.required' => 'NIK harus diisi!',
            'nik.digits' => 'NIK harus 16 digit!',
            'id_penduduk.required' => 'Nama harus diisi!',
            'tempat_lahir.required' => 'Tempat lahir harus diisi!',
            'tgl_lahir.required' => 'Tanggal lahir harus diisi!',
            'jk.required' => 'Jenis kelamin harus diisi!',
            'agama.required' => 'Agama harus diisi!',
            // 'status.required' => 'Status harus diisi!',
            'pekerjaan.required' => 'Pekerjaan harus diisi!',
            'kw.required' => 'Kewarganegaraan harus diisi!',
            'nama_wali.required' => 'Nama wali harus diisi!',
            'nama_pasangan.required' => 'Nama pasangan harus diisi!'
        ];

        $this->validate($request, $rules, $messages);

        $date =  date('y-m-d', strtotime($request->tgl_lahir));

        $perceraian = DataPerceraian::find($id);
        $perceraian->nik = $request->nik;
        $perceraian->id_penduduk = $request->id_penduduk;
        $perceraian->tempat_lahir = $request->tempat_lahir;
        $perceraian->tgl_lahir = $date;
        $perceraian->jk = $request->jk;
        $perceraian->alamat = $request->alamat;
        $perceraian->agama = $request->agama;
        // $perceraian->status = $request->status;
        $perceraian->pekerjaan = $request->pekerjaan;
        $perceraian->kw = $request->kw;
        $perceraian->nama_wali = $request->nama_wali;
        $perceraian->nama_pasangan = $request->nama_pasangan;
        // dd($perceraian);
        $perceraian->save();

        return redirect('admin/data-perceraian')->with('status', 'Data Berhasil diinput!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DataPerceraian::find($id)->delete();
        return back()->with('status','Data dihapus!');
    }
}
