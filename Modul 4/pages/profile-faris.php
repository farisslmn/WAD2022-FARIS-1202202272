    <?php
    session_start();
    require '../config/connector.php';

    if(isset($_SESSION['login'])){
      $idprofile = $_SESSION["id"];
      $dataUser = profile($_SESSION['id'])[0];
    }
    ?>

    <!doctype html>
    <html lang="en">

    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

      <!-- My Css -->
      <link rel="stylesheet" href="../styles/index.css">

      <title>Home</title>
    </head>


    <body>

      <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary py-3">
          <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" href="Home-faris.php">Home</a>
                </li>
                <?php if (isset($_SESSION['login'])) : ?>
                  <li class="nav-item">
                    <a class="nav-link" href="listCar-faris.php">MyCar</a>
                  </li>
                <?php endif; ?>
              </ul>
            </div>

            <?php if (!isset($_SESSION['login'])) : ?>
              <a href="login-faris.php" class="text-white text-decoration-none">Login</a>

            <?php else : ?>
              <div class="d-flex gap-4">
                <a href="add-faris.php" class="btn btn-light">add car</a>
                <div class="dropdown">
                  <a class="btn btn-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <?=$dataUser['nama']?>
                  </a>

                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="profile-faris.php">Profile</a></li>
                    <li><a class="dropdown-item" href="../config/logout.php">Logout</a></li>
                  </ul>
                </div>
              </div>
            <?php endif; ?>
          </div>
        </nav>
      </header>
      <main>
        <div class="container mt-5">
          <div class="judul">
            <h3>Profil</h3>
          
          </div>
      <main>
        <div class="container mt-5">
          <div class="header">
            <div class="col-lg-6 align-self-center">
            </div>
            </div>
                <div class="row">
                <div class="col-lg-6">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="email" class="form-label">email</label>
                        <input type="text" class="form-control" id="email" name="email" value="<?= $data['email_pemilik'] ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="pemiliki" class="form-label">Nama Pemilik</label>
                        <input type="text" class="form-control" id="pemilik" name="pemilik" value="<?= $data['pemilik_mobil'] ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="merk" class="form-label">Merk</label>
                        <input type="text" class="form-control" id="merk" name="merk" value="<?= $data['merk_mobil'] ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal Beli</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= $data['tanggal_beli'] ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?= $data['deskripsi'] ?>" readonly>
                    </div>
                    <div class = "mb-3 d-flex flex-column">
                      <label for="foto" class="form-label">foto</label>
                      <span class='d-flex'>
                        <button class="btn btn-secondary" style="width: 10pc;">
                          Choose File
                        </button>
                        <input type="text" class="form-control" id="foto" name="foto" value="" disabled>
                      </span>
                    </div>

                    <a href="./edit-faris.php?id=<?= $data['id_mobil'] ?>" class="btn btn-primary" name="submit">Update</a>
                </form>
              </div>
            </div>
          </div>
        </div>
      </main>
    </body>