<?php
class ApiAction extends Action{
        public function login($username, $password) {
                        $where=array();     
                        $where ["tb_username"] = $username;
                        $where ["tb_password"] = md5($password);
                        $result = M ( "Admin" )->where ( $where )->find ();

                        if ($result) {
                           // echo "alert('zdsa');";
                                return $result ["tb_username"];

                        }

                }
                
            
         
     
                
                
}