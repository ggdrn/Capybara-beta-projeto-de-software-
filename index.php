<?php
  session_start();
  require('engine/validardados.php');
  if(isLogged()){
    echo "Ola ";
    echo $_SESSION['name'];
    }else{
      header('location: ./login.php');
    }
