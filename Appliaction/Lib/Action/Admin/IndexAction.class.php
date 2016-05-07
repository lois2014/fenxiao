<?php


class IndexAction extends PublicAction{
    function _initialize(){
        parent::_initialize();
        
    }

    public function index(){
            //$this->assign("fenUrl",FENURL);
		
            $this->display();
        
    }
    public function set(){
        $m=M('Set');
        $result=$m->find();
        if(IS_POST){
            
            $result['tb_stheme']=trim($_POST['theme']);
            $result['tb_sannounce']=trim($_POST['announce']);
            if($m->where(array('tb_sid'=>1))->save($result)){
                  $this->assign('result',$result);
                $this->success("操作成功");
            }else{
                $this->error("操作失败"); 
            }
        }else{
            if($result){
                
             $this->assign('result',$result);
            }
        }
        $resulta=M('Admin')->select();
         $this->assign('resulta',$resulta);
        $this->display();
    }
    
    public function password_modify(){
        if(IS_POST){
            $m=M('Admin');
           // print_r($_SESSION['admin'][1]);
            //exit();
            $where['tb_username']=trim($_SESSION['admin']);
            $where['tb_password']=md5($_POST['oldpwd']);
            $result=$m->where($where)->find();
            if($result){
                if($_POST['newpwd']!='' && $_POST['newrepwd']!=''){
                    if($_POST['newpwd']!=$_POST['newrepwd']){
                        $this->error("密码不一致");
                    }
                    $result['tb_password']=  md5($_POST['newpwd']);
                    if($m->where($where)->save($result)){
                        $this->success("操作成功");
                    }else{
                        $this->error("操作失败");
                    }
                }else{
                    $this->error("密码不能为空");
                }
            }else{
                $this->error("用户不存在或者密码错误！");
            }
            
        }else{
            $this->error("");
        }
    }
    
    
    public function addadmin(){
        if(IS_POST){
           $_POST['name'] = trim($_POST['name']);
           $_POST['pwd'] = trim($_POST['pwd']);
           
            if($_POST['name']==""||$_POST['pwd']==""){
                $this->error("请将信息填写完整！");
            }else{
                $data['tb_username'] = $_POST['name'];
                if(M('Admin')->where($data)->find()){
                      $this->error("用户名已存在");
                }
                $data['tb_password'] =  md5($_POST['pwd']);
                if(M('Admin')->add($data)){
                    $this->success("操作成功");
                }else{
                      $this->error("操作失败");
                }
            }
            
        }else{
            $this->error();
        }
    }
    
    public function deladmin(){
        if($_GET['id']){
            $where['tb_aid']=$_GET['id'];
            
            if(M('Admin')->where($where)->delete()){
                $this->success("成功删除！");
            }else{
                $this->error("操作失败");
            }
            
        }else{
            $this->error();
        }
    }
    
}
