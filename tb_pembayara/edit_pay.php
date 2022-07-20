<?php 
  
  include('../konek.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM tb_metode_pembayaran WHERE id_metode_pembayaran = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>METHOD PEMBAYARAN</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header text-center">
              EDIT METHOD PEMBAYARAN
            </div>
            <div class="card-body">
              <form action="update_pay.php" method="POST">

                <div class="form-group">
                  <label>Nama</label>
                  <input required type="text" name="nama_pay" required value="<?php echo $row['nama_pay'] ?>"  class="form-control">
                  <input type="hidden" name="id_metode_pembayaran" value="<?php echo $row['id_metode_pembayaran'] ?>">
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