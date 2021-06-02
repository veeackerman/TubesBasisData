<?php 
  $title = 'Table Reservation';
  require_once 'includes/header.php';
?>

  <div class="p-3 mb-2 bg-transparent text-white">
    <h1 class="text-center fw-bold bayanganteks">TABLE RESERVATION </h1>
  </div>
  <br>
  <br>

    <div class="container">
    <div class="row">
      <div class="col-sm">
          </div>
        <div class="col-sm">
          <div class="p-4 mb-2 bg-dark text-white gradient bayangan rcorners1">
                <form method="POST" action="user.php">
                <div class="login_form">
            <div class="mb-3">
                <label for="email" class="form-label">Alamat email</label>
                <input name="email" type="email" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input name="password" type="password" class="form-control">
                  <?php
                   // Cek apakah terdapat cookie dengan nama message
                       if(isset($_COOKIE["message"])){ // Jika ada
                       echo $_COOKIE["message"]; // Tampilkan pesannya
                       }
                  ?>
            </div>
            <div class="text-white">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Ingat saya</label>
            </div>
            <div class="mb-1 d-grid gap-2 col-4 mx-auto">
                <button id="masuk" type="submit" class="btn btn-warning">Masuk</button>
            </div>
            </form>
          </div>
          </div>
          </div>
      <div class="col-sm">
        </div>
  </div>
<form method="get" action="daftar.php">
</div>
<button type="signup" class="btn btn-link text-white">Daftar</button>
</div>
</form>
<?php require_once 'includes/footer.php';?>
