<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class MemberAction extends Action{
    
     
    
     public function index(){
           $m=M("User");
        $a['tb_id']=$_GET['id'];
        $result=$m->where($a)->find();
        if($result){
        $this->assign('result',$result);
        $this->display();
        }
     }
     
     //分销中心
      public function fenxiao(){
           $m=M("User");
        $a['tb_id']=$_GET['id'];
        $result=$m->where($a)->find();
        if($result){
        $this->assign('result',$result);
        $this->display();
        }
     }
     
     
     //会员信息
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
     
     public function login(){
         if(IS_POST){
            
             $search['tb_username']=$_POST['username'];
             $search['tb_password']=md5($_POST['password']);
             //echo '登录成功'; 
             $m=M('User');
            $result=$m->where($search)->find();
            if($result){
                $_SESSION['user']=$result['tb_id'];
                
                //$this->assign('result',$result);
                $this->success("登录成功！",U('Index/Index/index',array('id'=>$result['tb_id'])));
                exit;
            }else{
                $this->success("用户名或者密码错误！");
            }
         }else{
             $this->display();
             
         }
         exit;
     }
  
     //修改密码
     public function edit_pwd(){
          $m=M("User");
        $set["tb_id"]=$_GET['id'];
        if(IS_POST){
            $set["tb_password"]=  md5($_POST["oldpwd"]);
            if($_POST["pwd"]!=$_POST["repwd"]||$_POST['pwd']==''||$_POST['repwd']==''){
                $this->error('密码为空或密码不一致');
            }
           $m=M('User');
          
            $result=$m->where($set)->find(); 
             if($result){
                 $password["tb_password"]=  md5($_POST['pwd']);
                if($m->where($set)->save($password)){
                $this->success("保存成功！",U('Index/Member/index',array('id'=>$result['tb_id'])));
                }else{
                    $this->error('保存失败！');
                }
           
            }else{
                $this->success("密码错误！");
            }
        }else{
            $result=$m->where($a)->find();
            if($result){
            $this->assign('result',$result);
            $this->display();
            }
        }
     }
//完善个人信息
 public function edit_info(){
          $m=M("User");
        $a['tb_id']=$_GET['id'];
        
        if(IS_POST){
            $_POST['username'] = trim($_POST['username']);
            if($_POST["username"]!=""){
                  $sel['tb_id']=array('neq',$_GET['id']);
                $sel["tb_username"]=$_POST["username"];
                if($result=$m->where($sel)->find()){
                  $this->error("此用户名已被使用");
               }else{
                    //echo $a['tb_id'].'asd';
                    $info["tb_username"]=$_POST["username"];
                    $info['tb_sex']=$_POST['sex'];
                    $info['tb_realname']=$_POST['realname'];
                    $info['tb_addr']=$_POST['addr'];
                    $info['tb_phone']=$_POST['phone'];
                    $info['tb_email']=$_POST['email'];
                   $result=$m->where($a)->save($info); 
                   //echo $result['tb_realname'];
                   if($result){
                       $this->success("保存成功！",U('Index/Member/index',array('id'=>$_GET['id'])));
                   }else{
                       $this->error("保存失败！");
                   }
               } 
            }
            
        }else{
            $result=$m->where($a)->find();
            if($result){
            $this->assign('result',$result);
            $this->display();
            }
        }
     }
     
       public function logout(){
    $_SESSION['user']='';
    $this->success("注销成功！",U('Index/Member/login'));
  }
  
  
  public  function register(){
      if(IS_POST){
         if(!$_POST['username']){
             $this->error("用户名不能为空");
         }
         if(!$_POST['pwd']||!$_POST['repwd']){
             $this->error("密码不能为空");
         }
         if($_POST['pwd']!=$_POST['repwd']){
             $this->error("密码不一致");
         }
         $where['tb_username']=$_POST['username'];
         if(M('User')->where($where)->find()){
             $this->error("用户名已占用");
         }
         $data['tb_username']=$_POST['username'];
         $data['tb_password']=  md5($_POST['pwd']);
         if(M('User')->add($data)){
             $this->success("注册成功！",U('Index/Member/index'));
         }else{
             $this->error("注册失败！");
         }
      }else{
          $this->display();
      }
  }









//申请分销商时，查看积分
  public function check_jifen(){
      
      $where['tb_id']=$_GET['id'];
      $result=M('User')->where($where)->find();
      //echo $result['tb_jifen'];
      $map['tb_jifen']=array('elt',$result['tb_jifen']);
      $info=M('Set')->where($map)->find();
     
      if($info){
          if(IS_POST){ 
          $data['tb_id']=$result['tb_id'];
          $result['tb_level']=1;
          $_POST['realname']=trim($_POST['realname']);
          $_POST['phone']=trim($_POST['phone']);
          $_POST['identity'] = trim($_POST['identity']);
          $_POST['alipay'] = trim($_POST['alipay']);
          if(!$_POST['realname'] || !$_POST['phone'] || !$_POST['identity'] || !$_POST['alipay'] ){
               $this->error("请将信息填写完整！");
          }
          $result['tb_realname']=$_POST['realname'];
          $result['tb_phone']=$_POST['phone'];
          $result['tb_identity']=$_POST['identity'];
          $result['tb_alipay']=$_POST['alipay'];
         if(M('User')->where($data)->save($result)){
             $data['tb_uid']=$result['tb_id'];
             $data['tb_blevel']=4;
             M('Business')->add($data);
          $this->assign('result',$result);
          $this->success("申请成功！",U('Index/Index/index',array('id'=>$_GET['id'])));
         }else{
             $this->error("申请失败！");
         }
      }else{
          $this->assign('result',$result);
          $this->display();
      }
      }else{
       $this->error("积分不足！");
  }
  }
}
  
  
  