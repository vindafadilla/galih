<?php
  session_start();

  include "bootstrap/koneksi/koneksi.php";
?>

<html>
  <head>
    <title></title>
    <link rel = "stylesheet" href ="bootstrap/css/bootstrap.min.css" type = "text/css">
    <link rel = "stylesheet" href ="bootstrap/css/bootstrap-theme.min.css" type = "text/css">
    <link rel = "stylesheet" href ="bootstrap/css/style.css" type = "text/css">

    <script src="bootstrap/js/jquery-1.12.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </head>
   
  <body>
      <div class="panel-panel-default">
          <div class="page-header">
          <center><h1>  Doraemon <small>shop</small></h1> </center>
          </div>
            <div class="panel-body">
              <div class="container">
                <nav class="navbar navbar-inverse">
                  <div class="container-fluid">
                    <ul class="nav navbar-nav">
                      <li ><a href="home.php">HOME</a></li>
                      <li ><a href="index.php?hal=1">Daftar Barang</a></li>
                      <li><a href="shopping_list.php">Shopping List</a></li>  
                    </ul>
                    <form class="navbar-form navbar-right" role="search">
                      <div class="form-group">
                      <input type="text" class="form-control" placeholder="Cari Barang">
                      </div>
                      <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                    </form>
                  </div>
                </nav>
              </div>
            </div>
      </div>
            
            <div class="container">           
                  <table class="table table-hover" id="tabel">
                    <thead>
                          <tr>
                            <th></th>
                            <th>Nama Barang</th>
                            <th>Harga</th>
                            <th>Jumlah Beli</th>
                            <th>Total Harga Beli</th>
                            <th>Aksi</th>
                          </tr>
                    </thead>
                    <tbody>
                    <?php
                      for ($i=0; $i < count($_SESSION['barang']) ; $i++) { 
                      ?>
                      
                        <tr>
                            <td></td>
                            <td><?php echo $_SESSION['barang'][$i]['namaBarang']; ?></td>
                            <td>Rp. <?php echo $_SESSION['barang'][$i]['hargaBarang']; ?></td>
                            <td><?php echo $_SESSION['barang'][$i]['jumlahBeli']; ?></td>
                            <td>Rp. <?php echo $_SESSION['barang'][$i]['totalHargaBeli']; ?></td>
                            <td><a href="detele.php?id=<?php echo $_SESSION['barang'][$i]['id']; ?>">
                            <button type="button" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a></td>
                        </tr>
            <?php
            }
            ?>
                    </tbody>
                </tbody>
              </table>
              <center>
              <a href="index.php?hal=1"><button  type="submit" class="btn btn-danger">
              <span aria-hidden="true"></span>Back</button>
              </center>
              </div>
    </body>
</html>
