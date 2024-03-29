<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DataVaksin;
use App\Models\DataPenduduk;

class DataVaksinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datavaksin = DataVaksin::all();
        $datapenduduk = DataPenduduk::all();
        return view ('admin.data-vaksin.index')->with('datavaksin', $datavaksin, 'datapenduduk', $datapenduduk);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datapenduduk = DataPenduduk::all();
        return view ('admin.data-vaksin.create')->with('datapenduduk', $datapenduduk);
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
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'keterangan' => 'required',
        ];

        $messages = [
            'nik.required' => 'NIK harus diisi!',
            'nik.digits' => 'NIK harus 16 digit!',
            'id_penduduk.required' => 'Nama harus diisi!',
            'tgl_lahir.required' => 'Tanggal Lahir harus diisi!',
            'alamat.required' => 'Alamat harus diisi!',
            'keterangan.required' => 'Agama harus dipilih!',
        ];

        $this->validate($request, $rules, $messages);

        $date =  date('y-m-d', strtotime($request->tgl_lahir));

        $vaksin = new DataVaksin;
        $vaksin->nik = $request->nik;
        $vaksin->id_penduduk = $request->id_penduduk;
        $vaksin->tgl_lahir = $request->tgl_lahir;
        $vaksin->alamat = $request->alamat;
        $vaksin->keterangan = $request->keterangan;
        // dd($vaksin);
        $vaksin->save();

        return redirect('admin/data-vaksin')->with('status', 'Data Berhasil diinput!');
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
        $datavaksin = DataVaksin::findOrFail($id);
        $datapenduduk = DataPenduduk::all();
        return view ('admin.data-vaksin.edit', compact('datavaksin', 'datapenduduk'));
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
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'keterangan' => 'required',
        ];

        $messages = [
            'nik.required' => 'NIK harus diisi!',
            'nik.digits' => 'NIK harus 16 digit!',
            'id_penduduk.required' => 'Nama harus diisi!',
            'tgl_lahir.required' => 'Tanggal Lahir harus diisi!',
            'alamat.required' => 'Alamat harus diisi!',
            'keterangan.required' => 'Agama harus dipilih!',
        ];

        $this->validate($request, $rules, $messages);

        $date =  date('y-m-d', strtotime($request->tgl_lahir));

        $vaksin = DataVaksin::find($id);
        $vaksin->nik = $request->nik;
        $vaksin->id_penduduk = $request->id_penduduk;
        $vaksin->tgl_lahir = $request->tgl_lahir;
        $vaksin->alamat = $request->alamat;
        $vaksin->keterangan = $request->keterangan;
        // dd($vaksin);
        $vaksin->save();

        return redirect('admin/data-vaksin')->with('status', 'Data Berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DataVaksin::find($id)->delete();
        return back()->with('status','Data dihapus!');
    }
}
