<?php 
  $title = 'BOOK';
  require_once 'includes/header.php';
  require_once 'db/conn.php';
  if(isset($_POST['reservasi'])){
      $namapemesan=$_POST['namapemesan'];
      $tanggalreservasi=$_POST['tanggalreservasi'];
      $dari=$_POST['dari'];
      $sampai=$_POST['sampai'];
      $idmeja=$_POST['idmeja'];
      $pesantambahan=$_POST['pesantambahan'];
      //Memanggil fungsi//
      
      $sql = $pdo->prepare("SELECT * FROM `reservasi` WHERE `dari`>=:c AND `sampai`<=:d AND `tanggalreservasi`=:e");
      $sql->bindParam(':c', $dari);
      $sql->bindParam(':d', $sampai);
      $sql->bindParam(':e', $tanggalreservasi);
      $sql->execute();
      $data = $sql->fetch();

      if(empty($data)){
      $isbooked=$crud->insertreservasi($namapemesan, $tanggalreservasi, $dari, $sampai, $idmeja, $pesantambahan);
        if($isbooked){
              echo '<h2>Pesanan dikirim</h2>';
        }
        else{
              echo '<h2>Gagal memuat</h2>';
        }
        }
      else{
            echo '<h2>Meja digunakan</h2>';
        }
  }

?>

<form method="get" action="success.php">
<button type="signup" class="btn btn-link mb-5 p-3">kembali</button>
</form>

<?php require_once 'includes/footer.php';?>
