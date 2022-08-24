<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DataKematian;
use App\Models\DataPenduduk;

class DataKematianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datakematian = DataKematian::all();
        $datapenduduk = DataPenduduk::all();
        return view ('admin.data-kematian.index')->with('datakematian', $datakematian, 'datapenduduk', $datapenduduk);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datapenduduk = DataPenduduk::all();
        
        return view ('admin.data-kematian.create')->with('datapenduduk', $datapenduduk);
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
            // 'nama' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'tempat_wafat' => 'required',
            'tgl_wafat' => 'required',
            'sebab_wafat' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
            'pekerjaan' => 'required',
            // 'usia' => 'required',
            'kw' => 'required',
        ];

        $messages = [
            'nik.required' => 'NIK harus diisi!',
            'nik.digits' => 'NIK harus 16 digit!',
            'id_penduduk.required' => 'Id harus diisi',
            // 'nama.required' => 'Nama harus diisi!',
            'tempat_lahir.required' => 'Tempat lahir harus diisi!',
            'tgl_lahir.required' => 'Tanggal lahir harus diisi!',
            'tempat_wafat.required' => 'Tempat wafat harus diisi!',
            'tgl_wafat.required' => 'Tanggal wafat harus diisi!',
            'sebab_wafat.required' => 'Sebab wafat harus diisi!',
            'jk.required' => 'Jenis kelamin harus dipilih!',
            'alamat.required' => 'Alamat harus diisi!',
            'agama.required' => 'Agama harus dipilih!',
            'pekerjaan.required' => 'Pekerjaan harus diisi!',
            'kw.required' => 'Kewarganegaraan harus dipilih!',
        ];

        $this->validate($request, $rules, $messages);

        $date1 =  date('y-m-d', strtotime($request->tgl_lahir));
        $date2 =  date('y-m-d', strtotime($request->tgl_wafat));

        $kematian = new DataKematian;
        $kematian->nik = $request->nik;
        $kematian->id_penduduk = $request->id_penduduk;
        // $kematian->nama = $request->nama;
        $kematian->tempat_lahir = $request->tempat_lahir;
        $kematian->tgl_lahir = $date1;
        $kematian->tempat_wafat = $request->tempat_wafat;
        $kematian->tgl_wafat = $date2;
        $kematian->sebab_wafat = $request->sebab_wafat;
        $kematian->jk = $request->jk;
        $kematian->alamat = $request->alamat;
        $kematian->agama = $request->agama;
        $kematian->pekerjaan = $request->pekerjaan;
        // $kematian->usia = $request->usia;
        $kematian->kw = $request->kw;
        $kematian->save();

        return redirect('admin/data-kematian')->with('status', 'Data Berhasil diinput!');
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
        $datakematian = DataKematian::findOrFail($id);
        $datapenduduk = DataPenduduk::all();
        // dd($datapenduduk);
        return view ('admin.data-kematian.edit', compact('datakematian', 'datapenduduk'));
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
            // 'nama' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'tempat_wafat' => 'required',
            'tgl_wafat' => 'required',
            'sebab_wafat' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
            'pekerjaan' => 'required',
            // 'usia' => 'required',
            'kw' => 'required',
        ];

        $messages = [
            'nik.required' => 'NIK harus diisi!',
            'nik.digits' => 'NIK harus 16 digit!',
            'id_penduduk.required' => 'ID harus diisi!',
            // 'nama.required' => 'Nama harus diisi!',
            'tempat_lahir.required' => 'Tempat lahir harus diisi!',
            'tgl_lahir.required' => 'Tanggal lahir harus diisi!',
            'tempat_wafat.required' => 'Tempat wafat harus diisi!',
            'tgl_wafat.required' => 'Tanggal wafat harus diisi!',
            'sebab_wafat.required' => 'Sebab wafat harus diisi!',
            'jk.required' => 'Jenis kelamin harus dipilih!',
            'alamat.required' => 'Alamat harus diisi!',
            'agama.required' => 'Agama harus dipilih!',
            'pekerjaan.required' => 'Pekerjaan harus diisi!',
            // 'usia.required' => 'Usia harus dipilih!',
            'kw.required' => 'Kewarganegaraan harus dipilih!',
        ];

        $this->validate($request, $rules, $messages);

        $date1 =  date('y-m-d', strtotime($request->tgl_lahir));
        $date2 =  date('y-m-d', strtotime($request->tgl_wafat));

        $kematian = DataKematian::find($id);
        $kematian->nik = $request->nik;
        $kematian->id_penduduk = $request->id_penduduk;
        // $kematian->nama = $request->nama;
        $kematian->tempat_lahir = $request->tempat_lahir;
        $kematian->tgl_lahir = $date1;
        $kematian->tempat_wafat = $request->tempat_wafat;
        $kematian->tgl_wafat = $date2;
        $kematian->sebab_wafat = $request->sebab_wafat;
        $kematian->jk = $request->jk;
        $kematian->alamat = $request->alamat;
        $kematian->agama = $request->agama;
        $kematian->pekerjaan = $request->pekerjaan;
        // $kematian->usia = $request->usia;
        $kematian->kw = $request->kw;
        $kematian->save();

        // dd($kematian);
        return redirect('admin/data-kematian')->with('status', 'Data Berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DataKematian::find($id)->delete();
        return back()->with('status','Data dihapus!');
    }
}
