 $(function () {
 	'use strict';

 	$(document).on('click','.open-sub', function () {
  $.popup('.popup-sub');//打开登录页
});

 	$(document).on('click','.open-sousuo', function () {
  $.popup('.popup-sousuo');//打开登录页
});

 	$(document).on('click','.external', function () {
 		$.showPreloader('狠努力的抢网络...')
 		setTimeout(function () {
 			$.hidePreloader();
 			$.toast("网络不给力，加载失败！请重试。。。");
 		}, 15000);
 	});

 	 //无线滚动
  $(document).on("pageInit", "#page-infinite-scroll", function(e, id, page) {
    function addItems(lastIndex,cids) {
      // 生成新条目的HTML
      $.get('/index.php?g=App&m=Index&a=lists_ajax', {page: lastIndex + 1,cid:cids}, function (data) {
            loading = false;
            if (data === '') {
                $.toast('没有了哦');
            }
            else {
               $('#cplist .list-container').append(data);
            }
        });
      // 添加新条目
      
    }

    //方法二：获取url参数
     
      $.getUrlParam = function (name) {
        var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
        var r = window.location.search.substr(1).match(reg);
        if (r != null) return r[2]; return null;
      }


    var lastIndex = 1;
    var loading = false;
    $(page).on('infinite', function() {

      // 如果正在加载，则退出
      if (loading) return;
     // $.showPreloader('正在努力加载...')
      // 设置flag
      loading = true;

      // 模拟1s的加载过程
      setTimeout(function() {
        // 重置加载flag
        loading = false;
       // $.hidePreloader();
        addItems(lastIndex,$.getUrlParam('cid'));
         lastIndex ++;
        $.refreshScroller();
      }, 1000);
    });
  });



 	$.init();
 });

