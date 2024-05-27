<?php include "config.php";

//Jika Tombol Simpan Di Klik

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['bsimpan'])){

    // ambil data dari formulir
    $kode = $_POST['tkode'];
    $namabarang = $_POST['tnama'];
    $jumlah = $_POST['tjumlah'];
    $satuan = $_POST['tsatuan'];
    $tanggal = $_POST['tglditerima'];


    // buat query
    $sql = "INSERT INTO tbarang(kode_barang, nama_barang, jumlah, satuan, tanggal_diterima) VALUES ('$kode', '$namabarang', '$jumlah', '$satuan', '$tanggal')";
    $query = mysqli_query ($koneksi, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        echo "<script>
                alert('Simpan data Sukses!');
                document.location = 'index.php'</script>";
    }else{
        echo "<script>
            alert('Simpan data Sukses!');
            document.location = 'index.php'</script>";
}
}

if(isset($_POST['bubah'])){

    // ambil data dari formulir
    $kode = $_POST['tkode'];
    $namabarang = $_POST['tnama'];
    $jumlah = $_POST['tjumlah'];
    $satuan = $_POST['tsatuan'];
    $tanggal = $_POST['tglditerima'];


    // buat query
    $sql = "UPDATE tbarang SET (kode_barang, nama_barang, jumlah, satuan, tanggal_diterima) VALUES ('$kode', '$namabarang', '$jumlah', '$satuan', '$tanggal')";
    $query = mysqli_query ($koneksi, $sql);

}


// Check if the 'id' parameter is set in the URL

