<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>PDF</title>
    <style type="text/css">
        body {
            font-family: 'Times New Roman', Times, serif;
            backgroun-color: #ffffff
        }

        .rangkasurat {
            /* width: 980px; */
            margin: 0 auto;
            background-color: #ffffff;
            height: 500px;
            padding: 20px
        }

        .kop {
            border-bottom: 5px solid #000;
            padding: 2px
        }

        .tengah {
            text-align: center;
            /* line-height: 5px */
        }

        .pemerintah {
            font-size: 20px;
        }

        .bold {
            font-weight: 500;
            font-size: 25px
        }

        .italic {
            font-style: italic;
        }

        .tanggal {
            padding: 20px;
            position: absolute;
            top: 150px;
            right: 108px;
        }

        .tertuju {
            position: absolute;
            padding: 20px;
            top: 180px;
            right: 0px;
        }

        .perihal {
            position: absolute;
            padding: 20px;
            top: 200px;
            left: 0px
        }

        .bagian {
            position: absolute;
            padding: 20px;
            top: 325px;
            left: 0px
        }

        .tandatangan {
            position: absolute;
            padding: 20px;
            top: 580px;
            right: 0px;
            text-align: center
        }

        .nip {
            border-top: 2px solid #000
        }

        .namatanda {
            border-bottom: 2px solid #000
        }

        .terakhir {
            position: absolute;
            margin-left: 20px;
            top: 730px;
            left: 0px;
            border: 1px solid #000
        }

        .terakhir2 {
            position: absolute;
            top: 730px;
            left: 285px;
            height: 110px;
            border: 1px solid #000
        }

        .terakhir3 {
            position: absolute;
            top: 845px;
            left: 285px;
            height: 114px;
            border: 1px solid #000
        }

        .tengahtable {
            text-align: center;
            border-bottom: 1px solid #000;
        }

        .tengahtable2 {
            text-align: center;
            font-weight: 700;
            font-size: 13px;
        }

        .text-xs {
            font-size: 0.75rem
                /* 12px */
            ;
            line-height: 1rem
                /* 16px */
            ;
            padding: 10px
        }
    </style>
</head>

<body>
    <div class="rangkasurat">
        <table width='100%' class="kop">
            <tr>
                <td>
                    <img src="{{ asset('dashboard/logo.png') }}" width="90px">
                </td>
                <td class="tengah">
                    <div class="pemerintah">PEMERINTAH PROVINSI SULAWESI TENGAH</div>
                    <div class="bold">SATUAN POLISI PAMONG PRAJA</div>
                    <div class="italic">Jl.Pramuka No. 21 Telp. (0451) 421210 Palu - 94111</div>
                    <div>Email: satpolpp.provsulteng@gmail.com</div>
                    <div>www.satpolpp.sultengprov.go.id</div>
                </td>
            </tr>
        </table>
    </div>
    <div class="tanggal">
        <span>Palu, {{ $cuti->created_at->format('d M Y') }}</span>
    </div>
    <div class="tertuju">
        <div>Kepada</div>
        <div>YTH, {{ $tertuju->jabatan }}</div>
        <div>Provinsi Sulawesi Tengah</div>
        <div>Di - </div>
        <div>Palu</div>
    </div>
    <div class="perihal">
        Perihal : Permohonan Cuti
    </div>
    <div class="bagian">
        <div>Dengan Hormat,</div>
        <div>Yang bertanda tangan di bawah ini:</div>

        <table class="titikkoma" align="left" cellpadding='1' width="400">
            <tr>
                <td>Nama</td>
                <td>: {{ $user->name }}</td>
            </tr>
            <tr>
                <td>NIP</td>
                <td>: {{ $user->nip }}</td>
            </tr>
            <tr>
                <td>Pangkat / Gol</td>
                <td>: {{ $user->pangkat }} / {{ $user->gol }}</td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td>: {{ $user->jabatan }}</td>
            </tr>
            <tr>
                <td>Unit Kerja</td>
                <td>: Satuan Polisi Pamong Praja Sulawesi Tengah</td>
            </tr>
        </table>
        <div>Dengan ini mengajukan cuti untuk {{ $cuti->pesan }} terhitung {{ $cuti->tanggal_mulai }} s/d
            {{ $cuti->tanggal_akhir }} selama melaksanakan
            cuti tersebut apabila ada hal-hal yang prinsip yang berhubungan dengan tugas saya agar dikoordinasikan
            dengan Bapak Kepala Satuan Polisi Pamong Praja Sulawesi Tengah.</div>
        <div>Demikianlah surat permohonan ini dan atas restu Bapak diucapkan terima kasih.</div>
    </div>
    <div class="tandatangan">
        <div>Hormat saya,</div>
        <br>
        <br>
        <br>
        <div class="namatanda">{{ $user->name }}</div>
        <div class="nip">NIP : {{ $user->nip }}</div>
    </div>
    <table class="terakhir" width="200">
        <tr>
            <td class="tengahtable">CATATAN PEJABAT KEPEGAWAIAN</td>
        </tr>
        <tr>
            <td>Cuti yang telah diambil dalam tahun yang bersangkutan:</td>
        </tr>
        <tr>
            <td>
                <table class="titikkoma" width="100%">
                    <tr>
                        <td>1. Cuti Tahunan</td>
                        <td>: - hari</td>
                    </tr>
                    <tr>
                        <td>2. Cuti Besar</td>
                        <td>: - hari</td>
                    </tr>
                    <tr>
                        <td>3. Cuti Sakit</td>
                        <td>: - hari</td>
                    </tr>
                    <tr>
                        <td>4. Cuti Melahirkan</td>
                        <td>: - hari</td>
                    </tr>
                    <tr>
                        <td>5. Cuti Karena Alasan Penting</td>
                        <td>: - hari</td>
                    </tr>
                    <tr>
                        <td>6. Keterangan lain-lain</td>
                        <td>: </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <table class="terakhir2" width="300">
        <tr>
            <td class="tengahtable2">CATATAN PERTIMBANGAN ATASAN LANGUNG</td>
        </tr>
        <tr>
            <td class="text-xs">{{ $cuti->sekdis }}</td>
        </tr>
    </table>
    <table class="terakhir3" width="300">
        <tr>
            <td class="tengahtable2">KEPUTUSAN PEJABAT YANG BERWENANG MEMBERIKAN CUTI</td>
        </tr>
        <tr>
            <td class="">{{ $sign }}</td>
        </tr>
    </table>
</body>
</body>

</html>
