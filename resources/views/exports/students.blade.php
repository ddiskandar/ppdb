<table>
    <thead>
        <tr>
            <th>No. Handphone</th>
            <th>No. Registrasi</th>
            <th>Nama Lengkap</th>
            <th>JK</th>
            <th>NIK</th>
            <th>NISN</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Nama Ibu</th>
            <th>Nama Ayah</th>
            <th>Alamat Lengkap</th>
            <th>Asal Sekolah</th>
            <th>NPSN</th>
            <th>Anak Ke</th>
            <th>Saudara Kandung</th>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $student)
        <tr>
            <td>{{ $student->phone }}</td>
            <td>{{ $student->user->username }}</td>
            <td>{{ $student->user->name }}</td>
            <td>{{ $student->jk }}</td>
            <td>{{ $student->nik }}</td>
            <td>{{ $student->nisn }}</td>
            <td>{{ $student->birthplace }}</td>
            <td>{{ $student->birthdate }}</td>
            <td>{{ $student->ortu->ibu_nama }}</td>
            <td>{{ $student->ortu->ayah_nama }}</td>
            <td>{{ $student->alamat_lengkap() }}</td>
            <td>{{ $student->school->name }}</td>
            <td>{{ $student->school->npsn }}</td>
            <td>{{ $student->anak_ke }}</td>
            <td>{{ $student->saudara }}</td>
        </tr>
        @endforeach
    </tbody>
</table>