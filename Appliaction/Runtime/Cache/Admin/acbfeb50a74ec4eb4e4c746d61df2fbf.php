<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
                <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
	        <meta name="format-detection" content="telephone=no">
		<title>SHANLE后台管理</title>

		<meta name="description" content=" 微商城 微信商城" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- basic styles -->
                 
		<link href="__PUBLIC__/Plugin/style/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="__PUBLIC__/Plugin/style/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="__PUBLIC__/Plugin/style/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- ace styles -->

		<link rel="stylesheet" href="__PUBLIC__/Plugin/style/css/ace.min.css" />
		<link rel="stylesheet" href="__PUBLIC__/Plugin/style/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="__PUBLIC__/Plugin/style/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="__PUBLIC__/Plugin/style/css/ace-ie.min.css" />
		<![endif]-->

		<!-- ace settings handler -->

		<script src="__PUBLIC__/Plugin/style/js/ace-extra.min.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="__PUBLIC__/Plugin/style/js/html5shiv.js"></script>
		<script src="__PUBLIC__/Plugin/style/js/respond.min.js"></script>
		<![endif]-->
		
		<!-- javascript footer -->
				<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='__PUBLIC__/Plugin/style/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>
		<!-- <![endif]-->

		<!--[if IE]>
		<script type="text/javascript">
		 	window.jQuery || document.write("<script src='__PUBLIC__/Plugin/style/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
		</script>
		<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='__PUBLIC__/Plugin/style/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="__PUBLIC__/Plugin/style/js/bootstrap.min.js"></script>
		<script src="__PUBLIC__/Plugin/style/js/typeahead-bs2.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="__PUBLIC__/Plugin/style/js/excanvas.min.js"></script>
		<![endif]-->

		<script src="__PUBLIC__/Plugin/style/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="__PUBLIC__/Plugin/style/js/jquery.ui.touch-punch.min.js"></script>
		<script src="__PUBLIC__/Plugin/style/js/jquery.slimscroll.min.js"></script>
		<script src="__PUBLIC__/Plugin/style/js/jquery.easy-pie-chart.min.js"></script>
		<script src="__PUBLIC__/Plugin/style/js/jquery.sparkline.min.js"></script>
		<script src="__PUBLIC__/Plugin/style/js/flot/jquery.flot.min.js"></script>
		<script src="__PUBLIC__/Plugin/style/js/flot/jquery.flot.pie.min.js"></script>
		<script src="__PUBLIC__/Plugin/style/js/flot/jquery.flot.resize.min.js"></script>

		<!-- ace scripts -->

		<script src="__PUBLIC__/Plugin/style/js/ace-elements.min.js"></script>
		<script src="__PUBLIC__/Plugin/style/js/ace.min.js"></script>
	</head>
	<body>


<SCRIPT LANGUAGE="JavaScript">
function ck(b){
 if (b==true) {
  $('#quanxian').html('<input type="checkbox" class="ace" onclick="ck(false)"> <span class="lbl"></span>');
   $("#sample-table-1 :checkbox").attr("checked", false);
 };
 if (b==false) {
  $('#quanxian').html('<input type="checkbox" class="ace" onclick="ck(true)"> <span class="lbl"></span>');
   $("#sample-table-1 :checkbox").attr("checked", true);
 };

 }
 
 
 function s_order()
{       
    
	var docurl = "<?php echo U('Admin/User/index');?>"+'?key='+$('#key').val();
	open(docurl,'_self');
}
 
 $(function(){
   $("#getValue").click(function(){
		var valArr = new Array;
        $("#list :checkbox[checked]").each(function(i){
			valArr[i] = $(this).val();
        });
		var vals = valArr.join(',');
      	$('#gid').val(vals);
    });

    });
</SCRIPT>


        <div>
                <span><input type="text" id="key" placeholder="用户名"><input type="button" value=" 搜 索  " onclick='s_order();'></span> 
        </div>
    
    <div class="col-sm-12 widget-container-span">
	<div class="widget-box transparent">
        <div class="widget-body">
			<div class="widget-main padding-12 no-padding-left no-padding-right">
				<div class="tab-content padding-4">
					<div id="home" class="tab-pane in active">
						<div class="row">
							<div class="col-xs-12 no-padding-right">
								<div class="table-responsive">
                                                                    <table id="sample-table-1"class="table table-striped table-bordered table-hover">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="center"><label id="quanxian"> <input 
                                                                                            type="checkbox" class="ace" onclick="ck(true)"> <span class="lbl"></span>								
                                                                                    </label></th>
                                                                                <td>ID</td>
                                                                                <td>用户名</td>
                                                                                <td>联系方式</td>
                                                                                <td>邮件</td>
                                                                                <td>积分</td>
                                                                                <td>上级</td>
                                                                                <td>地址</td>
                                                                                <td>真实姓名</td>
                                                                                
                                                                                <td>操作</td>
                                                                            </tr>
                                                                        </thead>

                                                                      <tbody id="list">   
                                                                      <?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$result): $mod = ($i % 2 );++$i;?><tr>
                                                                            <th class="center"><label id="quanxian"> <input 
                                                                                            type="checkbox" class="ace" onclick="ck(true)"> <span class="lbl"></span>								
                                                                                    </label></th>
                                                                            <td><?php echo ($result["tb_id"]); ?></td>
                                                                            <td><?php echo ($result["tb_username"]); ?></td>
                                                                            <td><?php echo ($result["tb_phone"]); ?></td>
                                                                            <td><?php echo ($result["tb_email"]); ?></td>
                                                                            <td><?php echo ($result["tb_jifen"]); ?></td>
                                                                            <td><?php echo ($result["tb_bossid"]); ?></td>
                                                                            <td><?php echo ($result["tb_addr"]); ?></td>
                                                                            <td><?php echo ($result["tb_realname"]); ?></td>
                                                                            
                                                                            <td><a class="J_ajax_del btn btn-white btn-sm" href="<?php echo U('Admin/User/modify',array('id'=>$result['tb_id']));?>">修改</a>
                                                                                <a class="btn btn-white btn-sm"  href="javascript:drop_confirm('确定要删除这个用户吗？','<?php echo U('Admin/User/del',array('id'=>$result['tb_id']));?>')">删除</a>
													<script>
														function drop_confirm(message,pathurl)
														{
															if(confirm(message))
															{
																window.location.href=pathurl;
															}else
															{
                                                                                                                            window.location.href=U('Admin/User/Index');
																//return false;
															}
														}
													</script>
                                                                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                                                    </tbody>
                                                                    </table>
                                                                    <div class="pagination" style="margin:0px;">
									    <?php echo ($page); ?><input type=text id='goto' style="width:40px;border:1px solid #ccc;margin:3px;" /><input type=button id="goto_button" value="转到" />
									</div>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
            </div>
        </div>		 
    </div>
    </div>