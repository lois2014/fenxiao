<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
               <table>
            
            <tr>
            <li>用户名：<?php echo ($result["tb_username"]); ?></li>
            <li>真实姓名：<?php echo ($result["tb_realname"]); ?></li>
            <li>地址：<?php echo ($result["tb_addr"]); ?></li>
             <li>电话：<?php echo ($result["tb_phone"]); ?></li>
             <li>e-mail：<?php echo ($result["tb_email"]); ?></li>
             <li>等级：<?php echo ($result["tb_level"]); ?></li>
             <li>累计积分：<?php echo ($result["tb_jifen"]); ?></li>
              <a href="<?php echo U('Index/Member/edit_pwd',array('id'=>$_GET['id']));?>"> 修改密码</a>
              <a href="<?php echo U('Index/Member/edit_info',array('id'=>$_GET['id']));?>"> 完善个人信息</a>
              <a href="<?php echo U('Index/Index/index',array('id'=>$_GET['id']));?>"> 返回首页</a>
            </tr>
            
        </table>       
        </div>
    </body>
</html>