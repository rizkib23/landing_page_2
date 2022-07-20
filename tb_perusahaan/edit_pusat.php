<?php 
  
  include('../konek.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM tb_perusahaan WHERE id_perusahaan = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>EDIT DATA PERUSAHAAN</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header text-center">
              EDIT DATA PERUSAHAAN
            </div>
            <div class="card-body">
              <form action="update_pusat.php" method="POST">

                <div class="form-group">
                  <label>Nama</label>
                  <input required type="text" name="nama_pusat" value="<?php echo $row['nama_pusat'] ?>"  class="form-control">
                  <input type="hidden" name="id_perusahaan" value="<?php echo $row['id_perusahaan'] ?>">
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <input required type="text" name="alamat" value="<?php echo $row['alamat'] ?>" class="form-control">
                </div>

                <div class="form-group">
                  <label>No HP</label>
                  <input required type="bigint" name="no_hp" value="<?php echo $row['no_hp'] ?>" class="form-control">
                </div>

                <div class="form-group">
                  <label>Email</label>
                  <input required type="email" name="email" value="<?php echo $row['email'] ?>" class="form-control">
                </div>

                <div class="form-group">
                  <label>Tanggal Berdiri</label>
                  <input required type="date" name="tanggal_berdiri" value="<?php echo $row['tanggal_berdiri'] ?>" class="form-control">
                </div>


                <div class="form-group">
                  <label>NpWp</label>
                  <input required type="text" name="npwp" value="<?php echo $row['npwp'] ?>" class="form-control">
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