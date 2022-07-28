<!DOCTYPE html>
<head>
    <title>Surat Keterangan Usaha</title>
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
			<p align="center"> <u> <b> SURAT KETERANGAN USAHA</b></u>
            <p align="center"> Nomor : {{ $sku->no_regis }} </p>
		</font>
		<br>

        <p style="text-align: justify;"> Yang bertandatangan di bawah ini Kuwu Tugu Kecamatan Lelea Kabupaten Indramayu, menerangkan bahwa : </p>
        <table md-5>
            <tr>
                <td style="width: 30%;">Nama Lengkap</td>
                <td style="width: 10%;">:</td>
                <td style="width: 65%;"> {{ $sku->nama }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">NIK</td>
                <td style="width: 10%;">:</td>
                <td style="width: 65%;">{{ $sku->nik }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Tempat Lahir</td>
                <td style="width: 10%;">:</td>
                <td style="width: 65%;"> {{ $sku->tempat_lahir }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Tanggal Lahir</td>
                <td style="width: 10%;">:</td>
                <td style="width: 65%;"> {{ $sku->tgl_lahir }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Jenis Kelamin</td>
                <td style="width: 10%;">:</td>
                <td style="width: 65%;"> {{ $sku->jk }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Pekerjaan</td>
                <td style="width: 10%;">:</td>
                <td style="width: 65%;"> {{ $sku->pekerjaan }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Alamat</td>
                <td style="width: 10%;">:</td>
                <td style="width: 65%;"> {{ $sku->alamat }}</td>
            </tr>
        </table>
            <p style="text-align: Justify;"> Benar orang tersebut adalah warga masyarakat kami dan mempunyai usaha <b>{{ $sku->nama_usaha}}</b>.
            </p>
            <p style="text-align: Justify;"> Demikian surat keterangan ini dibuat dengan sebenarnya dan untuk dipergunakan sebagaimana mestinya.
            </p>

        <div style="width: 25%; text-align: justify; float: right;">Tugu, {{ $sku->tgl_buat }}</div><br><br><br><br>
        <div style="width: 25%; text-align: justify; float: right;">{{ $sku->ttd }}</div><br><br><br><br>
        <div style="width: 35%; text-align: center; float: right;">(.....................)</div>

    </div>
</body>

</html>