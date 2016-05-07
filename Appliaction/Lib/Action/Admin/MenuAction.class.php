<?php
 
class MenuAction extends PublicAction{
    
    public function _initialize() {
        parent::_initialize();
    }
    
    public function index(){
        $m=M('Menu'); 
        
        $result=$m->select(); 
        
        //tree 分类模板
       // require APP_PATH.'Common/Tree.php';
      import ( 'Tree', APP_PATH . 'Common', '.php' );
       //echo APP_PATH . 'Common';
        //exit();
        $tree= new Tree();
        
        $tree->tree($result);
       
        $result = $tree->getArray();
        
        $this->assign ( "menu", $result );

	$this->assign ( "menulist", $result );

        $this->display();
    }
    
    public function addmenu(){
       if($_POST['addmenu']==0){
           
           $data['tb_pid']=$_POST['parent'];
           $data['tb_name']=$_POST['name'];
          // print_r($data);
          // exit();
           if(M('Menu')->add($data)){
               $this->success('操作成功1');
                    
           }else{
               $this->error('操作失败1');
           }
       }else{
           $data['tb_mid']=$_POST['addmenu'];
           $data['tb_pid']=$_POST['parent'];
           $data['tb_name']=str_replace( " | ","", $_POST['name']);
           //print_r($data);
           //exit();
           if(M('Menu')->save($data)){
                $this->success('操作成功2');
           }else{
               $this->error('操作失败2');
           }
           
       }
        
    }
    
}

