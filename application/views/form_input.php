<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Form Input Data</title>

    <style>
        .margin{
            margin: 30px 30px;
        }
    </style>
</head>
<body>
    <h3 class="text-center">Form Input Data</h3>

    <div class="margin">
   <tabel>
   <form action ="<?php echo base_url('controller_produk/InsertData')?>" method='post'>
  <div class="form-group">
    <label for="no">No</label>
    <input type="number" class="form-control" required name="no">
  </div>
  <div class="form-group">
    <label for="id_produk">Id Produk</label>
    <input type="number" class="form-control" required name="id_produk">
  </div>
  <div class="form-group">
    <label for="nama_produk">Nama Produk</label>
    <input type="text" class="form-control" required name="nama_produk">
  </div>
  <div class="form-group">
    <label for="harga">Harga</label>
    <input type="number" class="form-control" required name="harga">
  </div>
  <div class="form-group">
    <label for="kategori_id">kategori</label>
    <select class="form-control" req name="kategori_id">
       <option value="1">L QUEENLY</option>
       <option value="2">L MTH AKSESORIS (IM)</option>
       <option value="3">L MTH TABUNG (LK)</option>
       <option value="4">SP MTH SPAREPART (LK)</option>
       <option value="5">CI MTH TINTA LAIN (IM)</option>
       <option value="6">S MTH STEMPEL (IM)</option>
       <option value="7">L MTH AKSESORIS (LK)</option> 
    </select>
  </div>
  <div class="form-group">
    <label for="status_id">Status</label>
    <select class="form-control" req name="status_id">
       <option value="1">Bisa dijual</option>
       <option value="2">Tidak Bisa Dijual</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </table>
</div>
</body>
</html>