<?php

namespace App\Imports;

use App\Models\DataPenduduk;
use Maatwebsite\Excel\Concerns\ToModel;
use Carbon\Carbon;

class PendudukImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */

    public function transformDate($value, $format = 'Y-m-d')
    {
        try {
            return \Carbon\Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($value));
        } catch (\ErrorException $e) {
            return \Carbon\Carbon::createFromFormat($format, $value);
        }
    }
    public function model(array $row)
    {
        return new DataPenduduk([
            'no_kk' => $row[0],
            'nik' => $row[1],
            'nama' => $row[2],
            'tgl_lahir' => $this->transformDate($row[3]),
            'blok' => $row[4],
            'rw' => $row[5],
            'rt' => $row[6]
        ]);
    }
}
