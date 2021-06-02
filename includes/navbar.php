<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="success.php">Reservasi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="menu.php">Cek menu kami di sini</a>
        </li>
      </ul>
      <div class="d-flex">
        <li class="email"><span><?php echo ($_SESSION['email']);?></span></li>
        &nbsp;&nbsp;
        <form method="get" action="logout.php">
          <button class="btn btn btn-warning" type="submit">LOGOUT</button>
        </form>
      </div>
    </div>
  </div>
</nav>