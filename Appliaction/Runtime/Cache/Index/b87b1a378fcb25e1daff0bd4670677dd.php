<?php if (!defined('THINK_PATH')) exit();?>
<html>
    <head>
        <title>首页</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> <div>
            
    </head>
    <body>
        <div>
        <table>            
            <tr>
            <li>用户名：<?php echo ($result["tb_username"]); ?></li>
             <li>等级：<?php if(($result["tb_level"] == 1)): ?>分销商<?php else: ?>
                 会员<?php endif; ?></li>
             <li>积分：<?php echo ($result["tb_jifen"]); ?></li>
            </tr>
        </table> 
            <li><a href="<?php echo U('Index/Member/index',array('id'=>$_GET['id']));?>">个人中心 </a> </li> 
             <li><a href="<?php echo U('Index/classification',array('id'=>$_GET['id']));?>">品牌分类 </a> </li>
              <li><a href="<?php echo U('Index/order',array('id'=>$_GET['id']));?>">订单中心 </a> </li>
              <?php if(($result["tb_level"] == 1)): ?><li><a href="<?php echo U('Index/Member/fenxiao',array('id'=>$_GET['id']));?>">分销中心 </a> </li><?php endif; ?>
            <?php if(($result["tb_level"] == 0)): ?><input type="button" value="分销商申请" onclick="go1();"><?php endif; ?>
            <input type="button" value="注销" onclick="go2();">
            <!--form method="post" action="<?php echo U('Index/Member/check_jifen',array('id'=>$_GET['id']));?>">
                
                <input type='submit' name='request' value='申请'/>
            </form>
                        <form method="post" action="<?php echo U('Index/Member/check_jifen',array('id'=>$_GET['id']));?>">
                
                <input type='submit' name='request' value='申请'/>
            </form>
             <form method="post" action="<?php echo U('Index/Member/logout');?>">
                <input type='submit' name='request' value='注销'/>
            </form--> 
                                  
        </div>
          <script language="javascript">
                 function go1(){
                     //var path=window.document.location.href;
                     //document.write(path);
                     var get=GetRequest();
                      window.location.href="<?php echo U('Index/Member/check_jifen');?>"+'&id='+get['id'];
                 }
                 function go2(){
                     //var path=window.document.location.href;
                     //document.write(path);
                    
                      window.location.href="<?php echo U('Index/Member/logout');?>";
                 }  
                function GetRequest() {
                    var url = location.search; //获取url中"?"符后的字串
                    var theRequest = new Object();
                    if (url.indexOf("?") != -1) {
                    var str = url.substr(1);
                    strs = str.split("&");
                    for(var i = 0; i < strs.length; i ++) {
                    theRequest[strs[i].split("=")[0]]=unescape(strs[i].split("=")[1]);
                    }
                    }
                    return theRequest;
              } 
            </script>
    </body>
</html>