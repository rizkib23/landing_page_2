<?php 
  
  include('../konek.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM tb_cabang WHERE id_cabang = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>EDIT CABANG</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT DATA CABANG
            </div>
            <div class="card-body">
              <form action="update_cb.php" method="POST">

              <div class="form-group">
                  <label>id Persahaan</label>
                    <?php
                      include '../konek.php';
                     
                      $sql= "SELECT * FROM tb_perusahaan";
                      $query=mysqli_query($connection,$sql); 
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
                  <input required type="text" name="nama_cb" value="<?php echo $row['nama_cb'] ?>"  class="form-control">
                  <input type="hidden" name="id_cabang" value="<?php echo $row['id_cabang'] ?>">
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <input required type="text" name="alamat" value="<?php echo $row['alamat'] ?>" class="form-control">
                </div>

                <div class="form-group">
                  <label>No Hp</label>
                  <input required type="bigint" name="no_tlp" value="<?php echo $row['no_tlp'] ?>" class="form-control">
                </div> 
                
                <div class="form-group">
                  <label>email</label>
                  <input required type="email" name="email" value="<?php echo $row['email'] ?>" class="form-control">
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