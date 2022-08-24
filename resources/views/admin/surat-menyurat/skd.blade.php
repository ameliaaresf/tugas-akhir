<!DOCTYPE html>
<head>
    <title>Surat Keterangan Domisili</title>
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
            <p align="center"> Nomor : {{ $skd->no_regis }} </p>
		</font>
        </div>
        
    </header>
        <!-- <font face="Times New Roman" color="black" size="4">
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
			<p align="center"> <u> <b> SURAT KETERANGAN DOMISILI</b></u>
            <p align="center"> Nomor : {{ $skd->no_regis }} </p>
		</font> -->
		<br>

        <p style="text-align: justify;"> Yang bertandatangan di bawah ini Kuwu Tugu Kecamatan Lelea Kabupaten Indramayu, menerangkan bahwa : </p>
        <table md-5>
            <tr>
                <td style="width: 30%;">Nama Lengkap</td>
                <td style="width: 10%;">:</td>
                <td style="width: 65%;"> {{ $skd->nama }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">NIK</td>
                <td style="width: 10%;">:</td>
                <td style="width: 65%;">{{ $skd->nik }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Tempat Lahir</td>
                <td style="width: 10%;">:</td>
                <td style="width: 65%;"> {{ $skd->tempat_lahir }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Tanggal Lahir</td>
                <td style="width: 10%;">:</td>
                <td style="width: 65%;"> {{ $skd->tgl_lahir }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Kewarganegaraan</td>
                <td style="width: 10%;">:</td>
                <td style="width: 65%;"> {{ $skd->kw }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Agama</td>
                <td style="width: 10%;">:</td>
                <td style="width: 65%;"> {{ $skd->agama }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Jenis Kelamin</td>
                <td style="width: 10%;">:</td>
                <td style="width: 65%;"> {{ $skd->jk }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Pekerjaan</td>
                <td style="width: 10%;">:</td>
                <td style="width: 65%;"> {{ $skd->pekerjaan }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Alamat</td>
                <td style="width: 10%;">:</td>
                <td style="width: 65%;"> {{ $skd->alamat }}</td>
            </tr>
        </table>
            <p style="text-align: Justify;"> Benar bahwa nama tersebut adalah warga/penduduk desa kami yang rkelakuan baik dan <b>berdomisili</b> di Desa Tugu.
            </p>
            <p style="text-align: Justify;"> Demikian surat keterangan ini dibuat dengan sebenarnya dan untuk dipergunakan sebagaimana mestinya.
            </p>

        <div style="width: 25%; text-align: justify; float: right;">Tugu, {{ $skd->tgl_buat }}</div><br><br><br><br>
        <div style="width: 25%; text-align: justify; float: right;">{{ $skd->ttd }}</div><br><br><br><br>
        <div style="width: 35%; text-align: center; float: right;">(.....................)</div>

    </div>
</body>

</html>