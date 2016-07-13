<?php
  session_start();

  $id = $_GET['id '];
  $query = @mysql_query("SELECT * FROM shoppingcart WHERE id_barang='$id'");
  $data = mysql_fetch_array($query);

  for($i = 0; $i < count($_SESSION['barang']); $i++)
  {
  	if($_SESSION['barang'][$i]['id'] == $id)
  	{
  		unset($_SESSION['barang'][$i]);
  		break;
  	}
  }
  header("location:shopping_list2.php");
  ?>