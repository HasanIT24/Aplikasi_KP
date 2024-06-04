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
            alert('Simpan data Gagal!');
            document.location = 'index.php'</script>";
    }
}

//Uji jika tombol ubah di klik
if (isset($_POST['bubah'])) {
    $id = $_POST['id_barang'];
    $kode = $_POST['tkode'];
    $namabarang = $_POST['tnama'];
    $jumlah = $_POST['tjumlah'];
    $satuan = $_POST['tsatuan'];
    $tanggal = $_POST['tglditerima'];

    // Persiapan ubah data
    $sql = "UPDATE tbarang SET kode_barang = '$kode', nama_barang = '$namabarang', jumlah = '$jumlah', satuan = '$satuan', tanggal_diterima = '$tanggal' WHERE id_barang = '$id'";
    // buat query
    $query = mysqli_query($koneksi, $sql);

    if ($query) {
        echo "<script>
        alert('Ubah data Sukses!');
        document.location = 'index.php'</script>";
    }else{
        echo "<script>
        alert('Simpan data Gagal!');
        document.location = 'index.php'</script>";
    }
}

//Uji jika tombol Hapus di klik
if (isset($_POST['bhapus'])) {
    $id = $_POST['id_barang'];
    $kode = $_POST['tkode'];
    $namabarang = $_POST['tnama'];
    $jumlah = $_POST['tjumlah'];
    $satuan = $_POST['tsatuan'];
    $tanggal = $_POST['tglditerima'];

    // Persiapan Hapus data
    $sql = " DELETE FROM tbarang WHERE id_barang = '$id'";

    $query = mysqli_query($koneksi, $sql);

    if ($query) {
        echo "<script>
        alert('Hapus data Sukses!');
        document.location = 'index.php'</script>";
    }else{
        echo "<script>
        alert('Hapus data Gagal!');
        document.location = 'index.php'</script>";
    }
}



?>