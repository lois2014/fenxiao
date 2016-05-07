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

<div class="navbar navbar-default" id="navbar">
	<div class="navbar-container" id="navbar-container">
		<div class="navbar-header pull-left">
			<a href="#" class="navbar-brand">
				<small>
					SHANLE
			</a><!-- /.brand -->
		</div><!-- /.navbar-header -->

		<div class="navbar-header pull-right" role="navigation">
			<ul class="nav ace-nav">
				<li class="light-blue">
					<a data-toggle="dropdown" class="dropdown-toggle" href="#">
						<i class="icon-desktop  icon-desktop"></i>
						
					</a>
					<div class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
						<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<title>preview</title>
<link rel="stylesheet" href="__PUBLIC__/Plugin/preview/app.css">
</head>
<body>
	<div class="phone-content">
		<div class="phone">
			<iframe src="<?php echo U('App/Index/lists',array('uid'=>1));?>" frameborder="0"
				scrolling="yes"></iframe>
		</div>
	</div>
</body>
</html>
					</div>
				</li>
				<li class="light-blue">
					<a data-toggle="dropdown" href="#" class="dropdown-toggle">
						<span class="user-info">
							Admin
						</span>

						<i class="icon-caret-down"></i>
					</a>

					<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
						<li>
							<a href="<?php echo U('Admin/Login/logout');?>">
								<i class="icon-off"></i>
								注销
							</a>
						</li>
					</ul>
				</li>
			</ul><!-- /.ace-nav -->
		</div><!-- /.navbar-header -->
	</div><!-- /.container -->
</div>
<div class="main-container" id="main-container">
	<div class="main-container-inner">
		<div class="sidebar" id="sidebar">
	<script type="text/javascript">
		try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
	</script>

	<ul class="nav nav-list">
            
		<li>
			<a href="javascript:void(0)"><i class="icon-list"></i><span class="menu-text"> 菜单管理 </span></a>
		</li>
               <li>
			<a href="javascript:void(0)" ><i class="icon-group"></i><span class="menu-text"> 分销商管理 </span></a>
		</li>
		
	</ul><!-- /.nav-list -->

	<script type="text/javascript">
		try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
	</script>
</div>
        </div>
    <div class="main-content">
            <div class="breadcrumbs" id="breadcrumbs">
                    <ul class="breadcrumb">
                        <li><i class="icon-home home-icon"></i> <a href="javascript:void(0);">商城设置</a></li>
                            <li class="active">分销商信息</li>

                    </ul>
            </div>
        <div>
            <div>
                
                <?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$result): $mod = ($i % 2 );++$i;?><tr>
                        <td>累计积分：<?php echo ($result["tb_jifen"]); ?> </td>
                        <td><a href="<?php echo U('Admin/Business/set');?>">设置</a></td>
                    
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                 
            </div>
        </div>		 
    </div>
   
</div>
		<script type="text/javascript">
		$('.nav.nav-list li').eq(0).click(function() {
			$('.nav.nav-list li').removeClass('active');
			$(this).addClass('active');
			$(window.location.href="<?php echo U('Admin/Index/index');?>");
		});
		/* 菜单管理 */
		$('.nav.nav-list li').eq(1).click(function() {
			$('.nav.nav-list li').removeClass('active');
			$(this).addClass('active');
                        $('#breadcrumbs ul li').eq(1).html('分销商管理');
                        $(window.location.href="<?php echo U('Admin/Business/index');?>");
			//$('#breadcrumbs ul li').eq(1).html('分销商管理');
			//$('#main_iframe').attr("src","<?php echo U('Admin/Business/index');?>");
		});
                $(".navbar-brand").click(function(){
			$("#sidebar").toggle();
		});
		</script>
		</body>
</html>