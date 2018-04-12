<?php
  function setdata($data){
    if($data == "" || $data == null){
        return true;
    } else {
      //echo "<script> alert('Campo e-mail ou senha vazio');window.location.href='./login.php'</script>";
      return false;
    }
}

?>
