<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DataPerkawinan;

class DataPerkawinanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataperkawinan = DataPerkawinan::all();

        return view ('admin.data-perkawinan.index')->with('dataperkawinan', $dataperkawinan);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.data-perkawinan.create');
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
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'jk' => 'required',
            'agama' => 'required',
            // 'status' => 'required',
            'pekerjaan' => 'required',
            'kw' => 'required',
            'nama_wali' => 'required'
        ];

        $messages = [
            'nik.required' => 'NIK harus diisi!',
            'nik.digits' => 'NIK harus 16 digit!',
            'nama.required' => 'Nama harus diisi!',
            'tempat_lahir.required' => 'Tempat lahir harus diisi!',
            'tgl_lahir.required' => 'Tanggal lahir harus diisi!',
            'jk.required' => 'Jenis kelamin harus diisi!',
            'agama.required' => 'Agama harus diisi!',
            // 'status.required' => 'Status harus diisi!',
            'pekerjaan.required' => 'Pekerjaan harus diisi!',
            'kw.required' => 'Kewarganegaraan harus diisi!',
            'nama_wali.required' => 'Nama wali harus diisi!'
        ];

        $this->validate($request, $rules, $messages);

        $date =  date('y-m-d', strtotime($request->tgl_lahir));

        $perkawinan = new DataPerkawinan;
        $perkawinan->nik = $request->nik;
        $perkawinan->nama = $request->nama;
        $perkawinan->tempat_lahir = $request->tempat_lahir;
        $perkawinan->tgl_lahir = $date;
        $perkawinan->jk = $request->jk;
        $perkawinan->alamat = $request->alamat;
        $perkawinan->agama = $request->agama;
        // $perkawinan->status = $request->status;
        $perkawinan->pekerjaan = $request->pekerjaan;
        $perkawinan->kw = $request->kw;
        $perkawinan->nama_wali = $request->nama_wali;
        // dd($perkawinan);
        $perkawinan->save();

        return redirect('admin/data-perkawinan')->with('status', 'Data Berhasil diinput!');
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
        $dataperkawinan = DataPerkawinan::findOrFail($id);

        return view ('admin.data-perkawinan.edit')->with('dataperkawinan', $dataperkawinan);
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
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'jk' => 'required',
            'agama' => 'required',
            // 'status' => 'required',
            'pekerjaan' => 'required',
            'kw' => 'required',
            'nama_wali' => 'required'
        ];

        $messages = [
            'nik.required' => 'NIK harus diisi!',
            'nik.digits' => 'NIK harus 16 digit!',
            'nama.required' => 'Nama harus diisi!',
            'tempat_lahir.required' => 'Tempat lahir harus diisi!',
            'tgl_lahir.required' => 'Tanggal lahir harus diisi!',
            'jk.required' => 'Jenis kelamin harus diisi!',
            'agama.required' => 'Agama harus diisi!',
            // 'status.required' => 'Status harus diisi!',
            'pekerjaan.required' => 'Pekerjaan harus diisi!',
            'kw.required' => 'Kewarganegaraan harus diisi!',
            'nama_wali.required' => 'Nama wali harus diisi!'
        ];

        $this->validate($request, $rules, $messages);

        $date =  date('y-m-d', strtotime($request->tgl_lahir));

        $perkawinan = DataPerkawinan::find($id);
        $perkawinan->nik = $request->nik;
        $perkawinan->nama = $request->nama;
        $perkawinan->tempat_lahir = $request->tempat_lahir;
        $perkawinan->tgl_lahir = $date;
        $perkawinan->jk = $request->jk;
        $perkawinan->alamat = $request->alamat;
        $perkawinan->agama = $request->agama;
        // $perkawinan->status = $request->status;
        $perkawinan->pekerjaan = $request->pekerjaan;
        $perkawinan->kw = $request->kw;
        $perkawinan->nama_wali = $request->nama_wali;
        // dd($perkawinan);
        $perkawinan->save();

        return redirect('admin/data-perkawinan')->with('status', 'Data Berhasil diinput!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DataPerkawinan::find($id)->delete();
        return back()->with('status','Data dihapus!');
    }
}
