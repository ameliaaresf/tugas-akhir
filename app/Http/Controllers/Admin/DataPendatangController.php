<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DataPendatang;

class DataPendatangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datapendatang = DataPendatang::all();

        return view ('admin.data-pendatang.index')->with('datapendatang', $datapendatang);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.data-pendatang.create');
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
            'tgl_datang' => 'required',
            'jk' => 'required',
            'alamat_asal' => 'required',
            'alamat_saatini' => 'required',
            'status' => 'required',
            'pekerjaan' => 'required',
            'kw' => 'required'
        ];

        $messages = [
            'nik.required' => 'NIK harus diisi!',
            'nik.digits' => 'NIK harus 16 digits!',
            'nama.required' => 'Nama harus diisi!',
            'tgl_datang.required' => 'Tanggal datang harus diisi!',
            'jk.required' => 'Jenis kelamin harus diisi!',
            'alamat_asal.required' => 'Alamat asal harus diisi!',
            'alamat_saatini.required' => 'Alamat saat ini harus diisi!',
            'status.required' => 'Status perkawinan harus diisi!',
            'pekerjaan.required' => 'Pekerjaan harus diisi!',
            'kw.required' => 'Kewarganegaraan harus diisi!'
        ];

        $this->validate($request, $rules, $messages);

        $date =  date('y-m-d', strtotime($request->tgl_datang));

        $pendatang = new DataPendatang;
        $pendatang->nik = $request->nik;
        $pendatang->nama = $request->nama;
        $pendatang->tgl_datang = $date;
        $pendatang->jk = $request->jk;
        $pendatang->alamat_asal = $request->alamat_asal;
        $pendatang->alamat_saatini = $request->alamat_saatini;
        $pendatang->status = $request->status;
        $pendatang->pekerjaan = $request->pekerjaan;
        $pendatang->kw = $request->kw;
        // dd($pendatang);
        $pendatang->save();

        return redirect('admin/data-pendatang')->with('status', 'Data Berhasil diinput!');
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
        $datapendatang = DataPendatang::findOrFail($id);

        return view ('admin.data-pendatang.edit')->with('datapendatang', $datapendatang);
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
            'tgl_datang' => 'required',
            'jk' => 'required',
            'alamat_asal' => 'required',
            'alamat_saatini' => 'required',
            'status' => 'required',
            'pekerjaan' => 'required',
            'kw' => 'required'
        ];

        $messages = [
            'nik.required' => 'NIK harus diisi!',
            'nik.digits' => 'NIK harus 16 digits!',
            'nama.required' => 'Nama harus diisi!',
            'tgl_datang.required' => 'Tanggal datang harus diisi!',
            'jk.required' => 'Jenis kelamin harus diisi!',
            'alamat_asal.required' => 'Alamat asal harus diisi!',
            'alamat_saatini.required' => 'Alamat saat ini harus diisi!',
            'status.required' => 'Status perkawinan harus diisi!',
            'pekerjaan.required' => 'Pekerjaan harus diisi!',
            'kw.required' => 'Kewarganegaraan harus diisi!'
        ];

        $this->validate($request, $rules, $messages);

        $date =  date('y-m-d', strtotime($request->tgl_datang));

        $pendatang = DataPendatang::find($id);
        $pendatang->nik = $request->nik;
        $pendatang->nama = $request->nama;
        $pendatang->tgl_datang = $date;
        $pendatang->jk = $request->jk;
        $pendatang->alamat_asal = $request->alamat_asal;
        $pendatang->alamat_saatini = $request->alamat_saatini;
        $pendatang->status = $request->status;
        $pendatang->pekerjaan = $request->pekerjaan;
        $pendatang->kw = $request->kw;
        // dd($pendatang);
        $pendatang->save();

        return redirect('admin/data-pendatang')->with('status', 'Data Berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DataPendatang::find($id)->delete();
        return back()->with('status','Data dihapus!');
    }
}
