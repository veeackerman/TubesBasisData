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
    <?php 
            $title = 'Table Reservation'; 
            require_once 'db/conn.php';
            $results = $crud->getBook();
            ?>
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

                    <h4 class="text-center fw-bold">RESERVASI</h4>
                    <br>
						<table class="table">
							<tr>
								<th>Nama Pemesanan</th>
								<th>Tanggal Reservasi</th>
								<th>Dari</th>
								<th>Sampai</th>
                                <th>Id meja</th>
							</tr>
							<?php while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
							   <tr>
									<td><?php echo $r['namapemesan'] ?></td>
									<td><?php echo $r['tanggalreservasi'] ?></td>
									<td><?php echo $r['dari'] ?></td>
                                    <td><?php echo $r['sampai'] ?></td>
                                    <td><?php echo $r['idmeja'] ?></td>
							   </tr> 
							<?php }?>
						</table>
					</div>
				</div>
			</div>
			</div>
		</div>

    <div class="col-xs">
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