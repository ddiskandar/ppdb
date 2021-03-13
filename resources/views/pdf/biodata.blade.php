<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .text-center {
            text-align: center;
        }

        .mt-4 {
            margin-top: 16px;
        }

        body {
            margin: 6px 32px;
        }

        table,
        h3,
        h4 {
            margin: 0;
        }

        .pt-6 {
            padding-top: 12px;
        }

        .cell {
            border: 1px solid black;
        }

        .wrapper {
            position: relative;
        }

        table td,
        table td * {
            vertical-align: top;
        }

        .photo {
            position: absolute;
            right: 0;
            top: 0;
            border: 1px solid black;
            width: 120px;
            height: 160px;
        }

        .logo {
            position: absolute;
            left: 20;
            top: 0;
            width: 80px;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div>
            <img class="logo" src="{{ public_path('images/smkplusa.jpg') }}" alt="logo smk">
        </div>
        <div class="photo">
            <img src="" alt="foto siswa">
        </div>
        <div class="text-center ">
            <h3>FORMULIR PENDAFTARAN</h3>
            <h3>PENERIMAAN PESERTA DIDIK BARU</h3>
            <h3>PPDB 2021/2022</h3>
            <h3>SMK PLUS AL-FARHAN</h3>
        </div>

        <div class="mt-4">
            <table>
                <tr>
                    <td width=240px>No. Registrasi Pendaftaran</td>
                    <td width=5px>:</td>
                    <td>{{ $student->user->username }}</td>
                </tr>
                <tr>
                    <td>Pilihan Kelas</td>
                    <td>:</td>
                    <td>{{ $student->pilihan_kelas($student->ppdb->pilihan_kelas) }}</td>
                </tr>
                <tr>
                    <td>Pilihan Kompetensi Keahlian</td>
                    <td>:</td>
                    @if (isset($student->ppdb->pilihan_satu))
                    <td>1. {{ $student->pilihan_slug( $student->ppdb->pilihan_satu ) }} / 2. {{ $student->pilihan_slug( $student->ppdb->pilihan_dua ) }} </td>
                    @else
                    <td>-</td>
                    @endif
                </tr>
                <tr>
                    <td>Asal Sekolah</td>
                    <td>:</td>
                    <td>{{ $student->school->name }}</td>
                </tr>
                <tr>
                    <td>NIK / NISN</td>
                    <td>:</td>
                    <td>{{ $student->nik }} / {{ $student->nisn }}</td>
                </tr>
                <tr>
                    <td>Nama Lengkap / Panggilan</td>
                    <td>:</td>
                    <td>{{ $student->user->name }} / {{ $student->panggilan }}</td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>{{ ($student->jk == "L") ? "Laki-laki" : "Perempuan" }}</td>
                </tr>
                <tr>
                    <td>Tempat, Tanggal Lahir</td>
                    <td>:</td>
                    <td>{{ $student->ttl() }}</td>
                </tr>
                <tr>
                    <td>Anak ke / Jumlah Saudara Kandung</td>
                    <td>:</td>
                    <td>{{ $student->anak_ke }} / {{ $student->saudara }}</td>
                </tr>
                <tr>
                    <td>Tempat tinggal / Moda Transportasi</td>
                    <td>:</td>
                    <td>{{ $student->tinggal->name }} / {{ $student->transportasi->name }}</td>
                </tr>
                <tr>
                    <td>Alamat lengkap</td>
                    <td>:</td>
                    <td>{{ $student->alamat_lengkap() }}</td>
                </tr>
            </table>
        </div>

        <div class="mt-4">
            <table>
                <tr>
                    <th width=150px>Data Orang tua</th>
                    <th width=10px>&nbsp;</th>
                    <th width=160px>Ayah</th>
                    <th width=160px>Ibu</th>
                    <th width=160px>Wali</th>
                </tr>
                <tr>
                    <td>NIK</td>
                    <td>:</td>
                    <td class="cell"> </td>
                    <td class="cell"> </td>
                    <td class="cell"> </td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td class="cell">{{ $student->ortu->ayah_nama }}</td>
                    <td class="cell">{{ $student->ortu->ibu_nama }}</td>
                    <td class="cell">{{ $student->ortu->wali_nama }}</td>
                </tr>
                <tr>
                    <td>Tahun Lahir</td>
                    <td>:</td>
                    <td class="cell"> </td>
                    <td class="cell"> </td>
                    <td class="cell"> </td>
                </tr>
                <tr>
                    <td>Pendidikan</td>
                    <td>:</td>
                    <td class="cell"> </td>
                    <td class="cell"> </td>
                    <td class="cell"> </td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td class="cell"> </td>
                    <td class="cell"> </td>
                    <td class="cell"> </td>
                </tr>
                <tr>
                    <td>Penghasilan</td>
                    <td>:</td>
                    <td class="cell"> </td>
                    <td class="cell"> </td>
                    <td class="cell"> </td>
                </tr>
                <tr>
                    <td>Nomor HP Orang tua</td>
                    <td>:</td>
                    <td colspan="3" class="cell"> </td>
                </tr>
            </table>
        </div>

        <div class="mt-4">
            <table>
                <tr>
                    <th width=240px>Berkas Pendaftaran</th>
                    <th width=10px> </th>
                    <th width=60px>Digital</th>
                    <th width=60px>Fisik</th>
                    <th width=250px>Nomor Dokumen</th>
                </tr>
                <tr>
                    <td>Pas Photo</td>
                    <td>:</td>
                    <td class="cell">v</td>
                    <td class="cell"> </td>
                    <td> </td>
                </tr>
                <tr>
                    <td>Akta Kelahiran</td>
                    <td>:</td>
                    <td class="cell">v</td>
                    <td class="cell"> </td>
                    <td class="cell"> </td>
                </tr>
                <tr>
                    <td>Kartu Keluarga</td>
                    <td>:</td>
                    <td class="cell">v</td>
                    <td class="cell"> </td>
                    <td class="cell"> </td>
                </tr>
                <tr>
                    <td>Ijazah</td>
                    <td>:</td>
                    <td class="cell">v</td>
                    <td class="cell"> </td>
                    <td class="cell"> </td>
                </tr>
                <tr>
                    <td>SHUN</td>
                    <td>:</td>
                    <td> </td>
                    <td class="cell"> </td>
                    <td> </td>
                </tr>
                <tr>
                    <td>Surat Keterangan Kelakuan Baik</td>
                    <td>:</td>
                    <td> </td>
                    <td class="cell"> </td>
                    <td> </td>
                </tr>
                <tr>
                    <td>Raport</td>
                    <td>:</td>
                    <td> </td>
                    <td class="cell"> </td>
                    <td> </td>
                </tr>
                <tr>
                    <td>Piagama Penghargaan</td>
                    <td>:</td>
                    <td> </td>
                    <td class="cell"> </td>
                    <td> </td>
                </tr>
                <tr>
                    <td>Kartu KKS</td>
                    <td>:</td>
                    <td class="cell">v</td>
                    <td class="cell"> </td>
                    <td class="cell"> </td>
                </tr>
                <tr>
                    <td>Kartu KPS/PKH</td>
                    <td>:</td>
                    <td class="cell">v</td>
                    <td class="cell"> </td>
                    <td class="cell"> </td>
                </tr>
                <tr>
                    <td>Kartu KIP</td>
                    <td>:</td>
                    <td class="cell">v</td>
                    <td class="cell"> </td>
                    <td class="cell"> </td>
                </tr>
                <tr>
                    <td>SKTM</td>
                    <td>:</td>
                    <td class="cell">v</td>
                    <td class="cell"> </td>
                    <td> </td>
                </tr>
            </table>
        </div>

        <p>Demikian data di atas adalah data sebenarnya dan dapat dipertanggungjawabkan.</p>
        <table>
            <tr>
                <td width=350px>Mengetahui, <br> Orang tua / Wali</td>
                <td>Sukabumi, ................................... 2021 <br> Calon Peserta Didik,</td>
            </tr>
            <tr>
                <td height=60px></td>
            </tr>
            <tr>
                <td>...............................................</td>
                <td>{{ $student->user->name }}</td>
            </tr>
        </table>
    </div>

</body>

</html>