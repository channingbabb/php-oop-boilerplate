<?php
  if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == "xmlhttprequest") {
    
    include '../class/main.class.php';

    $main = new main;

    if (isset($_POST['test'])) {
      echo $main->test($_POST['test']);
    }
}
