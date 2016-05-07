<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>注册</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <form method="post" action="<?php echo U('Index/Member/register');?>">
                <li>用 户 名：  <input type="text" name="username"></li>
                <li> 密   码：  <input type="password" name="pwd"></li>
                <li>确认密码：  <input type="password" name="repwd"></li>
                <li><input type="submit" value="注册"></li>
                 
            </form>
        </div>
    </body>
</html>