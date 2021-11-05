<!DOCTYPE html>
<html>
<head>
    <title>Data Pembelian Tiket</title>
</head>
<body>
    <table bgcolor="magenta" border="0" align="center" width="40%">
    <tr">
        <td colspan="3" align="center"><h2>DATA PEMBELIAN TIKET KONSER AM
        AL</h2><hr></td>
    </tr>
    <tr>
        <td>Nama Pemesan</td>
        <td>:</td>
        <td>{{ $nama }}</td>
    </tr>
    <tr valign="top">
        <td>Kode Studio</td>
        <td>:</td>
        <td>{{ $studio }}</td>
    </tr>
    <tr valign="top">
        <td>Bintang Tamu</td>
        <td>:</td>
        <td>{{ $bt }}</td>
    </tr>
    <tr valign="top">
        <td>Jenis Kelas</td>
        <td>:</td>
        <td>{{ $kelas }}</td>
    </tr>
    <tr valign="top">
        <td>Harga</td>
        <td>:</td>
        <td>Rp. {{ $harga }} </td>
    </tr>
    <tr>
        <td>Jumlah Tiket</td>
        <td>:</td>
        <td>{{ $jmltiket }}</td>
    </tr>
    <tr><td colspan="3"><hr></td></tr>
    <tr>
         <td>Total Harga</td>
         <td>:</td>
         <td>Rp. {{ $total }}</td>
    </tr>
    <tr><td colspan="3"><hr></td></tr>
    <tr><td colspan="3" align="center"><a href="booking">Kembali</a></td>
    </tr>
    </table>
    </form>
</body>
</html>
