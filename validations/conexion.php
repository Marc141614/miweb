<?php

  $server = "localhost";
  $userDB = "root";
  $passDB = "";
  $db = "MDB";

  $con = mysqli_connect($server,$userDB,$passDB,$db) or die ("Error al conectar a la base de datos".mysqli_error());

?>