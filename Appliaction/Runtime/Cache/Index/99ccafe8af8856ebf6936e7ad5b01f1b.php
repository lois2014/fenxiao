<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>登录</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body> 
        <script language="javascript">
                 function go(){
                      window.location.href="<?php echo U('Index/Member/register');?>";
                 }    
            </script>
            <div >
            <form method="post" action="<?php echo U('Index/Member/login');?>">
                <li>用户名：<input type="text" name="username" class=""/></li>
                <li>密码：<input type="password" name="password" class=""/></li>
                <li><input type="submit" value="登录"/> <input type="button" value="注册" onclick='go();'></li>
                
               
               
            </form>  
           
        </div>
    </body>
</html>