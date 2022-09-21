<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
</head>

<h3> Data </h3>

<table border="1">
    <tr>
        <th>No</th>
        <th>Kategori </th>
        <th>judul data </th>
        <th>tanggal</th>
        <th>tahun</th>
        <th>frekuensi </th>
        <th>field 1</th>
        <th>data 1</th>
        <th>field 2</th>
        <th>data 2 </th>
        <th colspan="2">Aksi</th>
    </tr>

    <?php
    include "koneksi.php";

    $no=1;
    $ambildata = mysqli_query($koneksi,"select * from data, tabeldatai, tabeldataii");
    while($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
            <td>$no</td>
            <td>$tampil[idKategori]</td>
            <td>$tampil[judul]</td>
            <td>$tampil[tanggal]</td>
            <td>$tampil[tahun]</td>
            <td>$tampil[frekuensi]</td>
            <td>$tampil[field1]</td>
            <td>$tampil[data1]</td>
            <td>$tampil[field2]</td>
            <td>$tampil[data2]</td>
            <td><a href='?kode=$tampil[kdData]'> Hapus </a></td>
            <td><a href='barang-ubah.php?kode=$tampil[kdData]'> Ubah </a></td>
        <tr>";
        $no++;
    }
    ?>
    </table>

    <?php
    include "koneksi.php";

    if(isset($_GET['kode'])){
    mysqli_query($koneksi,"delete  from barang where kdData='$_GET[kode]'");
    
    echo "Data berhasil dihapus";
    echo "<meta http-equiv=refresh content=2;URL='barang-data.php'>";

    }
    ?>

