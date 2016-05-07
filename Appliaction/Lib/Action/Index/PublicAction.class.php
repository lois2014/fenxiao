<?php

class PublicAction extends Action{
      function _initialize(){
         // print_r( $_COOKIE['user']);
        if (!$_SESSION['user']) {
			$this->redirect ( "Index/Member/login" );
		}
    } 
}

