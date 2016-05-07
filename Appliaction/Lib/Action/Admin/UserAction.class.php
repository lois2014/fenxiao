<?php

class UserAction extends PublicAction{
    function _initialize(){
        parent::_initialize();
    }
   public function index(){
         
         
         import ( 'ORG.Util.Page' ); 
        
        $m=M('User');
        /*$count = $m->where($where)->count (); // 查询满足要求的总记录数

        $Page = new Page ( $count, 12 ); // 实例化分页类 传入总记录数和每页显示的记录数

        $Page -> setConfig('header', '条记录');

        $Page -> setConfig('theme', '<li><a>%totalRow% %header%</a></li> <li>%upPage%</li> <li>%downPage%</li> <li>%first%</li>  <li>%prePage%</li>  <li>%linkPage%</li>  <li>%nextPage%</li> <li>%end%</li> ');//(对thinkphp自带分页的格式进行自定义)
*/        $where['tb_level']=array('eq',0);
         if($_GET['key']){
             //echo $_GET['key'];
             //exit();
                  $key='%'.$_GET['key'].'%';
                 
                  $where['tb_username']=array('like',$key);
                  
                  $count = $m->where($where)->count (); // 查询满足要求的总记录数

                $Page = new Page ( $count, 12 ); // 实例化分页类 传入总记录数和每页显示的记录数

                $Page -> setConfig('header', '条记录');

                $Page -> setConfig('theme', '<li><a>%totalRow% %header%</a></li> <li>%upPage%</li> <li>%downPage%</li> <li>%first%</li>  <li>%prePage%</li>  <li>%linkPage%</li>  <li>%nextPage%</li> <li>%end%</li> ');//(对thinkphp自带分页的格式进行自定义)

                $show = $Page->show (); // 分页显示输出

                $result = $m->limit ($Page->firstRow . ',' . $Page->listRows )->order('tb_id desc')->select ();

                
                $this->assign("page",$show); 
               
                $this->assign("result",$result);
                $this->display(); 
         }else{
                $count = $m->where($where)->count (); // 查询满足要求的总记录数

                $Page = new Page ( $count, 12 ); // 实例化分页类 传入总记录数和每页显示的记录数

                $Page -> setConfig('header', '条记录');

                $Page -> setConfig('theme', '<li><a>%totalRow% %header%</a></li> <li>%upPage%</li> <li>%downPage%</li> <li>%first%</li>  <li>%prePage%</li>  <li>%linkPage%</li>  <li>%nextPage%</li> <li>%end%</li> ');//(对thinkphp自带分页的格式进行自定义)

                $show = $Page->show (); // 分页显示输出

                $result = $m->where($where)->limit ($Page->firstRow . ',' . $Page->listRows )->order('tb_id desc')->select ();

               
                $this->assign("page",$show); 
                
                $this->assign("result",$result);
                $this->display();
         }
    }
   

        public function modify(){
            
                  
                $m=M('User');
                $where['tb_id']=$_GET['id'];
                $result=$m->where($where)->find();
             
                if(!$result['tb_id']){
                    $this->error('用户不存在！');
                }
                else if(IS_POST){

                    $result['tb_username']=$_POST['username'];
                    $result['tb_phone']=$_POST['phone'];
                    $result['tb_email']=$_POST['email'];
                    $result['tb_addr']=$_POST['addr'];
                    $result['tb_realname']=$_POST['realname'];
                    $result['tb_level']=$_POST['level'];
                   
                    if($m->where($where)->save($result)){ 
                      if($result['tb_level']==1){
                        $data['tb_uid']=$result['tb_id'];
                        $data['tb_blevel']=4;
                        M('Business')->add($data);
                    }
                        $this->success('修改成功！',U('Admin/User/index'));
                    }else{
                        $this->error('修改失败！');
                    }

               }
                else if($_GET['id']){                

                        $this->assign('result',$result);
                        $this->display();
                }
        }
        
        public function del(){
            if($_GET['id']){
                if(M('User')->where(array('tb_id'=>$_GET['id']))->delete()){
                     $this->success('删除成功！',U('Admin/User/index'));
                }else{
                    $this->error('删除失败！');
                }
            }else{
                $this->error('用户不存在');
            }
        }
             
          
}