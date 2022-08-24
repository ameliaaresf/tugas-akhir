<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DataBansos;
use App\Models\DataPenduduk;


class DataBansosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $databansos = DataBansos::all();
        $datapenduduk = DataPenduduk::all();
        return view ('admin.data-bansos.index')->with('databansos', $databansos, 'datapenduduk', $datapenduduk);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datapenduduk = DataPenduduk::all();
        return view ('admin.data-bansos.create')->with('datapenduduk', $datapenduduk);
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
            'alamat' => 'required',
            'jenis_bansos' => 'required',
        ];

        $messages = [
            'nik.required' => 'NIK harus diisi!',
            'nik.digits' => 'NIK harus 16 digit!',
            'id_penduduk.required' => 'ID harus diisi!',
            'alamat.required' => 'Alamat harus diisi!',
            'jenis_bansos.required' => 'Agama harus dipilih!',
        ];

        $this->validate($request, $rules, $messages);

        $date =  date('y-m-d', strtotime($request->tgl_lahir));

        $bansos = new DataBansos;
        $bansos->nik = $request->nik;
        $bansos->id_penduduk = $request->id_penduduk;
        $bansos->alamat = $request->alamat;
        $bansos->jenis_bansos = $request->jenis_bansos;
        // dd($bansos);
        $bansos->save();

        return redirect('admin/data-bansos')->with('status', 'Data Berhasil diinput!');  
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
        $databansos = DataBansos::findOrFail($id);
        $datapenduduk = DataPenduduk::all();
        return view ('admin.data-bansos.edit', compact('databansos', 'datapenduduk'));
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
            'alamat' => 'required',
            'jenis_bansos' => 'required',
        ];

        $messages = [
            'nik.required' => 'NIK harus diisi!',
            'nik.digits' => 'NIK harus 16 digit!',
            'id_penduduk.required' => 'ID harus diisi!',
            'alamat.required' => 'Alamat harus diisi!',
            'jenis_bansos.required' => 'Agama harus dipilih!',
        ];

        $this->validate($request, $rules, $messages);

        $date =  date('y-m-d', strtotime($request->tgl_lahir));

        $bansos = DataBansos::find($id);
        $bansos->nik = $request->nik;
        $bansos->id_penduduk = $request->id_penduduk;
        $bansos->alamat = $request->alamat;
        $bansos->jenis_bansos = $request->jenis_bansos;
        // dd($bansos);
        $bansos->save();

        return redirect('admin/data-bansos')->with('status', 'Data Berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DataBansos::find($id)->delete();
        return back()->with('status','Data dihapus!');
    }
}
