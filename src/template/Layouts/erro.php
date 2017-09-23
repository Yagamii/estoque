<?php
  if(MsgHandler::getError()){
    foreach(MsgHandler::getError() as $erro){
      echo '<div class="alert alert-danger" role="alert">'.$erro.'</div>';
    }
  }elseif(MsgHandler::getSucess()){
    foreach(MsgHandler::getSucess() as $sucess){
      echo '<div class="alert alert-success" role="alert">'.$sucess.'</div>';
    }
  }
?>
