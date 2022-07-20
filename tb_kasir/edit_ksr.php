<?php 
  
  include('../konek.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM tb_kasir WHERE id_kasir = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>EDIT KASIR</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header text-center">
              EDIT DATA PETUGAS KASIR
            </div>
            <div class="card-body">
              <form action="update_ksr.php" method="POST">

              <div class="form-group">
                  <label>Nama Cabang</label>
                    <?php
                      include '../konek.php';
                     
                      $sql= "SELECT * FROM tb_cabang";
                      $query=mysqli_query($connection,$sql); 
                      $a=" ( ";
                      $b=" ) ";
                    ?>
                      <select required name="id_cabang" class="form-control">
                        <?php while($row1=mysqli_fetch_array($query)){?>
                        <option value= "<?php echo $row1['id_cabang']?>"><?php echo $row1['id_cabang'].$a.$row1['nama_cb'].$b;?></option>
                        <?php }   ?>
                      </select>
              </div>

                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" required name="nama_ksr" value="<?php echo $row['nama_ksr'] ?>"  class="form-control">
                  <input type="hidden" name="id_kasir" value="<?php echo $row['id_kasir'] ?>">
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <input required type="text" name="alamat" value="<?php echo $row['alamat'] ?>"  class="form-control">
                </div>


                <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <div class="form-control">
                  <input type="radio" name="jenis_kelamin" value="laki-laki" value="<?php echo $row['jenis_kelamin'] ?>">
                  <label for="laki-laki">Laki-laki</label>
                  <input type="radio" name="jenis_kelamin" value="perempuan" value="<?php echo $row['jenis_kelamin'] ?>">
                  <label for="perempuan">Perempuan</label>
                  </div>
                </div>

                <div class="form-group">
                  <label>No HP</label>
                  <input type="bigint" required name="no_hp" value="<?php echo $row['no_hp'] ?>"  class="form-control">
                </div>

                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="../js/bootstrap.js"></script>
    <script src="../js/jquery.min.js"></script>
  </body>
</html>