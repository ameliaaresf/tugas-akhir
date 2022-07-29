<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SKS;
use \PDF;

class SKSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sks = SKS::all();

        return view ('admin.sks.index')->with('sks', $sks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.sks.create');
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
            'no_regis' => 'required',
            'nama' => 'required',
            'nik' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'jk' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
            'status' => 'required',
            'tgl_buat' => 'required',
            'ttd' => 'required',
            'keterangan' => 'required',
        ];

        $messages = [
            'no_regis.required' => 'Nomor Registrasi harus diisi!',
            'nama.required' => 'Nama harus diisi!',
            'nik.required' => 'NIK harus diisi!',
            'tempat_lahir.required' => 'Tempat Lahir harus diisi!',
            'tgl_lahir.required' => 'Tanggal Lahir harus diisi!',
            'jk.required' => 'Jenis Kelamin harus diisi!',
            'pekerjaan.required' => 'Pekerjaan harus diisi!',
            'alamat.required' => 'Alamat harus diisi!',
            'status.required' => 'Status harus diisi!',
            'tgl_buat.required' => 'Tanggal Pembuatan harus diisi!',
            'ttd.required' => 'Yang Bertandatangan harus diisi!',
            'keterangan.required' => 'Keterangan harus diisi!',
        ];

        $this->validate($request, $rules, $messages);

        $date1 =  date('y-m-d', strtotime($request->tgl_lahir));
        $date2 =  date('y-m-d', strtotime($request->tgl_buat));

        $sks = new Sks;
        $sks->no_regis = $request->no_regis;
        $sks->nama = $request->nama;
        $sks->nik = $request->nik;
        $sks->tempat_lahir = $request->tempat_lahir;
        $sks->tgl_lahir = $date1;
        $sks->jk = $request->jk;
        $sks->pekerjaan = $request->pekerjaan;
        $sks->alamat = $request->alamat;
        $sks->status = $request->status;
        $sks->tgl_buat = $date2;
        $sks->ttd = $request->ttd;
        $sks->keterangan = $request->keterangan;
        $sks->save();
        
        // dd($sks);

        return redirect('admin/sks')->with('status', 'Data Berhasil diinput!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sks = sks::findOrFail($id);

        return view ('admin.surat-menyurat.sks')->with('sks', $sks);
    }

    public function tampil()
    {
        return view ('admin.sks.create');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sks = Sks::findOrFail($id);

        return view ('admin.sks.edit')->with('sks', $sks);
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
            'no_regis' => 'required',
            'nama' => 'required',
            'nik' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'jk' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
            'status' => 'required',
            'tgl_buat' => 'required',
            'ttd' => 'required',
            'keterangan' => 'required',
        ];

        $messages = [
            'no_regis.required' => 'Nomor Registrasi harus diisi!',
            'nama.required' => 'Nama harus diisi!',
            'nik.required' => 'NIK harus diisi!',
            'tempat_lahir.required' => 'Tempat Lahir harus diisi!',
            'tgl_lahir.required' => 'Tanggal Lahir harus diisi!',
            'jk.required' => 'Jenis Kelamin harus diisi!',
            'pekerjaan.required' => 'Pekerjaan harus diisi!',
            'alamat.required' => 'Alamat harus diisi!',
            'status.required' => 'Status harus diisi!',
            'tgl_buat.required' => 'Tanggal Pembuatan harus diisi!',
            'ttd.required' => 'Yang Bertandatangan harus diisi!',
            'keterangan.required' => 'Keterangan harus diisi!',
        ];

        $this->validate($request, $rules, $messages);

        $date1 =  date('y-m-d', strtotime($request->tgl_lahir));
        $date2 =  date('y-m-d', strtotime($request->tgl_buat));

        $sks = Sks::find($id);
        $sks->no_regis = $request->no_regis;
        $sks->nama = $request->nama;
        $sks->nik = $request->nik;
        $sks->tempat_lahir = $request->tempat_lahir;
        $sks->tgl_lahir = $date1;
        $sks->jk = $request->jk;
        $sks->pekerjaan = $request->pekerjaan;
        $sks->alamat = $request->alamat;
        $sks->status = $request->status;
        $sks->tgl_buat = $date2;
        $sks->ttd = $request->ttd;
        $sks->keterangan = $request->keterangan;
        $sks->save();
        
        // dd($sks);

        return redirect('admin/sks')->with('status', 'Data Berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Sks::find($id)->delete();
        return back()->with('status','Data dihapus!');
    }
}
