<?php
  function campovazio($data){
    if($data == "" || $data == null){
        return true;
    } else {
      echo "<script> alert('Campo e-mail ou senha vazio');window.location.href='./login.php'</script>";
      return false;
    }
}
?>
