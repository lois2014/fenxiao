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
            <form method="post" action="<?php echo U('Index/Member/edit_pwd',array('id'=>$_GET['id']));?>">
                
                <li>旧密码：<input type="password" name="oldpwd" ></li>
                <li> 密   码：  <input type="password" name="pwd"></li>
                <li>确认密码：  <input type="password" name="repwd"></li>
                <li><input type="submit" value="保存"><a href="<?php echo U('Index/Member/index',array('id'=>$_GET['id']));?>">返回</a></li>
                 
            </form>
        </div>
    </body>
</html>