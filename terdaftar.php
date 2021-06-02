<?php 
  $title = 'terdaftar';
  require_once 'includes/header.php';
  require_once 'db/conn.php';
  if(isset($_POST['daftar'])){
      $namadepan=$_POST['namadepan'];
      $namabelakang=$_POST['namabelakang'];
      $email=$_POST['email'];
      $nomorhp=$_POST['nomorhp'];
      $password=$_POST['password'];
      //Memanggil fungsi//
      
      $sql = $pdo->prepare("SELECT * FROM users WHERE email=:a");
      $sql->bindParam(':a', $email);
      $sql->execute();
      $data = $sql->fetch();

      if(empty($data)){
      $isterdaftar=$crud->insertdaftar($namadepan, $namabelakang, $email, $nomorhp, $password);
        if($isterdaftar){
              echo '<h2>Berhasil!</h2>';
        }
        else{
              echo '<h2>Gagal memuat</h2>';
        }
        }
      else{
            echo '<h2>Email telah digunakan</h2>';
        }
  }

?>

<form method="get" action="success.php">
<button type="signup" class="btn btn-link mb-5 p-3">Masuk</button>
</form>

<?php require_once 'includes/footer.php';?>
