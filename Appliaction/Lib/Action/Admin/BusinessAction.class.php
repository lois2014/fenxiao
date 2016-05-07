<?php

class BusinessAction extends PublicAction{
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
*/        $where['tb_level']=array('eq',1);
         if($_GET['key']){
             //echo $_GET['key'];
             //exit();
                $key='%'.$_GET['key'].'%';
                 
                  $where['tb_username|tb_jifen']=array('like',$key);
                  
                $count = $m->where($where)->count (); // 查询满足要求的总记录数

                $Page = new Page ( $count, 12 ); // 实例化分页类 传入总记录数和每页显示的记录数

                $Page -> setConfig('header', '条记录');

                $Page -> setConfig('theme', '<li><a>%totalRow% %header%</a></li> <li>%upPage%</li> <li>%downPage%</li> <li>%first%</li>  <li>%prePage%</li>  <li>%linkPage%</li>  <li>%nextPage%</li> <li>%end%</li> ');//(对thinkphp自带分页的格式进行自定义)

                $show = $Page->show (); // 分页显示输出
                
                //$where['a.tb_username|a.tb_jifen']=array('like',$key);

                $result1=M('table')->table('tb_user a,tb_business b')->where("a.tb_username like '%{$_GET['key']}%'and a.tb_id = b.tb_uid and a.tb_level=1")->order('a.tb_id desc')->limit ($Page->firstRow . ',' . $Page->listRows )->select ();
                
                
                $this->assign("result1",$result1);
                $this->assign("result2",$result1); 
                $this->assign("page",$show); 
                $result=M('Set')->select();
                $this->assign("result",$result);
                
                
                $count2 = M('Tx')->count(); // 查询满足要求的总记录数
               
                $Page2 = new Page ( $count2, 12); // 实例化分页类 传入总记录数和每页显示的记录数

                $Page2 -> setConfig('header', '条记录');

                $Page2 -> setConfig('theme', '<li><a>%totalRow% %header%</a></li> <li>%upPage%</li> <li>%downPage%</li> <li>%first%</li>  <li>%prePage%</li>  <li>%linkPage%</li>  <li>%nextPage%</li> <li>%end%</li> ');//(对thinkphp自带分页的格式进行自定义)

                $show2 = $Page2->show (); // 分页显示输出

                $result2 = M('Tx')->limit ($Page2->firstRow . ',' . $Page2->listRows )->order('tb_tid desc')->select ();    
                
                $this->assign("result3",$result2);
                
                 $this->assign("page2",$show2); 
                
                
                
                $this->display(); 
         }else{
                $count = $m->where($where)->count (); // 查询满足要求的总记录数

                $Page = new Page ( $count, 12 ); // 实例化分页类 传入总记录数和每页显示的记录数

                $Page -> setConfig('header', '条记录');

                $Page -> setConfig('theme', '<li><a>%totalRow% %header%</a></li> <li>%upPage%</li> <li>%downPage%</li> <li>%first%</li>  <li>%prePage%</li>  <li>%linkPage%</li>  <li>%nextPage%</li> <li>%end%</li> ');//(对thinkphp自带分页的格式进行自定义)

                $show = $Page->show (); // 分页显示输出
                //联接两个表
                $result1 = M('Table')->table('tb_user a,tb_business b')->where("a.tb_level = 1 and  a.tb_id = b.tb_uid")->order('a.tb_id desc')->limit ($Page->firstRow . ',' . $Page->listRows )->select ();
                
               
              //  print_r($result1);
               // exit();
                /*if($res=M('Business')->limit ($Page->firstRow . ',' . $Page->listRows )->order('tb_id desc')->select ()){
                  
                   //$result1['tb_jifen']=$result1['tb_jifen']+$result['tb_bjifen'];
                   print_r($result1);
                   exit();
                }*/
                $this->assign("result1",$result1);
                $this->assign("result2",$result1);          
                $this->assign("page",$show); 
               
                $count2 = M('Tx')->count(); // 查询满足要求的总记录数
               
                $Page2 = new Page ( $count2, 12); // 实例化分页类 传入总记录数和每页显示的记录数

                $Page2 -> setConfig('header', '条记录');

                $Page2 -> setConfig('theme', '<li><a>%totalRow% %header%</a></li> <li>%upPage%</li> <li>%downPage%</li> <li>%first%</li>  <li>%prePage%</li>  <li>%linkPage%</li>  <li>%nextPage%</li> <li>%end%</li> ');//(对thinkphp自带分页的格式进行自定义)

                $show2 = $Page2->show (); // 分页显示输出

                $result2 = M('Tx')->limit ($Page2->firstRow . ',' . $Page2->listRows )->order('tb_tid desc')->select ();

                
                $this->assign("result3",$result2);
                
                 $this->assign("page2",$show2); 
                $result=M('Set')->select();
                $this->assign("result",$result);
                $this->display();
         }
    }
    public function set(){
      
        if($_GET['jifen']){            
             $m=M('Set');            
             
             $data['tb_jifen']=$_GET['jifen'];
             $data['tb_sid']=1;
            if($m->save($data)){
                $this->success("保存成功！",U('Admin/Business/index'));
            }else{
                $this->success("保存失败！");
            }
            
        }else{
              
            $this->error("操作失误！");
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
                    if($m->where($where)->save($result)){
                        $this->success('修改成功！',U('Admin/Business/index'));
                    }else{
                        $this->error('修改失败！');
                    }

               }
                else if($_GET['id']){                

                        $this->assign('result',$result);
                        $this->display();
                }
        }
        
          public function acount_modify(){
                $m=M('User');
                $where['tb_id']=$_GET['id'];
                $result=$m->where($where)->find();
             
                if(!$result['tb_id']){
                    $this->error('用户不存在！');
                }
                else if(IS_POST){

                    $result['tb_identity']=$_POST['identity'];
                    $result['tb_aliname']=$_POST['aliname'];
                    $result['tb_alipay']=$_POST['alipay'];
                    
                    if($m->where($where)->save($result)){
                        $this->success('修改成功！',U('Admin/Business/index'));
                    }else{
                        $this->error('修改失败！');
                    }

               }
                else if($_GET['id']){                
                        $this->assign('result',$result);
                        $this->display();
                }
        }
       public function tx_modify(){
            $m=M('Tx');
            $where['tb_tid']=$_GET['id'];
            $data['tb_tstatu']=1;
            if($m->where($where)->save($data)){
                $this->success('操作成功！',U('Admin/Business/index'));
            }else{
                $this->error('保存失败！');
            }
        }
        
        public function tx_cancel(){
            $m=M('Tx');
            $where['tb_tid']=$_GET['id'];
            $data['tb_tstatu']=0;
            if($m->where($where)->save($data)){
                $this->success('操作成功！',U('Admin/Business/index'));
            }else{
                $this->error('保存失败！');
            }
        }
        
        public function info(){
              import ( 'ORG.Util.Page' ); 
            $m=M('User');
            //一级会员
            $where['tb_bossid']=$_GET['id'];
            
               $count = $m->where($where)->count (); // 查询满足要求的总记录数

                $Page = new Page ( $count, 12 ); // 实例化分页类 传入总记录数和每页显示的记录数

                $Page -> setConfig('header', '条记录');

                $Page -> setConfig('theme', '<li><a>%totalRow% %header%</a></li> <li>%upPage%</li> <li>%downPage%</li> <li>%first%</li>  <li>%prePage%</li>  <li>%linkPage%</li>  <li>%nextPage%</li> <li>%end%</li> ');//(对thinkphp自带分页的格式进行自定义)

                $show = $Page->show (); // 分页显示输出

                $result = $m->where($where)->limit ($Page->firstRow . ',' . $Page->listRows )->order('tb_id desc')->select ();
                
                          
                $this->assign("page",$show);   
                $this->assign('result',$result);
             
               
                //二级会员
               $sql = "select count(tb_id) from tb_user where tb_bossid in (select tb_id from tb_user where tb_bossid={$_GET['id']})";
                 $r = M()->query($sql);
                 // 查询满足要求的总记录数
                 $count2=$r[0]['count(tb_id)'];
                 //print_r($r);
                 //echo $count2;
                  //exit();
                $Page2 = new Page ( $count2, 12 ); // 实例化分页类 传入总记录数和每页显示的记录数

                $Page2 -> setConfig('header', '条记录');

                $Page2 -> setConfig('theme', '<li><a>%totalRow% %header%</a></li> <li>%upPage%</li> <li>%downPage%</li> <li>%first%</li>  <li>%prePage%</li>  <li>%linkPage%</li>  <li>%nextPage%</li> <li>%end%</li> ');//(对thinkphp自带分页的格式进行自定义)

                $show2 = $Page2->show (); // 分页显示输出
                
                $sql = "select tb_id from tb_user where tb_bossid in (select tb_id from tb_user where tb_bossid={$_GET['id']})";
                
                $r = M()->query($sql);
                
                
                $result2=$m->where($r)->limit ($Page->firstRow . ',' . $Page->listRows )->order('tb_id desc')->select ();
                          
                $this->assign("page2",$show2); 
            
            
           
            $this->assign('result2',$result2);
                
            
            //三级会员
             $where['tb_bossid']=$result2['tb_id'];
                 $count3 = $m->where($where)->count (); // 查询满足要求的总记录数

                $Page3 = new Page ( $count3, 12 ); // 实例化分页类 传入总记录数和每页显示的记录数

                $Page3 -> setConfig('header', '条记录');

                $Page3 -> setConfig('theme', '<li><a>%totalRow% %header%</a></li> <li>%upPage%</li> <li>%downPage%</li> <li>%first%</li>  <li>%prePage%</li>  <li>%linkPage%</li>  <li>%nextPage%</li> <li>%end%</li> ');//(对thinkphp自带分页的格式进行自定义)

                $show3 = $Page3->show (); // 分页显示输出

                $result3 = $m->where($where)->limit ($Page3->firstRow . ',' . $Page2->listRows )->order('tb_id desc')->select ();
                
                          
                $this->assign("page3",$show3); 
            
            
           
            $this->assign('result3',$result3);
            
            
            $this->display();
        }
        
        
        
        public function del(){
            if($_GET['id']){
                $result=M('User')->where(array('tb_id'=>$_GET['id']))->find();
                $result['tb_level']=0;
                if(M('User')->where(array('tb_id'=>$_GET['id']))->save($result)){  
                                M('Tx')->where(array('tb_uid'=>$_GET['id']))->delete();
                                M('Business')->where(array('tb_uid'=>$_GET['id']))->delete();
                                $this->success('删除成功！',U('Admin/Business/index'));
                }else{
                    $this->error('删除失败！');
                }
            }else{
                $this->error('用户不存在');
            }
        }
             
          
}