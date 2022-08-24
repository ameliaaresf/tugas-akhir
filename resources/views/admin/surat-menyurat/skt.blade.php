<!DOCTYPE html>
<head>
    <title>Surat Keterangan Tanah</title>
    <meta charset="utf-8">
    <style>
		body {
		height: 842px;
		width: 595px;
		margin-left: auto;
		margin-right: auto;
		}
	</style>
</head>

<body>
    <div id=halaman>
    <header>
        <div class="w-full text-center tracking-wider mb-0 mt-1">
            <p align="center" class="text-sm uppercase"><b> PEMERINTAH KABUPATEN INDRAMAYU</b></p>
            <p align="center" class="text-sm uppercase"><b> KECAMATAN LELEA</b></p>
            <p align="center" class="text-sm uppercase"><b> DESA TUGU</b></p>
            <p align="center" class="text-xs">
                Alamat : Jl. Raya Tugu No. 87 Kecamatan Lelea Kabupaten Indramayu 45261
            </p>
            <hr class="thin">
            <hr class="bold mt-1">
            <font face="Times New Roman" color="black" size="4">
			<p align="center"> <u> <b> SURAT KETERANGAN DOMISILI</b></u>
            <p align="center"> Nomor : {{ $skt->no_regis }} </p>
		</font>
        </div>
        
    </header>
		<br>

        <p style="text-align: justify;"> Yang bertandatangan di bawah ini Kuwu Tugu Kecamatan Lelea Kabupaten Indramayu, menerangkan bahwa : </p>
        <table md-5>
            <tr>
                <td style="width: 30%;">Nama Lembaga</td>
                <td style="width: 10%;">:</td>
                <td style="width: 65%;"> <b>{{ $skt->nama_lembaga }}</b></td>
            </tr>
            <tr>
                <td style="width: 30%;">Alamat</td>
                <td style="width: 10%;">:</td>
                <td style="width: 65%;">{{ $skt->alamat }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Desa</td>
                <td style="width: 10%;">:</td>
                <td style="width: 65%;"> {{ $skt->desa }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Kecamatan</td>
                <td style="width: 10%;">:</td>
                <td style="width: 65%;"> {{ $skt->kec }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Kabupaten</td>
                <td style="width: 10%;">:</td>
                <td style="width: 65%;"> {{ $skt->kab }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Alamat</td>
                <td style="width: 10%;">:</td>
                <td style="width: 65%;"> {{ $skt->alamat }}</td>
            </tr>
        </table>
            <p style="text-align: Justify;"> Benar bahwa Lembaga/Sekolah tersebut di atas berdomisili di Desa Tugu Persil 83/D.1 Luas 1043 m2 ( Panjang : 33,10 m2 dan Lebar : 31,54 m2 ) 
            dan berstatus tanah Hak Guna Pakai dari Tanah Desa Kabupaten Indramayu. Dengan batas – batas sebagai berikut :</b>.
            </p>
            <table md-5>
            <tr>
                <td style="width: 30%;">Utara</td>
                <td style="width: 10%;">:</td>
                <td style="width: 65%;"> {{ $skt->utara }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Timur</td>
                <td style="width: 10%;">:</td>
                <td style="width: 65%;"> {{ $skt->timur }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Selatan</td>
                <td style="width: 10%;">:</td>
                <td style="width: 65%;"> {{ $skt->selatan }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Barat</td>
                <td style="width: 10%;">:</td>
                <td style="width: 65%;"> {{ $skt->barat }}</td>
            </tr>
            </table>
            <p style="text-align: Justify;"> Demikian surat keterangan ini dibuat dengan sebenarnya dan untuk dipergunakan sebagaimana mestinya.
            </p>

        <div style="width: 25%; text-align: justify; float: right;">Tugu, {{ $skt->tgl_buat }}</div><br><br><br><br>
        <div style="width: 25%; text-align: justify; float: right;">{{ $skt->ttd }}</div><br><br><br><br>
        <div style="width: 35%; text-align: center; float: right;">(.....................)</div>

    </div>
</body>

</html>