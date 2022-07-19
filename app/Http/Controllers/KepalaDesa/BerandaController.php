<?php

namespace App\Http\Controllers\KepalaDesa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DataBansos;
use App\Models\DataKelahiran;
use App\Models\DataKematian;
use App\Models\DataPekerja;
use App\Models\DataPendatang;
use App\Models\DataPenduduk;
use App\Models\DataPerceraian;
use App\Models\DataPerkawinan;
use App\Models\DataPerpindahan;
use App\Models\DataVaksin;

class BerandaController extends Controller
{
    public function index()
    {
        return view ('kepala-desa.dashboard.index');
    }

    public function bansos()
    {
        $databansos = DataBansos::all();

        return view ('kepala-desa.data-bansos.index')->with('databansos', $databansos);
    }

    public function kelahiran()
    {
        $datakelahiran = DataKelahiran::all();

        return view ('kepala-desa.data-kelahiran.index')->with('datakelahiran', $datakelahiran);
    }

    public function kematian()
    {
        $datakematian = DataKematian::all();
        
        return view ('kepala-desa.data-kematian.index')->with('datakematian', $datakematian);
    }

    public function pekerja()
    {
        $datapekerja = DataPekerja::all();
        
        return view ('kepala-desa.data-pekerja-migran.index')->with('datapekerja', $datapekerja);
    }

    public function pendatang()
    {
        $datapendatang = DataPendatang::all();

        return view ('kepala-desa.data-pendatang.index')->with('datapendatang', $datapendatang);
    }

    public function penduduk()
    {
        $datapenduduk = DataPenduduk::all();

        return view ('kepala-desa.data-penduduk.index')->with('datapenduduk', $datapenduduk);
    }

    public function perceraian()
    {
        $dataperceraian = DataPerceraian::all();

        return view ('kepala-desa.data-perceraian.index')->with('dataperceraian', $dataperceraian);
    }

    public function perkawinan()
    {
        $dataperkawinan = DataPerkawinan::all();

        return view ('kepala-desa.data-perkawinan.index')->with('dataperkawinan', $dataperkawinan);
    }

    public function perpindahan()
    {
        $dataperpindahan = DataPerpindahan::all();

        return view ('kepala-desa.data-perpindahan.index')->with('dataperpindahan', $dataperpindahan);
    }

    public function vaksin()
    {
        $datavaksin = DataVaksin::all();

        return view ('kepala-desa.data-vaksin.index')->with('datavaksin', $datavaksin);
    }
}
