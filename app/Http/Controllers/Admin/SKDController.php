<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SKD;
use \PDF;

class SKDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skd = SKD::all();

        return view ('admin.skd.index')->with('skd', $skd);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.skd.create');
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
            'kw' => 'required',
            'agama' => 'required',
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
            'kw.required' => 'Kewarganegaraan harus diisi!',
            'agama.required' => 'Agama harus diisi!',
            'tgl_buat.required' => 'Tanggal Pembuatan harus diisi!',
            'ttd.required' => 'Yang Bertandatangan harus diisi!',
            'keterangan.required' => 'Keterangan harus diisi!',
        ];

        $this->validate($request, $rules, $messages);

        $date1 =  date('y-m-d', strtotime($request->tgl_lahir));
        $date2 =  date('y-m-d', strtotime($request->tgl_buat));

        $skd = new Skd;
        $skd->no_regis = $request->no_regis;
        $skd->nama = $request->nama;
        $skd->nik = $request->nik;
        $skd->tempat_lahir = $request->tempat_lahir;
        $skd->tgl_lahir = $date1;
        $skd->jk = $request->jk;
        $skd->pekerjaan = $request->pekerjaan;
        $skd->alamat = $request->alamat;
        $skd->kw = $request->kw;
        $skd->agama = $request->agama;
        $skd->tgl_buat = $date2;
        $skd->ttd = $request->ttd;
        $skd->keterangan = $request->keterangan;
        $skd->save();
        
        // dd($skd);

        return redirect('admin/skd')->with('status', 'Data Berhasil diinput!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $skd = Skd::findOrFail($id);

        return view ('admin.surat-menyurat.skd$skd')->with('skd', $skd);
    }
    public function tampil()
    {
        return view ('admin.skd.create');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $skd = Skd::findOrFail($id);

        return view ('admin.skd.edit')->with('skd', $skd);
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
            'kw' => 'required',
            'agama' => 'required',
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
            'kw.required' => 'Kewarganegaraan harus diisi!',
            'agama.required' => 'Agama harus diisi!',
            'tgl_buat.required' => 'Tanggal Pembuatan harus diisi!',
            'ttd.required' => 'Yang Bertandatangan harus diisi!',
            'keterangan.required' => 'Keterangan harus diisi!',
        ];

        $this->validate($request, $rules, $messages);

        $date1 =  date('y-m-d', strtotime($request->tgl_lahir));
        $date2 =  date('y-m-d', strtotime($request->tgl_buat));

        $skd = Skd::find($id);
        $skd->no_regis = $request->no_regis;
        $skd->nama = $request->nama;
        $skd->nik = $request->nik;
        $skd->tempat_lahir = $request->tempat_lahir;
        $skd->tgl_lahir = $date1;
        $skd->jk = $request->jk;
        $skd->pekerjaan = $request->pekerjaan;
        $skd->alamat = $request->alamat;
        $skd->kw = $request->kw;
        $skd->agama = $request->agama;
        $skd->tgl_buat = $date2;
        $skd->ttd = $request->ttd;
        $skd->keterangan = $request->keterangan;
        $skd->save();
        
        // dd($skd);

        return redirect('admin/skd')->with('status', 'Data Berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Skd::find($id)->delete();
        return back()->with('status','Data dihapus!');
    }
}
