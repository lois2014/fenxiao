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
            <form method="post" action="<?php echo U('Index/Member/edit_info',array('id'=>$result['tb_id']));?>">
                <li>用 户 名：  <input type="text" name="username" value="<?php echo ($result['tb_username']); ?>"></li>
                <li>真实姓名：<input type="text" name="realname" value="<?php echo ($result['tb_realname']); ?>"></li>
                <li> 性别：  <input type="text" name="sex" value="<?php echo ($result['tb_sex']); ?>"></li>
                <li>地址：  <input type="text" name="addr" value="<?php echo ($result['tb_addr']); ?>"></li>
                <li>电话：  <input type="text" name="phone" value="<?php echo ($result['tb_phone']); ?>"></li>
                <li>e-mail：  <input type="text" name="email" value="<?php echo ($result['tb_email']); ?>"></li>
       
                <li><input type="submit" value="保存"><a href="<?php echo U('Index/Member/index',array('id'=>$_GET['id']));?>">返回</a></li>
                 
            </form>
        </div>
    </body>
</html>