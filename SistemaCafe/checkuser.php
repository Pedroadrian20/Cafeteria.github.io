<?php // Example 26-6: checkuser.php
  require_once 'functions.php'; 

  if (isset($_POST['user']))
  {
    $user = sanitizeString($_POST['user']);
    $result = queryMysql("SELECT * FROM members WHERE user='$user'");

    if ($result->num_rows)
      echo "<span class='taken'>&nbsp;&#x2718; ".
          "El nombre de usuario '$user' ya esta usado</span>";
    else
      echo "<span class='available'>&nbsp;&#x2714; " .
          "El nombre de usuario '$user' esta disponible</span>";
  }

  //checkuser.php que busca un nombre de usuario en los datos y devuelve una cadena que indica si ya se ha tomado. Con las funciones sanitizeString y queryMysql.
?>