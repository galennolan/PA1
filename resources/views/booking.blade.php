<!DOCTYPE html>
<html>
<head>
    <title>Form Input Laravel</title>
</head>
<body>
    <form action="tampiltiket" method="post">
        {{ csrf_field() }}
    <table bgcolor="aqua" border="0" align="center" width="60%">
    <tr">
        <td colspan="3" align="center"><h2>PEMBELIAN TIKET KONSER AMAL</h2><hr></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td><input type="text" name="nama" placeholder="Masukkan Nama and
        a" size="40"></td>
    </tr>
    <tr valign="top">
        <td>Studio</td>
        <td>:</td>
        <td>
            <select name="studio">
                <option value="">--Pilih Studio--</option>
                <option value="Studio 1">Studio 1</option>
                <option value="Studio 2">Studio 2</option>
            </select>
        </td>
    </tr>
    <tr valign="top">
        <td>Kelas</td>
        <td>:</td>
        <td>
            <input type="radio" name="kelas" value="VIP">VIP<br>
            <input type="radio" name="kelas" value="Festival">Festival
        </td>
    </tr>
    <tr>
        <td>Jumlah Tiket</td>
        <td>:</td>
        <td><input type="text" name="jmltiket" placeholder="Jumlah Beli">
        </td>
    </tr>
    <tr>
        <td colspan="3" align="center"><hr>
            <input type="submit" value="SIMPAN DATA">
            <input type="reset" value="BATAL"><hr>
        </td>
    </tr>
    </table>
    </form>
</body>
</html>