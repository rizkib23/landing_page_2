<?php 
  
  include('../konek.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM tb_supplier WHERE id_supplier = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>EDIT DATA SUPPLIER</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header text-center">
              EDIT DATA SUPPLIER
            </div>
            <div class="card-body">
              <form action="update_spr.php" method="POST">

                <div class="form-group">
                  <label>Nama</label>
                  <input required type="text" name="nama_supplier" value="<?php echo $row['nama_supplier'] ?>"  class="form-control">
                  <input type="hidden" name="id_supplier" value="<?php echo $row['id_supplier'] ?>">
                </div>

                <div class="form-group">
                  <label>No HP</label>
                  <input required type="bigint" name="hp" value="<?php echo $row['hp'] ?>" class="form-control">
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <input required type="text" name="alamat" value="<?php echo $row['alamat'] ?>" class="form-control">
                </div>

                <div class="form-group">
                  <label>No Rekening</label>
                  <input required type="bigint" name="no_rekening" value="<?php echo $row['no_rekening'] ?>" class="form-control">
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