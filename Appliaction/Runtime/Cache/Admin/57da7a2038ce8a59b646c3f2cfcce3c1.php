<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>修改信息</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <form method="post" action="<?php echo U('Admin/Goods/modify',array('id'=>$_GET['id']));?>">
                <li>购买奖励:<input type='text' name='award' ></li>
                <li>一级分成:<input type='text' name='profit1' ></li>
                <li>二级分成:<input type='text' name='profit2' ></li>
                <li>三级分成<input type='text' name='profit3' ></li>
                <li><input type='submit' value='提交'></li>
                
            </form>
        </div>
    </body>
</html>