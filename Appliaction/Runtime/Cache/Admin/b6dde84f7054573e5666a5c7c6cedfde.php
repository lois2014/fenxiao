<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>设置</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <form method="post" action="<?php echo U('Admin/Business/set',array('jifen'=>$_GET['jifen']));?>">
                积分：<input type="text" value="<?php echo ($_GET['jifen']); ?>" name="jifen"/>
                <button type="submit" value="修改">修改</button>
            </form>
        </div>
    </body>
</html>