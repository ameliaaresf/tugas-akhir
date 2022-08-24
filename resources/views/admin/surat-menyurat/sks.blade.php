<!DOCTYPE html>
<head>
    <title>Surat Keterangan Status</title>
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
			<p align="center"> <u> <b> SURAT KETERANGAN STATUS</b></u>
            <p align="center"> Nomor : {{ $sks->no_regis }} </p>
		</font>
        </div>
        
    </header>
		<br>

        <p style="text-align: justify;"> Yang bertandatangan di bawah ini Kuwu Tugu Kecamatan Lelea Kabupaten Indramayu, menerangkan bahwa : </p>
        <table md-5>
            <tr>
                <td style="width: 30%;">Nama Lengkap</td>
                <td style="width: 10%;">:</td>
                <td style="width: 65%;"> {{ $sks->nama }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">NIK</td>
                <td style="width: 10%;">:</td>
                <td style="width: 65%;">{{ $sks->nik }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Tempat Lahir</td>
                <td style="width: 10%;">:</td>
                <td style="width: 65%;"> {{ $sks->tempat_lahir }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Tanggal Lahir</td>
                <td style="width: 10%;">:</td>
                <td style="width: 65%;"> {{ $sks->tgl_lahir }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Jenis Kelamin</td>
                <td style="width: 10%;">:</td>
                <td style="width: 65%;"> {{ $sks->jk }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Pekerjaan</td>
                <td style="width: 10%;">:</td>
                <td style="width: 65%;"> {{ $sks->pekerjaan }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Alamat</td>
                <td style="width: 10%;">:</td>
                <td style="width: 65%;"> {{ $sks->alamat }}</td>
            </tr>
        </table>
            <p style="text-align: Justify;"> Benar orang tersebut adalah warga masyarakat kami yang berstatus <b>{{ $sks->status}}</b>.
            </p>
            <p style="text-align: Justify;"> Demikian surat keterangan ini dibuat dengan sebenarnya dan untuk dipergunakan sebagaimana mestinya.
            </p>

        <div style="width: 25%; text-align: justify; float: right;">Tugu, {{ $sks->tgl_buat }}</div><br><br><br><br>
        <div style="width: 25%; text-align: justify; float: right;">{{ $sks->ttd }}</div><br><br><br><br>
        <div style="width: 35%; text-align: center; float: right;">(.....................)</div>

    </div>
</body>

</html>