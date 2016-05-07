<?php if (!defined('THINK_PATH')) exit();?><div>
   
    <form method="post" action="">
         <li>用户名：<?php echo ($result["tb_username"]); ?></li>
        <li>真实姓名：<input type="text" name="realname" value="<?php echo ($result['tb_realname']); ?>"></li>
        <li>联系方式：<input type="text" name="phone" value="<?php echo ($result['tb_phone']); ?>"></li>
        <li>身份证：<input type="text" name="identity" value="<?php echo ($result['tb_identity']); ?>"></li>
        <li>验证码：<input type="text" name="code" value=""><input type="button" value="验证">(不可用)</li>
        <li>支付宝：<input type="text" name="alipay" value="<?php echo ($result['tb_alipay']); ?>"></li>
        <li><input type="submit" value="提交"></li><a href="<?php echo U('Index/Index/index',array('id'=>$_GET['id']));?>">返回</a>
       
    </form>
</div>