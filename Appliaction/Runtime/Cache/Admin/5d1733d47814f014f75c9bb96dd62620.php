<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<div> 
   
    <form method="post" action="<?php echo U(Admin/Business/modify,array('id'=>$_GET['id']));?>">
        
        <div>
            <li>  用户名：  <input type="text" class="" name="username" value="<?php echo ($result['tb_username']); ?>"></li>
            <li>联系方式：<input type="text" class="" name="phone" value="<?php echo ($result['tb_phone']); ?>"></li>
            <li>邮 件：   <input type="text" class="" name="email" value="<?php echo ($result['tb_email']); ?>"></li>
            <li>地 址：   <input type="text" class="" name="addr" value="<?php echo ($result['tb_addr']); ?>"></li>
            <li>真实姓名：<input type="text" class="" name="realname" value="<?php echo ($result['tb_realname']); ?>"></li>
            <li><input type="submit" value="修改"><a href="<?php echo U('Admin/Business/index',array('id'=>$_GET['id']));?>">返回</a></li>  
            
        
        </div>
    </form> 
    
    
    <script language="javascript">
        window.location.href="{:U('Admin/Business/index');
    </script>
</div>