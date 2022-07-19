<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DataKelahiran;

class DataKelahiranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datakelahiran = DataKelahiran::all();

        return view ('admin.data-kelahiran.index')->with('datakelahiran', $datakelahiran);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.data-kelahiran.create');
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
            // 'nik' => 'required|digits:16',
            'nama_bayi' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'jam_lahir' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
            'kw' => 'required',
        ];

        $messages = [
            // 'nik.required' => 'NIK harus diisi!',
            // 'nik.digits' => 'NIK harus 16 digit!',
            'nama_bayi.required' => 'Nama bayi harus diisi!',
            'nama_ayah.required' => 'Nama ayah harus diisi!',
            'nama_ibu.required' => 'Nama ibu harus diisi!',
            'tempat_lahir.required' => 'Tempat lahir harus diisi!',
            'tgl_lahir.required' => 'Tanggal lahir harus diisi!',
            'jam_lahir.required' => 'Jam lahir harus diisi!',
            'jk.required' => 'Jenis kelamin harus dipilih!',
            'alamat.required' => 'Alamat harus diisi!',
            'agama.required' => 'Agama harus dipilih!',
            'kw.required' => 'Kewarganegaraan harus dipilih!',
        ];

        $this->validate($request, $rules, $messages);

        $date =  date('y-m-d', strtotime($request->tgl_lahir));

        $kelahiran = new DataKelahiran;
        // $kelahiran->nik = $request->nik;
        $kelahiran->nama_bayi = $request->nama_bayi;
        $kelahiran->nama_ayah = $request->nama_ayah;
        $kelahiran->nama_ibu = $request->nama_ibu;
        $kelahiran->tempat_lahir = $request->tempat_lahir;
        $kelahiran->tgl_lahir = $date;
        $kelahiran->jam_lahir = $request->jam_lahir;
        $kelahiran->jk = $request->jk;
        $kelahiran->alamat = $request->alamat;
        $kelahiran->agama = $request->agama;
        $kelahiran->kw = $request->kw;
        // dd($kelahiran);
        $kelahiran->save();

        return redirect('admin/data-kelahiran')->with('status', 'Data Berhasil diinput!');
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
        $datakelahiran = DataKelahiran::findOrFail($id);

        return view ('admin.data-kelahiran.edit')->with('datakelahiran', $datakelahiran);
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
            // 'nik' => 'required|digits:16',
            'nama_bayi' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'jam_lahir' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
            'kw' => 'required',
        ];

        $messages = [
            // 'nik.required' => 'NIK harus diisi!',
            // 'nik.digits' => 'NIK harus 16 digit!',
            'nama_bayi.required' => 'Nama bayi harus diisi!',
            'nama_ayah.required' => 'Nama ayah harus diisi!',
            'nama_ibu.required' => 'Nama ibu harus diisi!',
            'tempat_lahir.required' => 'Tempat lahir harus diisi!',
            'tgl_lahir.required' => 'Tanggal lahir harus diisi!',
            'jam_lahir.required' => 'Jam lahir harus diisi!',
            'jk.required' => 'Jenis kelamin harus dipilih!',
            'alamat.required' => 'Alamat harus diisi!',
            'agama.required' => 'Agama harus dipilih!',
            'kw.required' => 'Kewarganegaraan harus dipilih!',
        ];

        $this->validate($request, $rules, $messages);

        $date =  date('y-m-d', strtotime($request->tgl_lahir));

        $kelahiran = DataKelahiran::find($id);
        // $kelahiran->nik = $request->nik;
        $kelahiran->nama_bayi = $request->nama_bayi;
        $kelahiran->nama_ayah = $request->nama_ayah;
        $kelahiran->nama_ibu = $request->nama_ibu;
        $kelahiran->tempat_lahir = $request->tempat_lahir;
        $kelahiran->tgl_lahir = $date;
        $kelahiran->jam_lahir = $request->jam_lahir;
        $kelahiran->jk = $request->jk;
        $kelahiran->alamat = $request->alamat;
        $kelahiran->agama = $request->agama;
        $kelahiran->kw = $request->kw;
        $kelahiran->save();

        return redirect('admin/data-kelahiran')->with('status', 'Data Berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DataKelahiran::find($id)->delete();
        return back()->with('status','Data dihapus!');
    }
}
