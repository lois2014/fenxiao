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
            <form method="post" action="<?php echo U('Admin/Business/acount_modify',array('id'=>$_GET['id']));?>">
                <div>
                  <li>身份证：<input type="text" name="identity" value="<?php echo ($result['tb_identity']); ?>"></li>
                  <li>支付宝姓名：<input type="text" name="aliname" value="<?php echo ($result['tb_aliname']); ?>"></li>
                  <li>支付宝：<input type="text" name="alipay" value="<?php echo ($result['tb_alipay']); ?>"> </li>
                  <li><input type="submit" value="保存"></li>
                  <a href="<?php echo U('Admin/Business/index');?>">返回</a>
                </div>
            </form>
        </div>
    </body>
</html>