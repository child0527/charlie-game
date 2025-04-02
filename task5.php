<?php
  session_start();
  include "includes/init_db.php";
  $mysqli = new init_db;
  $select_user_data = $mysqli->select("users" , "id='".$_SESSION['user']."' AND task5='0'"," ORDER by id DESC LIMIT 1") or die('Error DB');
  $result_mysqli = $select_user_data->fetch_object();       
  if($result_mysqli->id>0){
        $select = $mysqli->update("users" , "task5=1","id='".$_SESSION['user']."'") or die('Error DB');
        $select = $mysqli->update("users" , "balance_chrle=balance_chrle+1000","id='".$_SESSION['user']."'") or die('Error DB');
        echo '<meta http-equiv="refresh" content="0; url=/missions/">';
        echo '<script src="https://telegram.org/js/telegram-web-app.js"></script> <script>Telegram.WebApp.openLink("https://charlietheunicoin.sale/");</script>';
  }else{ 
      header("location: /");
  }
 // header("location: /");
?>