
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Tambahkan Barang</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header text-center">
              TAMBAH BARANG

            </div>
            <div class="card-body">
              <form action="koneksi_brg.php" method="POST">

              <div class="form-group">
                  <label>id Kategori</label>
                    <?php
                      include '../konek.php';
                     
                      $query = mysqli_query($connection,"SELECT * FROM tb_kategori"); 
                      $a=" ( ";
                      $b=" ) ";
                    ?>
                      <select name="id_kategori" class="form-control">
                        <?php while($row=mysqli_fetch_array($query)){?>
                          <option></option>
                        <option value= "<?php echo $row['id_kategori']?>"><?php echo $row['id_kategori'].$a.$row['nama_ktgr'].$b;?></option>
                        <?php }   ?>
                      </select>
              </div>


                  <div class="form-group">
                    <label>id Supplier</label>
                    <?php
                          include '../konek.php';
                        
                          $query = mysqli_query($connection,"SELECT * FROM tb_supplier"); 
                          $a=" ( ";
                          $b=" ) ";?>
                      <select name="id_supplier" class="form-control">
                        <?php while($row=mysqli_fetch_array($query)){?>
                          <option></option>
                        <option value= "<?php echo $row['id_supplier']?>"><?php echo $row['id_supplier'].$a.$row['nama_supplier'].$b;?></option>
                        <?php }   ?>
                      </select>
                  </div>
                
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" class="form-control">
                </div>

                <div class="form-group">
                  <label>Stok</label>
                  <input required type="text" name="stok" class="form-control">
                </div>

                <div class="form-group">
                  <label>Harga modal</label>
                  <input required type="text" name="harga_modal" class="form-control">
                </div>

                <div class="form-group">
                  <label>Harga jual</label>
                  <input required type="text" name="harga_jual" class="form-control">
                </div>

                <div class="form-group">
                  <label>Tanggal masuk</label>
                  <input required type="date" name="tanggal_masuk" class="form-control">
                </div>
                
                
                <button type="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.js"></script>
  </body>
</html>