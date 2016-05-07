<?php
class GoodsAction extends PublicAction{
    
    public function _initialize() {
        parent::_initialize();
    }
    
    public function index() {
        
        import('ORG.Util.Page');
        
        $m=M('Profit');
        
        $count=$m->count();
        
        $Page=new Page($count,12);
        
        $Page->setConfig('header', '条记录');//总记录数
        
        $Page -> setConfig('theme', '<li><a>%totalRow% %header%</a></li> <li>%upPage%</li> <li>%downPage%</li> <li>%first%</li>  <li>%prePage%</li>  <li>%linkPage%</li>  <li>%nextPage%</li> <li>%end%</li> ');//(对thinkphp自带分页的格式进行自定义)
        
        $show = $Page->show();
        
         $result = $m->limit ($Page->firstRow . ',' . $Page->listRows )->order('tb_rid desc')->select ();
        
         $this->assign('result',$result);
         $this->assign('page',$show);
         
        $this->display();
    }
    
    public function add(){
        
        if(IS_POST){
            $_POST['name']=trim($_POST['name']);
            $_POST['award']=trim(str_replace('%','',$_POST['award']));
            $_POST['profit1']=trim(str_replace('%','',$_POST['profit1']));
            $_POST['profit2']=trim(str_replace('%','',$_POST['profit2']));
            $_POST['profit3']=trim(str_replace('%','',$_POST['profit3']));
            
            if($_POST['name']=='' || $_POST['award']=='' || $_POST['profit1']=='' || $_POST['profit2']=='' || $_POST['profit3']==''){
                $this->error("请填写完整！");
            }
            
            $data['tb_rname']=$_POST['name'];
            $data['tb_raward']=$_POST['award'];
            $data['tb_rprofit1']=$_POST['profit1'];
            $data['tb_rprofit2']=$_POST['profit2'];
            $data['tb_rprofit3']=$_POST['profit3'];
            
            if(M('Profit')->add($data)){
                $this->success('添加成功');
            }else{
               $this->error('添加失败');
            }
            
        }else{
            
            $this->display("{:U(Admin/Goods/index)}");
        }
    }
    
    
     public function modify(){
        
        if(IS_POST){
          
            $_POST['award']=trim(str_replace('%','',$_POST['award']));
            $_POST['profit1']=trim(str_replace('%','',$_POST['profit1']));
            $_POST['profit2']=trim(str_replace('%','',$_POST['profit2']));
            $_POST['profit3']=trim(str_replace('%','',$_POST['profit3']));
            
            if($_POST['award']=='' || $_POST['profit1']=='' || $_POST['profit2']=='' || $_POST['profit3']==''){
                $this->error("请填写完整！");
            }
            
           
            $data['tb_raward']=$_POST['award'];
            $data['tb_rprofit1']=$_POST['profit1'];
            $data['tb_rprofit2']=$_POST['profit2'];
            $data['tb_rprofit3']=$_POST['profit3'];
            
            $where['tb_rid']=$_GET['id'];
            
            if(M('Profit')->where($where)->save($data)){
                $this->success('修改成功');
            }else{
               $this->error('修改失败');
            }
            
        }else{
            
            $this->display();
        }
    }
    
    public  function del(){
        
        if($_GET['id']){
            
            $where['tb_rid']=$_GET['id'];
            if(M('Profit')->where($where)->delete()){
                $this->success('删除成功');
            }else{
                $this->error("删除失败");
            }
            
        }else{
            $this->error('非法操作');
        }
    }
    
}

