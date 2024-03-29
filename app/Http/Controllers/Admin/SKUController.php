<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SKU;
use \PDF;

class SKUController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sku = SKU::all();

        return view ('admin.sku.index')->with('sku', $sku);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.sku.create');
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
            'nama_usaha' => 'required',
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
            'nama_usaha.required' => 'Nama Usaha harus diisi!',
            'tgl_buat.required' => 'Tanggal Pembuatan harus diisi!',
            'ttd.required' => 'Yang Bertandatangan harus diisi!',
            'keterangan.required' => 'Keterangan harus diisi!',
        ];

        $this->validate($request, $rules, $messages);

        $date1 =  date('y-m-d', strtotime($request->tgl_lahir));
        $date2 =  date('y-m-d', strtotime($request->tgl_buat));

        $sku = new Sku;
        $sku->no_regis = $request->no_regis;
        $sku->nama = $request->nama;
        $sku->nik = $request->nik;
        $sku->tempat_lahir = $request->tempat_lahir;
        $sku->tgl_lahir = $date1;
        $sku->jk = $request->jk;
        $sku->pekerjaan = $request->pekerjaan;
        $sku->alamat = $request->alamat;
        $sku->nama_usaha = $request->nama_usaha;
        $sku->tgl_buat = $date2;
        $sku->ttd = $request->ttd;
        $sku->keterangan = $request->keterangan;
        $sku->save();
        
        // dd($sku);

        return redirect('admin/sku')->with('status', 'Data Berhasil diinput!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id, SKU $sku)
    // {
    //     $pdf = PDF::loadview('admin.surat-menyurat.sku', compact(sku));

    //     $pdf->setPaper('a4', 'potrait');
    //     return $pdf->stream();
    // }

    public function show($id)
    {
   
        $sku = Sku::findOrFail($id);

        return view ('admin.surat-menyurat.sku')->with('sku', $sku);
    }


    public function tampil()
    {
        return view ('admin.sku.create');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sku = Sku::findOrFail($id);

        return view ('admin.sku.edit')->with('sku', $sku);
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
            'nama_usaha' => 'required',
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
            'pekerjaan.required' => 'Pekerjaan Usaha harus diisi!',
            'alamat.required' => 'Alamat harus diisi!',
            'nama_usaha.required' => 'Nama Usaha harus diisi!',
            'tgl_buat.required' => 'Tanggal Pembuatan harus diisi!',
            'ttd.required' => 'Yang Bertandatangan harus diisi!',
            'keterangan.required' => 'Keterangan harus diisi!',
        ];

        $this->validate($request, $rules, $messages);

        $date1 =  date('y-m-d', strtotime($request->tgl_lahir));
        $date2 =  date('y-m-d', strtotime($request->tgl_buat));

        $sku = Sku::find($id);
        $sku->no_regis = $request->no_regis;
        $sku->nama = $request->nama;
        $sku->nik = $request->nik;
        $sku->tempat_lahir = $request->tempat_lahir;
        $sku->tgl_lahir = $date1;
        $sku->jk = $request->jk;
        $sku->pekerjaan = $request->pekerjaan;
        $sku->alamat = $request->alamat;
        $sku->nama_usaha = $request->nama_usaha;
        $sku->tgl_buat = $date2;
        $sku->ttd = $request->ttd;
        $sku->keterangan = $request->keterangan;
        // dd($sku);
        $sku->save();

        return redirect('admin/sku')->with('status', 'Data Berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Sku::find($id)->delete();
        return back()->with('status','Data dihapus!');
    }
}
