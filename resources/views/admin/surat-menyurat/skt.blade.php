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
        <font face="Times New Roman" color="black" size="4">
			<p align="center">  <b> PEMERINTAH KABUPATEN INDRAMAYU</b>
            <p align="center">  <b> KECAMATAN LELEA</b>
        </font>
        <font face="Times New Roman" color="black" size="8">
            <p align="center"> <b> DESA TUGU</b>
        </font>
        <font face="Times New Roman" color="black" size="2">
        <p align="center"> Alamat : Jl. Raya Tugu No. 87 Desa Tugu Kecamatan Lelea Kabupaten Indramayu 45261
        </font>
        <font face="Times New Roman" color="black" size="4">
			<p align="center"> <u> <b> SURAT KETERANGAN TANAH</b></u>
            <p align="center"> Nomor : {{ $skt->no_regis }} </p>
		</font>
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