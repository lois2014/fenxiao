<?php

class PublicAction extends Action{
    function _initialize(){
        //echo $_SESSION["admin"];
        if (!isset($_SESSION ["admin"])) {
			$this->redirect ( "Admin/Login/index" );
		}
    } 
}
