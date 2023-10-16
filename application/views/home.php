<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Tes Junior Programmer</title>

    <style>
        .margin{
            margin: 10px 10px;
        }
    </style>

</head>
<body>
    <h2 class="text-center">Inventory Table</h2>

    <div class="margin">
    <button type="button" class="btn btn-primary" onclick="document.location.href='<?php echo base_url('controller_produk/input')?>'">Tambah Data</button>
    <button type="button" class="btn btn-primary" onclick="document.location.href='<?php echo base_url('controller_produk/allData')?>'">Semua Data</button>
    </div>

    <div class="margin">
    <table class="table table-bordered">
        <tr class="text-center">
            <td>No</td>
            <td>Id Produk</td>
            <td>Nama Produk</td>
            <td>Harga</td>
            <td>Kategori</td>
            <td>Status</td>
            <td colspan="2">Aksi</td>
        </tr>
        <?php 
        $count = 0;
        foreach($data_produk as $row){
            $count += 1;
        
        ?>
        <tr>
            <td><?php echo $row->no ?></td>
            <td><?php echo $row->id_produk ?></td>
            <td><?php echo $row->nama_produk ?></td>
            <td><?php echo $row->harga ?></td>
            <td><?php echo $row->category_name ?></td>
            <td><?php echo $row->status_name ?></td>
            <td>
            <div class="alert alert-primary" role="alert">
            <a href="<?php echo base_url('controller_produk/edit/') . $row->id_produk?>">Edit</a>
            </div>
            </td>
            <td>
            <div class="alert alert-danger" role="alert">
            <a href="<?php echo base_url('controller_produk/DeleteData/')  . $row->id_produk?>" onclick="return confirm('Yakin Hapus Data?')">Delete</a></td>
            </div>
            </td>
        </tr>
            <?php } ?>
    </table>
        </div>
</body>
</html>