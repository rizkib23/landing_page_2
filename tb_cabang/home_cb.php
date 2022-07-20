
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
            <div class="card-header">
              TAMBAH CABANG

            </div>
            <div class="card-body">
              <form action="koneksi_cb.php" method="POST">

                <div class="form-group">
                    <label>id Perusahaan</label>
                      <?php
                        include '../konek.php';
                      
                        $query = mysqli_query($connection,"SELECT * FROM tb_perusahaan"); 
                        $a=" ( ";
                        $b=" ) ";
                      ?>
                        <select required name="id_perusahaan" class="form-control">
                          <?php while($row1=mysqli_fetch_array($query)){?>
                          <option></option>
                          <option value= "<?php echo $row1['id_perusahaan']?>"><?php echo $row1['id_perusahaan'].$a.$row1['nama_pusat'].$b;?></option>
                          <?php }   ?>
                        </select>
                </div>
                
                <div class="form-group">
                  <label>Nama</label>
                  <input required type="text" name="nama_cb" class="form-control">
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <input required type="text" name="alamat" class="form-control">
                </div>

                <div class="form-group">
                  <label>No Hp</label>
                  <input required type="bigint" name="no_tlp" class="form-control">
                </div>

                <div class="form-group">
                  <label>Email</label>
                  <input required type="email" name="email" class="form-control">
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