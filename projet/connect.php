<?php
  $connect = mysqli_connect("gamamdkinfinity.mysql.db", "gamamdkinfinity", "RootInfinityKey1", "gamamdkinfinity");

  if(!$connect){
    echo "Echec de connection : ".mysqli_connect_error();
    exit();
  }

  $connect -> set_charset("utf8mb4");
?>