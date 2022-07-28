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
            'no_kk' => 'required|digits:16',
            'nik' => 'required|digits:16',
            'nama' => 'required',
            'tgl_lahir' => 'required',
            'blok' => 'required',
            'rw' => 'required',
            'rt' => 'required'
        ];

        $messages = [
            'no_kk.required' => 'No KK harus diisi!',
            'no_kk.digits' => 'No KK harus 16 digit!',
            'nik.required' => 'NIK harus diisi!',
            'nik.digits' => 'NIK harus 16 digit!',
            'nama.required' => 'Nama harus diisi!',
            'tgl_lahir.required' => 'Tanggal lahir harus diisi!',
            'blok.required' => 'Blok harus diisi!',
            'rw.required' => 'RW harus diisi!',
            'rt.required' => 'RT perkawinan harus diisi!'
        ];

        $this->validate($request, $rules, $messages);

        $date =  date('y-m-d', strtotime($request->tgl_lahir));

        $penduduk = new DataPenduduk;
        $penduduk->no_kk = $request->no_kk;
        $penduduk->nik = $request->nik;
        $penduduk->nama = $request->nama;
        $penduduk->tgl_lahir = $date;
        $penduduk->blok = $request->blok;
        $penduduk->rw = $request->rw;
        $penduduk->rt = $request->rt;
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
            'no_kk' => 'required|digits:16',
            'nik' => 'required|digits:16',
            'nama' => 'required',
            'tgl_lahir' => 'required',
            'blok' => 'required',
            'rw' => 'required',
            'rt' => 'required'
        ];

        $messages = [
            'no_kk.required' => 'No KK harus diisi!',
            'no_kk.digits' => 'No KK harus 16 digit!',
            'nik.required' => 'NIK harus diisi!',
            'nik.digits' => 'NIK harus 16 digit!',
            'nama.required' => 'Nama harus diisi!',
            'tgl_lahir.required' => 'Tanggal lahir harus diisi!',
            'blok.required' => 'BLOK harus diisi!',
            'rw.required' => 'RW harus diisi!',
            'rt.required' => 'RT harus diisi!'
        ];

        $this->validate($request, $rules, $messages);

        $date =  date('y-m-d', strtotime($request->tgl_lahir));

        $penduduk = DataPenduduk::find($id);
        $penduduk->no_kk = $request->no_kk;
        $penduduk->nik = $request->nik;
        $penduduk->nama = $request->nama;
        $penduduk->tgl_lahir = $date;
        $penduduk->blok = $request->blok;
        $penduduk->rw = $request->rw;
        $penduduk->rt = $request->rt;
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
