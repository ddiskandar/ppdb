<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1 {
            color: indigo;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <td width=180px >No. Registrasi</td>
            <td width=5px>:</td>
            <td>{{ $student->user->username }}</td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>{{ $student->user->name }}</td>
        </tr>
        <tr>
            <td>Tempat, Tanggal Lahir</td>
            <td>:</td>
            <td>{{ $student->ttl() }}</td>
        </tr>
        <tr>
            <td>Asal Sekolah</td>
            <td>:</td>
            <td>{{ $student->school->name }}</td>
        </tr>
        <tr>
            <td>Alamat lengkap</td>
            <td>:</td>
            <td>{{ $student->alamat_lengkap() }}</td>
        </tr>
    </table>

</body>

</html>