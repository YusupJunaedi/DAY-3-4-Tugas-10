<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Yusup Junaedi</title>
  </head>
  <body>
    
    <div class="container mt-5">
        <h1 class="text-center">DAY 3 & 4 Tugas 10</h1>

        <button type="button" class="btn btn-primary mt-3 mb-3" data-toggle="modal" data-target="#modalTambah">
            + Tambah Data
        </button>
        <table class="table table-bordered table-hover text-center">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Harga</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php $no= 1; foreach($produk as $p) : ?>
            <tr>
            <th scope="row"><?= $no++ ?></th>
            <td><?= $p['nama_produk'] ?></td>
            <td><?= $p['keterangan'] ?></td>
            <td><?= number_format($p['harga']) ?></td>
            <td><?= $p['jumlah'] ?></td>
            <td>
                <a href="#modalEdit<?= $p['id'] ?>" data-toggle="modal" class="btn btn-warning">Edit</a>
                <a href="#modalHapus<?= $p['id'] ?>" data-toggle="modal" class="btn btn-danger">Hapus</a>
            </td>
            </tr>
        <?php endforeach ?>
        </tbody>
        </table>

    </div>


    <!-- Modal Tambah -->
<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('app/tambahData') ?>" method="POST">
            <div class="form-group">
                <label for="namaProduk">Nama Produk</label>
                <input type="text" name="namaProduk" class="form-control" id="namaProduk" aria-describedby="emailHelp" placeholder="Nama produk...">
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan...">
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga" placeholder="harga...">
            </div>
            <div class="form-group">
                <label for="jumlah">Jumlah</label>
                <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="jumlah...">
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>


 <!-- Modal update -->
 <?php foreach($produk as $pr) : ?>
<div class="modal fade" id="modalEdit<?= $pr['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data Produk <?= $pr['nama_produk'] ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('app/updateData') ?>" method="POST">
        <input type="hidden" name="id" value="<?= $pr['id'] ?>"></i>
            <div class="form-group">
                <label for="namaProduk">Nama Produk</label>
                <input type="text" name="namaProduk" class="form-control" id="namaProduk" aria-describedby="emailHelp" placeholder="Nama produk..." value="<?= $pr['nama_produk'] ?>">
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan..." value="<?= $pr['keterangan'] ?>">
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga" placeholder="harga..." value="<?= $pr['harga'] ?>">
            </div>
            <div class="form-group">
                <label for="jumlah">Jumlah</label>
                <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="jumlah..." value="<?= $pr['jumlah'] ?>">
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
      </form>
    </div>
  </div>
</div>
<?php endforeach ?>



<!-- Modal update -->
 <?php foreach($produk as $pr) : ?>
<div class="modal fade" id="modalHapus<?= $pr['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus Data Produk <?= $pr['nama_produk'] ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?= base_url('app/hapusdata/') ?><?= $pr['id'] ?>" method="POST">
            <h5>Apakah Anda Yakin Menghapus Produk Ini..?</h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger">Hapus</button>
      </div>
      </form>
    </div>
  </div>
</div>
<?php endforeach ?>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>