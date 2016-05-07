<?php



class IndexAction extends PublicAction{
      function _initialize(){
          parent::_initialize();
    } 
    public function index(){
       //echo 
       
        $m=M("User");
        $a['tb_id']=$_GET['id'];
        $result=$m->where($a)->find();
        if($result){
        $this->assign('result',$result);
        //echo $result['tb_username'];
       // exit();
        $this->display();
        }else{
            
            echo 'tonh';
        }
    }
}