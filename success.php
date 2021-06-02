<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
<!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/site.css">
    <title><?php 
            $title = 'Table Reservation'; 
            echo $title ?></title>
  </head>
  <body>
<!-- //////////////////BODY/////////////////// -->

<?php 
  require_once 'includes/sessioncheck.php'; 
  require_once 'includes/navbar.php'; 
?>

<div class="banner2 bayangan"></div>
<div class="p-3 hehe bg-dark">
<div class="container">
  <div class="row">
    <div class="col-xs">
    </div>
    <div class="p-5 col">   
    <div class="p-5 mb-2 putih text-dark gradient bayangan rcorners1">   
        <div class="container">
            <div class="row">

            <div class="col">
              <form method="post" action="book.php">
                <label for="namapemesan" class="form-label">Nama pemesan</label>
                <input name="namapemesan" class="form-control mb-3" type="input" aria-label="default input example">
            
                <label for="tanggalreservasi" class="form-label">Tanggal reservasi</label>
                <input name="tanggalreservasi" class="form-control mb-3" type="date" aria-label="default input example">

                <label for="dari" class="form-label">Dari</label>
                <input name="dari" class="form-control mb-3" type="time" aria-label="default input example">

                <label for="sampai" class="form-label">Sampai</label>
                <input name="sampai" class="form-control" type="time" aria-label="default input example">
                <label class="text-danger">*</label>(Available: 09.00 AM - 22.00 PM)
                <div class="mb-3"></div>

                <label for="idmeja" class="form-label">No meja</label>
                <select name="idmeja" class="form-select" aria-label="Default select example">
                    <option selected>No meja</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
                <label class="text-danger">*</label>(1 meja berkapasitas 4 tamu)
              <div class="mb-3"></div>
                
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="tambahan" class="form-label">Pesan Tambahan</label>
                    <textarea name="pesantambahan" class="form-control" id="tambahan" rows="11"></textarea>
                </div>
                <div class="mb-1 d-grid gap-2 mx-auto">
                    <button name="reservasi" type="submit" class="btn btn btn-dark mb-1">Book</button>
                </div>
              </form>
              <form method="get" action="ketersediaan.php">
                <div class="mb-1 d-grid gap-2 mx-auto">
                    <button type="submit" class="btn btn btn-warning">Cek Ketersediaan Meja</button>
                </div>
              </form>

            </div>
            </div>
        </div>
    </div>
    </div>
    <div class="col-xs">
    </div>
  </div>
</div>
</div>
    <div class="p-3 mb-2 text-center bg-dark text-white">
    <div id="footer">
        <?php echo 'created by kelompok 1';?>
    </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>