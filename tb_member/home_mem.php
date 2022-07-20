
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Tambahkan Data Member</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header text-center">
              TAMBAH DATA MEMBER

            </div>
            <div class="card-body">
              <form action="koneksi_mem.php" method="POST">
                
              <div class="form-group">
                  <label>Nama</label>
                  <input required type="text" name="nama"  class="form-control">
                </div>

                <div class="form-group">
                  <label>No HP</label>
                  <input required type="bigint" required name="no_hp" class="form-control">
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <input required type="text" name="alamat" class="form-control">
                </div>

                <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <div class="form-control">
                  <input type="radio" name="jenis_kelamin" value="laki-laki">
                  <label for="laki-laki">Laki-laki</label>
                  <input type="radio" name="jenis_kelamin" value="perempuan">
                  <label for="perempuan">Perempuan</label>
                  </div>
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