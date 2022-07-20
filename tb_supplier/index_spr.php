<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSS -->
    <link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <!--  -->
    <title>DATA SUPPLIER</title>
  </head>

  <body id="top">
  <div class="padtop bc1">
  <header id="header" class="hoc clear">
    <div id="logo" class="fl_left"> 
      <h1>Indomaret</h1>
    </div>
    <!-- nav bar -->
    <nav id="mainav" class="fl_right"> 
      <ul class="clear">
        <li class="active"><a href="../index.php">Home</a></li>
        <li><a class="drop" href="#">Pages</a>
        <ul>
            <li><a href="../tb_kategori/index_ktgr.php">Kategori</a></li>
            <li><a href="../tb_supplier/index_spr.php">Supplier</a></li>
            <li><a href="../tb_brg/index_brg.php">Barang</a></li>
            <li><a href="../tb_perusahaan/index_pusat.php">Data Perusahaan</a></li>
            <li><a href="../tb_cabang/index_cb.php">Cabang</a></li>
            <li><a href="../tb_pembayara/index_pay.php">Metode Pembayan</a></li>
            <li><a href="../tb_member/index_mem.php">Member</a></li>
            <li><a href="../tb_kasir/index_ksr.php">Kasir</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>
<!-- isi -->
    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header text-center">
              DATA SUPPLIER
            </div>
            <div class="card-body">
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nama</th>
                    <th scope="col">No Hp</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No Rekening</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      include('../konek.php');
                      $no = 1;
                      $query = mysqli_query($connection,"SELECT * FROM tb_supplier");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['nama_supplier'] ?></td>
                      <td><?php echo $row['hp'] ?></td>
                      <td><?php echo $row['alamat'] ?></td>
                      <td><?php echo $row['no_rekening'] ?></td>
                      <td class="text-center">
                        <a href="edit_spr.php?id=<?php echo $row['id_supplier'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="hapus_spr.php?id=<?php echo $row['id_supplier'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                  </tr>

                <?php } ?>
                </tbody>
              </table>
              <a href="home_spr.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
            </div>
          </div>
      </div>
    </div>
    </div>


    <!-- JS -->
    <script src="../layout/scripts/jquery.min.js"></script>
    <script src="../layout/scripts/jquery.backtotop.js"></script>
    <script src="../layout/scripts/jquery.mobilemenu.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>
    <!--  -->
  </body>
</html>