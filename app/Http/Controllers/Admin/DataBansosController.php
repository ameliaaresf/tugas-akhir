<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DataBansos;

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

        return view ('admin.data-bansos.index')->with('databansos', $databansos);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.data-bansos.create');
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
            'alamat' => 'required',
            'jenis_bansos' => 'required',
        ];

        $messages = [
            'nik.required' => 'NIK harus diisi!',
            'nik.digits' => 'NIK harus 16 digit!',
            'nama.required' => 'Nama harus diisi!',
            'alamat.required' => 'Alamat harus diisi!',
            'jenis_bansos.required' => 'Agama harus dipilih!',
        ];

        $this->validate($request, $rules, $messages);

        $date =  date('y-m-d', strtotime($request->tgl_lahir));

        $bansos = new DataBansos;
        $bansos->nik = $request->nik;
        $bansos->nama = $request->nama;
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

        return view ('admin.data-bansos.edit')->with('databansos', $databansos);
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
            'alamat' => 'required',
            'jenis_bansos' => 'required',
        ];

        $messages = [
            'nik.required' => 'NIK harus diisi!',
            'nik.digits' => 'NIK harus 16 digit!',
            'nama.required' => 'Nama harus diisi!',
            'alamat.required' => 'Alamat harus diisi!',
            'jenis_bansos.required' => 'Agama harus dipilih!',
        ];

        $this->validate($request, $rules, $messages);

        $date =  date('y-m-d', strtotime($request->tgl_lahir));

        $bansos = DataBansos::find($id);
        $bansos->nik = $request->nik;
        $bansos->nama = $request->nama;
        $bansos->alamat = $request->alamat;
        $bansos->jenis_bansos = $request->jenis_bansos;
        // dd($bansos);
        $bansos->save();

        return redirect('admin/data-bansos')->with('status', 'Data Berhasil diinput!');
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
