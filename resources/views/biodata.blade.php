<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Laravel</title>
</head>
<body>
    <form action="/register/tampil" method="post">
    {{ csrf_field() }}
    <table bgcolor="#cc0066" border="0" align="center" width="60%">
    <tr">
    <td colspan="3" align="center"><h2>BIODATA MAHASISWA</h2><hr></td>
    </tr>
    <tr>
        <td>NIM</td>
        <td>:</td>
        <td><input type="text" name="nim" placeholder="Masukkan NIM anda" ma       xlength="8"></td>
        </tr>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td><input type="text" name="nama" placeholder="Masukkan Nama anda"
        size="40"></td>
    </tr>
    <tr>
        <td>Tempat Lahir</td>
        <td>:</td>
        <td><input type="text" name="tmplhr" placeholder="Tempat Lahir anda"
        size="50"></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type="date" name="tgllhr"></td>
        </tr>
        <tr valign="top">
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>
                <input type="radio" name="jk" value="Laki-Laki">Laki - Laki<br>
                <input type="radio" name="jk" value="Perempuan">Perempuan
            </td>
        </tr>
        <tr valign="top">
            <td>Pekerjaan</td>
            <td>:</td>
            <td>
                <select name="kerja">
                    <option value="">--Pilih Pekerjaan--</option>
                    <option value="Karyawan">Karyawan</option>
                    <option value="Mahasiswa">Mahasiswa</option>
                    <option value="Wirausaha">Wirausaha</option>
                    <option value="Belum Bekerja">Belum Bekerja</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="email" name="email" placeholder="Email Anda"></td>
        </tr>
        <tr valign="top">
            <td>Hobi</td>
            <td>:</td>
            <td>
            <input type="checkbox" name="hobi1" value="Olah Raga">Olah Raga<br>
            <input type="checkbox" name="hobi2" value="Musik">Musik<br>
            <input type="checkbox" name="hobi3" value="Pecinta Alam">Pecinta
            Alam<br>
            <input type="checkbox" name="hobi4" value="Lain">Lain-Lain
         </td>
        </tr>
        <tr>
            <td colspan="3">
                <input type="submit" value="SIMPAN DATA">
                <input type="reset" value="BATAL"><hr>
        </tr>
        </td>
    </form>
</body>
</html>