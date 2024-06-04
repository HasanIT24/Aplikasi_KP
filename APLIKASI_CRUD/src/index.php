<?php include "config.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <div class="container">
        <div class="mt-3">
            <h3 class="text-center">Data Inventaris</h3>
        </div>

        <div class="card">
            <div class="card-header bg-primary text-white">
                Data Inventaris
            </div>
            <div class="card-body">
                  <!-- Button trigger modal -->
                <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#modaltambah">
                    Tambah Data
                </button>

                <table class="table table-bordered table-striped table-hover">
                    <tr>
                        <th>No.</th>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Jumlah</th>
                        <th>Satuan</th>
                        <th>Tanggal Diterima</th>
                        <th>Aksi</th>
                    </tr>
                    <?php
                    // Menampilkan Data
                    $sql = "SELECT * FROM tbarang ORDER BY id_barang DESC";
                    $query = mysqli_query($koneksi, $sql);
                    $no = 1;
                    while ($data = mysqli_fetch_array($query)):
                    ?>
                        <tr>
                            <td><?=$no?></td> 
                            <td><?=$data['kode_barang']?></td>
                            <td><?=$data['nama_barang']?></td>
                            <td><?=$data['jumlah']?></td>
                            <td><?=$data['satuan']?></td>
                            <td><?=$data['tanggal_diterima']?></td>
                            <td>
                                <a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalUbah<?=$no?>">Ubah</a>
                                <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalHapus<?=$no?>">Hapus</a>
                            </td>
                        </tr>

                        <!-- Awal Modal Ubah -->
                        <div class="modal fade" id="modalUbah<?=$no?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Form Data Inventaris</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form method="POST" action="aksi_crud.php">
                                        <input type="hidden" name="id_barang" value="<?= $data['id_barang']?>">
                                        <div class="modal-body">
                                            <input type="hidden" name="id_barang" value="<?=$data['id_barang']?>">
                                            <div class="mb-3">
                                                <label class="form-label">Kode Barang</label>
                                                <input type="text" class="form-control" name="tkode" value="<?=$data['kode_barang']?>">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Nama Barang</label>
                                                <input type="text" class="form-control" name="tnama" value="<?=$data['nama_barang']?>">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Jumlah</label>
                                                <input type="text" class="form-control" name="tjumlah" value="<?=$data['jumlah']?>">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Satuan</label>
                                                <select class="form-select" name="tsatuan">
                                                    <option value="<?=$data['satuan']?>"><?=$data['satuan']?></option>
                                                    <option value="Unit ">Unit</option>
                                                    <option value="Kotak">Kotak</option>
                                                    <option value="Pack">Pack</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Tanggal Diterima</label>
                                                <input type="date" class="form-control" name="tglditerima" value="<?=$data['tanggal_diterima']?>">
                                            </div>                            
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary" name="bubah">Simpan</button>
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Keluar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Akhir Modal Ubah -->

                        <!-- Awal Modal Hapus -->
                        <div class="modal fade" id="modalHapus<?=$no?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Form Data Inventaris</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form method="POST" action="aksi_crud.php">
                                        <input type="hidden" name="id_barang" value="<?= $data['id_barang']?>">
                                        <div class="modal-body text-center">
                                            <h5 class="text-center">Apakah anda yakin akan menghapus data ini</h5>
                                            <span class="text-danger"><?= $data['kode_barang']?> - <?= $data['nama_barang']?></span>              
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary" name="bhapus">Hapus</button>
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Akhir Modal Hapus -->


                    <?php 
                    $no++;
                    endwhile ?>
                </table>

                <!-- Awal Modal Tambah -->
                <div class="modal fade" id="modaltambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Form Data Inventaris</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form method="POST" action="aksi_crud.php">
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">Kode Barang</label>
                                        <input type="text" class="form-control" name="tkode" placeholder="Masukkan Kode Barang">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Nama Barang</label>
                                        <input type="text" class="form-control" name="tnama" placeholder="Masukkan Nama Barang">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Jumlah</label>
                                        <input type="text" class="form-control" name="tjumlah" placeholder="Masukkan Jumlah">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Satuan</label>
                                        <select class="form-select" name="tsatuan">
                                            <option selected>--Pilih--</option>
                                            <option value="Unit">Unit</option>
                                            <option value="Kotak">Kotak</option>
                                            <option value="Pack">Pack</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Tanggal Diterima</label>
                                        <input type="date" class="form-control" name="tglditerima">
                                    </div>                            
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary" name="bsimpan">Simpan</button>
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Keluar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Akhir Modal Tambah -->

            </div>
        </div>
    </div>
</body>
</html>
