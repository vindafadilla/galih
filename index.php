<?php
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

    <?php 
      $perpage = 5;
      $batas = ($_GET['hal']-1)*$perpage;
      $batas = ($batas<0) ? 0 : $batas;

      $query = @mysql_query("SELECT * FROM shoppingcart ORDER BY id_barang ASC limit $batas, $perpage");
      $qry2 = @mysql_query("SELECT * FROM shoppingcart");
      $jumlah = mysql_num_rows($qry2);

      if($jumlah < $perpage)
      {
        $page = 1;
      }
      else
      {
        $page = ceil($jumlah/$perpage);
      }

    ?>
   
  <body>

      <div class="panel-panel-default">
          <div class="page-header">
          <h1> <center> Doraemon <small>shop</small> </center></h1>
          </div>
            <div class="panel-body">
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
     

      <table class="table table-hover" id="tabel">
        <thead>
        
          <tr>
            <th>Gambar</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Beli</th>
          </tr>

          <?php
          $sql = mysql_query("SELECT * FROM shoppingcart limit $batas, $perpage");
          while(($result = mysql_fetch_array($sql))){
            ?>
          <tr>
            <td><img src="img/<?php echo $result['foto']; ?>" class="img-responsive" alt="Cinque Terre" width="104" height="36"></td>
            <td><?php echo $result['nama_barang']; ?></td>
            <td>Rp.<?php echo $result['harga']; ?></td>
            <td><?php echo $result['stok']; ?></td>
            <td><a href="shopping_list.php?id_barang=<?php echo $result['id_barang']; ?>"> <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> </td>
          </tr>
          <?php 
            }
          ?>
        </thead>
    
      </table>

      <center>
      <ul class="pagination">
        <?php
          $hal = $_GET['hal'];
          $prev = $_GET['hal'] - 1;
          $next = $_GET['hal'] + 1;
          if($hal != 1)
          {
            echo "<li class='non'><a href = 'index.php?hal=$prev'> << </a></li>";
          }
          else
          {
            echo "<li class='aktif'> << </li>";
          }

          for($pg=1; $pg<=$page; $pg++)
          {
            if($pg == $hal)
            {
              echo " <li class='aktif'> $pg </li>";
            }
            else 
            {
              echo "<li class='non'><a href = 'index.php?hal=$pg'> $pg </a></li>";
            }
          }

          if($hal != $page && $hal <= $page)
          {
            echo "<li class='non'><a href = 'index.php?hal=$next'> >> </a></li>";
          }
          else
          {
            echo "<li class='aktif'> >> </li>";
          }

        ?>
        </ul>
      </center>
  </body>

</html>
