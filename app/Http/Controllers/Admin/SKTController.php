<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SKT;
use \PDF;

class SKTController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skt = SKT::all();

        return view ('admin.skt.index')->with('skt', $skt);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.skt.create');
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
            'nama_lembaga' => 'required',
            'alamat' => 'required',
            'desa' => 'required',
            'kec' => 'required',
            'kab' => 'required',
            'utara' => 'required',
            'timur' => 'required',
            'selatan' => 'required',
            'barat' => 'required',
            'tgl_buat' => 'required',
            'ttd' => 'required',
            'keterangan' => 'required',
        ];

        $messages = [
            'no_regis.required' => 'Nomor Registrasi harus diisi!',
            'nama_lembaga.required' => 'Nama Lembaga harus diisi!',
            'alamat.required' => 'Alamat harus diisi!',
            'desa.required' => 'Desa harus diisi!',
            'kec.required' => 'Kecamatan harus diisi!',
            'kab.required' => 'Kabupaten harus diisi!',
            'utara.required' => 'Utara harus diisi!',
            'timur.required' => 'Timur harus diisi!',
            'selatan.required' => 'Selatan harus diisi!',
            'barat.required' => 'Barat harus diisi!',
            'tgl_buat.required' => 'Tanggal Pembuatan harus diisi!',
            'ttd.required' => 'Yang Bertandatangan harus diisi!',
            'keterangan.required' => 'Keterangan harus diisi!',
        ];

        $this->validate($request, $rules, $messages);

        $date =  date('y-m-d', strtotime($request->tgl_buat));

        $skt = new Skt;
        $skt->no_regis = $request->no_regis;
        $skt->nama_lembaga = $request->nama_lembaga;
        $skt->alamat = $request->alamat;
        $skt->desa = $request->desa;
        $skt->kec = $request->kec;
        $skt->kab = $request->kab;
        $skt->utara = $request->utara;
        $skt->timur = $request->timur;
        $skt->selatan = $request->selatan;
        $skt->barat = $request->barat;
        $skt->tgl_buat = $date;
        $skt->ttd = $request->ttd;
        $skt->keterangan = $request->keterangan;
        $skt->save();
        
        // dd($skt);

        return redirect('admin/skt')->with('status', 'Data Berhasil diinput!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $skt = Skt::findOrFail($id);

        return view ('admin.surat-menyurat.skt')->with('skt', $skt);
    }

    public function tampil()
    {
        return view ('admin.skt.create');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $skt = Skt::findOrFail($id);

        return view ('admin.skt.edit')->with('skt', $skt);
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
            'nama_lembaga' => 'required',
            'alamat' => 'required',
            'desa' => 'required',
            'kec' => 'required',
            'kab' => 'required',
            'utara' => 'required',
            'timur' => 'required',
            'selatan' => 'required',
            'barat' => 'required',
            'tgl_buat' => 'required',
            'ttd' => 'required',
            'keterangan' => 'required',
        ];

        $messages = [
            'no_regis.required' => 'Nomor Registrasi harus diisi!',
            'nama_lembaga.required' => 'Nama Lembaga harus diisi!',
            'alamat.required' => 'Alamat harus diisi!',
            'desa.required' => 'Desa harus diisi!',
            'kec.required' => 'Kecamatan harus diisi!',
            'kab.required' => 'Kabupaten harus diisi!',
            'utara.required' => 'Utara harus diisi!',
            'timur.required' => 'Timur harus diisi!',
            'selatan.required' => 'Selatan harus diisi!',
            'barat.required' => 'Barat harus diisi!',
            'tgl_buat.required' => 'Tanggal Pembuatan harus diisi!',
            'ttd.required' => 'Yang Bertandatangan harus diisi!',
            'keterangan.required' => 'Keterangan harus diisi!',
        ];

        $this->validate($request, $rules, $messages);

        $date =  date('y-m-d', strtotime($request->tgl_buat));

        $skt = Skt::find($id);
        $skt->no_regis = $request->no_regis;
        $skt->nama_lembaga = $request->nama_lembaga;
        $skt->alamat = $request->alamat;
        $skt->desa = $request->desa;
        $skt->kec = $request->kec;
        $skt->kab = $request->kab;
        $skt->utara = $request->utara;
        $skt->timur = $request->timur;
        $skt->selatan = $request->selatan;
        $skt->barat = $request->barat;
        $skt->tgl_buat = $date;
        $skt->ttd = $request->ttd;
        $skt->keterangan = $request->keterangan;
        $skt->save();
        
        // dd($skt);

        return redirect('admin/skt')->with('status', 'Data Berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Skt::find($id)->delete();
        return back()->with('status','Data dihapus!');
    }
}
