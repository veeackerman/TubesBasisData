<?php 
  $title = 'Table Reservation';
  require_once 'includes/header.php';

?>

<br><br>
<h1 class="text-center fw-bold bayanganteks">SIGN UP</h1>

<div class="container p-5">
  <div class="row">
    <div class="col-sm"></div>
    <div class="p-2 col">   
    <div class="bg-dark text-white gradient bayangan rcorners1">   
        <div class="container">
            <div class="row">
            <div class="col">
            <form method="post" action="terdaftar.php">
                <label for="namadepan" class="form-label">Nama depan</label>
                <input name="namadepan" class="form-control mb-3" type="text" aria-label="default input example">

                <label for="namabelakang" class="form-label">Nama belakang</label>
                <input name="namabelakang" class="form-control mb-3" type="text" aria-label="default input example">

                <label for="email" class="form-label">Email</label>
                <input name="email" class="form-control mb-3" type="email" placeholder="example@example.com" aria-label="default input example">

                <label for="nomorhp" class="form-label">Nomor hp</label>
                <input name="nomorhp" class="form-control mb-3" type="tel" placeholder="08XX XXXX XXXX" aria-label="default input example">
            
                <label for="password" class="form-label">Password</label>
                <input name="password" class="form-control mb-4" type="password" aria-label="default input example"> 
                
                <div class="mb-1 d-grid gap-2 mx-auto">
                    <button name="daftar" type="submit" class="btn btn btn-warning">Daftar</button>
                </div>
            </form>

            </div>
            </div>
        </div>
    </div>
    </div>
    <div class="col-sm"></div>
  </div>
</div>

<?php require_once 'includes/footer.php';?>
