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
              <li>等级：<?php if(($result["tb_jifen"] > 10000)): ?>一级分销商<?php endif; ?>
                <?php if(($result["tb_jifen"] > 7000 and $result["tb_jifen"] <= 10000)): ?>二级分销商<?php endif; ?>
                <?php if(($result["tb_jifen"] > 4000 and $result["tb_jifen"] <= 7000)): ?>三级分销商<?php endif; ?>
                 <?php if(($result["tb_jifen"] <= 4000)): ?>初级分销商<?php endif; ?>
              </li>
               <li>分销金额：<?php echo ($result["tb_money"]); ?></li>
               <li><a href="<?php echo U('Index/Member/info',array('id'=>$_GET['id']));?>">我的会员 </a> </li> 
        </tr>
            
        </table> 
        </div>
         <a class="btn" href="<?php echo U('Index/Index/index',array('id'=>$_GET['id']));?>">返回首页</a>
    </body>
</html>