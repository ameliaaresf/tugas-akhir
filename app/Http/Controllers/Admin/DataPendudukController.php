<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DataPenduduk;

class DataPendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datapenduduk = DataPenduduk::all();

        return view ('admin.data-penduduk.index')->with('datapenduduk', $datapenduduk);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.data-penduduk.create');
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
            'alamat' => 'required',
            'agama' => 'required',
            'status' => 'required',
            'pekerjaan' => 'required',
            'kw' => 'required'
        ];

        $messages = [
            'nik.required' => 'NIK harus diisi!',
            'nik.digits' => 'NIK harus 16 digit!',
            'nama.required' => 'Nama harus diisi!',
            'tempat_lahir.required' => 'Tempat lahir harus diisi!',
            'tgl_lahir.required' => 'Tanggal lahir harus diisi!',
            'jk.required' => 'Jenis kelamin harus diisi!',
            'alamat.required' => 'Alamat harus diisi!',
            'agama.required' => 'Agama harus diisi!',
            'status.required' => 'Status perkawinan harus diisi!',
            'pekerjaan.required' => 'Pekerjaan harus diisi!',
            'kw.required' => 'Kewarganegaraan harus diisi!'
        ];

        $this->validate($request, $rules, $messages);

        $date =  date('y-m-d', strtotime($request->tgl_lahir));

        $penduduk = new DataPenduduk;
        $penduduk->nik = $request->nik;
        $penduduk->nama = $request->nama;
        $penduduk->tempat_lahir = $request->tempat_lahir;
        $penduduk->tgl_lahir = $date;
        $penduduk->jk = $request->jk;
        $penduduk->alamat = $request->alamat;
        $penduduk->agama = $request->agama;
        $penduduk->status = $request->status;
        $penduduk->pekerjaan = $request->pekerjaan;
        $penduduk->kw = $request->kw;
        // dd($penduduk);
        $penduduk->save();

        return redirect('admin/data-penduduk')->with('status', 'Data Berhasil diinput!');
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
        $datapenduduk = DataPenduduk::findOrFail($id);

        return view ('admin.data-penduduk.edit')->with('datapenduduk', $datapenduduk);
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
            'alamat' => 'required',
            'agama' => 'required',
            'status' => 'required',
            'pekerjaan' => 'required',
            'kw' => 'required'
        ];

        $messages = [
            'nik.required' => 'NIK harus diisi!',
            'nik.digits' => 'NIK harus 16 digit!',
            'nama.required' => 'Nama harus diisi!',
            'tempat_lahir.required' => 'Tempat lahir harus diisi!',
            'tgl_lahir.required' => 'Tanggal lahir harus diisi!',
            'jk.required' => 'Jenis kelamin harus diisi!',
            'alamat.required' => 'Alamat harus diisi!',
            'agama.required' => 'Agama harus diisi!',
            'status.required' => 'Status perkawinan harus diisi!',
            'pekerjaan.required' => 'Pekerjaan harus diisi!',
            'kw.required' => 'Kewarganegaraan harus diisi!'
        ];

        $this->validate($request, $rules, $messages);

        $date =  date('y-m-d', strtotime($request->tgl_lahir));

        $penduduk = DataPenduduk::find($id);
        $penduduk->nik = $request->nik;
        $penduduk->nama = $request->nama;
        $penduduk->tempat_lahir = $request->tempat_lahir;
        $penduduk->tgl_lahir = $date;
        $penduduk->jk = $request->jk;
        $penduduk->alamat = $request->alamat;
        $penduduk->agama = $request->agama;
        $penduduk->status = $request->status;
        $penduduk->pekerjaan = $request->pekerjaan;
        $penduduk->kw = $request->kw;
        // dd($penduduk);
        $penduduk->save();

        return redirect('admin/data-penduduk')->with('status', 'Data Berhasil diinput!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DataPenduduk::find($id)->delete();
        return back()->with('status','Data dihapus!');
    }
}
