<link href="themes/default/header.css" rel="stylesheet" type="text/css">
<link href="themes/default/index.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="themes/default/js/quwan.js" charset="UTF-8"></script>
<script type="text/javascript" src="themes/default/js/header.js" charset="UTF-8"></script>
<script type="text/javascript" src="themes/default/js/lazyload.js" charset="UTF-8"></script>

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,index.js')); ?>
<script type="text/javascript" charset="utf-8">
$(document).ready(function(){
	$(".cat").find("img").lazyload({effect : "fadeIn",placeholder : " http://i4.quwan.com/themes/default/imgs/global/grey.gif"});
	});
</script>
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
</script>
<script type="text/javascript">
function getCookie(objName)
{
  var arrStr = document.cookie.split("; ");
  for(var i = 0;i < arrStr.length;i ++)
  {
    var temp = arrStr[i].split("=");
    if(temp[0] == objName) return unescape(temp[1]);
  }
}
</script>
<script type="text/javascript" src="themes/default/js/taobao.js" charset="UTF-8"></script>
<meta http-equiv="X-UA-Compatible" content="IE=7">
 
<div id="head" onmouseover="$('.nav_pop').hide();$('.nav_a').removeClass('on');">
  <div id="logo"><a title="选礼品网" href="http://www.xuanlp.com/"><img src="themes/default/images/logo.gif"></a></div> 
<div id="head_right">
 
<ul class="head_user" style="display: block;">
  <?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
  <li><a href="user.php?act=login&amp;back_act=user.php?act=order_list">我的订单</a></li>
  <li>|</li>
  <li id="mypop"> <a id="myquwan" href="http://www.xuanlp.com/user.php">我的礼单</a>
    <div id="my_pop"> <a href="http://www.xuanlp.com/user.php?act=login&amp;back_act=user.php?act=order_list">我的订单</a> <a href="http://www.xuanlp.com/user.php?act=login&amp;back_act=user.php?act=points">我的积分</a> <a href="http://www.xuanlp.com/user.php?act=login&amp;back_act=user.php?act=money_account">现金账户</a> <a href="http://www.xuanlp.com/user.php?act=login&amp;back_act=user.php?act=collection_list">我的收藏</a> </div>
  </li>
  <!--li>|</li>
  <li><a href="http://www.xuanlp.com/points.php?fm=pointsguide">积分商城</a></li-->
  <li>|</li>
  <li><a href="http://www.xuanlp.com/article-334.html">帮助中心</a></li>
</ul>
<ul class="head_user" style="display:none;">
   <li><span>欢迎来趣玩!&nbsp;&nbsp;<strong><span id="nickname"></span></strong>!</span>&nbsp;&nbsp;</li>
   <li><a href="http://www.xuanlp.com/user.php?act=logout">退出登录</a>&nbsp;&nbsp;</li>
  <li><a href="http://www.xuanlp.com/user.php?act=order_list">我的订单</a></li>
  <li>|</li>
  <li id="mypop1"> <a id="myquwan" href="http://www.xuanlp.com/user.php">我的礼单</a>
    <div id="my_pop1"> <a href="http://www.xuanlp.com/user.php?act=order_list">我的订单</a> <a href="http://www.xuanlp.com/user.php?act=points">我的积分</a> <a href="http://www.xuanlp.com/user.php?act=collection_list">我的收藏夹</a> <a href="http://www.xuanlp.com/user.php?act=money_account">现金账户</a> </div>
  </li>
  <!--li>|</li>
  <li><a href="http://www.xuanlp.com/points.php?fm=pointsguide">积分商城</a></li-->
  <li>|</li>
  <li><a href="http://www.xuanlp.com/article-334.html">帮助中心</a></li>
</ul>
<ul class="head_user" style="display:none;">
  <li id="taobaobar1"></li>
  <li>&nbsp;&nbsp;<a href="http://www.xuanlp.com/user.php?act=logout">退出登录</a>&nbsp;&nbsp;</li>
  <li><a href="http://www.xuanlp.com/user.php?act=login&amp;back_act=user.php?act=order_list">我的订单</a></li>
  <li>|</li>
  <li id="mypop"> <a id="myquwan" href="http://www.xuanlp.com/user.php">我的趣玩</a>
    <div id="my_pop"> <a href="http://www.xuanlp.com/user.php?act=login&amp;back_act=user.php?act=order_list">我的订单</a> <a href="http://www.xuanlp.com/user.php?act=login&amp;back_act=user.php?act=points">我的积分</a> <a href="http://www.xuanlp.com/user.php?act=login&amp;back_act=user.php?act=money_account">现金账户</a> <a href="http://www.xuanlp.com/user.php?act=login&amp;back_act=user.php?act=collection_list">我的收藏</a> </div>
  </li>
  <li>|</li>
  <li><a href="http://www.xuanlp.com/points.php?fm=pointsguide">积分商城</a></li>
  <li>|</li>
  <li><a href="http://www.xuanlp.com/article-334.html">帮助中心</a></li>
</ul>
<ul class="head_user" style="display:none;">
  <li id="taobaobar2"></li>
</ul>
<ul style="display: none;" class="head_user">
</ul>
 
<div id="head_other"> <!--<a href="http://www.xuanlp.com/category-660-sc1107-channel.html?fm=indexGift" target="_blank" title="礼品"><img height="58" width="76" src="http://i3.xuanlp.com/themes/default/imgs/global/h_gifts.gif"></a>--> <a href="http://www.xuanlp.com/brand.php?fm=indexBrand" target="_blank" title="品牌"><img src="themes/default/images/h_bands.gif" height="58" width="86"></a> <!--<a href="http://www.xuanlp.com/search.php?intro=promotion&fm=indexPromotion" target="_blank" title="趣玩促销"><img height="58" width="76" src="http://i3.xuanlp.com/themes/default/imgs/global/h_promote.gif"></a>--> <a href="http://www.xuanlp.com/search.php?intro=new&amp;fm=indexNew" target="_blank" title="趣玩新品"><img src="themes/default/images/h_new.gif" height="58" width="86"></a> <!--<a href="http://www.xuanlp.com/zhuanti.php?ztno=zhuanti_201016&fm=giftguide" target="_blank" title="新手礼包"><img height="58" width="86" src="http://i3.xuanlp.com/themes/default/imgs/global/h_fish.gif"></a>--> <!--<a href="http://www.xuanlp.com/lottery.php?fm=lotteryguide" target="_blank" title="免费抽奖"><img height="58" width="86" src="http://i4.xuanlp.com/themes/default/imgs/global/h_lottery.gif"></a>--><!--<a style="display:none;" href="http://www.xuanlp.com/315survey.php" title="趣玩315有奖调查" target="_blank" style="width:125px; margin-right:20px;"><img height="58" width="125" src="http://i4.xuanlp.com/themes/default/imgs/global/h_315.gif"></a> <span class="hot_span">&nbsp;</span>-->
</div>
</div>
<div class="clear"></div>
</div>
<div id="navbox">
  <div id="nav">
    <ul class="nav_item">
	  <li class="nav_li"><a href="index.php"<?php if ($this->_var['navigator_list']['config']['index'] == 1): ?> class="index_a indexon_a"<?php else: ?> class="nav_a" <?php endif; ?>><?php echo $this->_var['lang']['home']; ?><span></span></a></li>
	  <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
	  <li class="nav_li"><a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank" <?php endif; ?> <?php if ($this->_var['nav']['active'] == 1): ?> class="index_a indexon_a"<?php else: ?> class="nav_a"<?php endif; ?>  onmouseover="$('.nav_a').removeClass('on');$(this).addClass('on');$('.nav_pop').hide();$(this).parent().find('.nav_pop').show();"><?php echo $this->_var['nav']['name']; ?></a></li>
	 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	 
      <!-- li class="nav_li" style="border-left:none;"> <a class="index_a  indexon_a" href="http://www.xuanlp.com/" title="首页">首页</a> </li>
       
      <li class="nav_li"> 
       
      <a class="nav_a" href="http://www.xuanlp.com/category-784-sc1101-channel.html?fm=mainnav" title="家居" onmouseover="$('.nav_a').removeClass('on');$(this).addClass('on');$('.nav_pop').hide();$(this).parent().find('.nav_pop').show();">家居</a> 
       
      <dl class="nav_pop pop_right" style="width: 512px; height: 254px; display: none;" onmouseout="$(this).hide();$('.nav_a').removeClass('on');"> 
            <dd style="height:234px;" onmouseover="$(this).parent().show();$(this).parent().parent().find('.nav_a').addClass('on');"> <span><a href="http://www.xuanlp.com/category-775-sc110101-catogry_type.html?fm=mainnav" title="家居-家纺用品">家纺用品</a></span> 
                <p><a href="http://www.xuanlp.com/category-810-sc11010108-catogry_type.html?fm=mainnav" title="家居-家纺用品-毛巾/浴巾/睡衣">毛巾/浴巾/睡衣</a></p>
                <p><a href="http://www.xuanlp.com/category-795-sc11010105-catogry_type.html?fm=mainnav" title="家居-家纺用品-被毯">被毯</a></p>
                <p><a href="http://www.xuanlp.com/category-776-sc11010101-catogry_type.html?fm=mainnav" title="家居-家纺用品-枕头/枕套">枕头/枕套</a></p>
                <p><a href="http://www.xuanlp.com/category-785-sc11010103-catogry_type.html?fm=mainnav" title="家居-家纺用品-床品件套">床品件套</a></p>
         
      </dd>
            <dd style="height:234px;" onmouseover="$(this).parent().show();$(this).parent().parent().find('.nav_a').addClass('on');"> <span><a href="http://www.xuanlp.com/category-818-sc110102-catogry_type.html?fm=mainnav" title="家居-生活日用">生活日用</a></span> 
                <p><a href="http://www.xuanlp.com/category-834-sc11010205-catogry_type.html?fm=mainnav" title="家居-生活日用-个人护理">个人护理</a></p>
                <p><a href="http://www.xuanlp.com/category-842-sc11010204-catogry_type.html?fm=mainnav" title="家居-生活日用-雨具">雨具</a></p>
                <p><a href="http://www.xuanlp.com/category-1279-sc11010211-catogry_type.html?fm=mainnav" title="家居-生活日用-杂货">杂货</a></p>
                <p><a href="http://www.xuanlp.com/category-838-sc11010206-catogry_type.html?fm=mainnav" title="家居-生活日用-安全防护">安全防护</a></p>
                <p><a href="http://www.xuanlp.com/category-829-sc11010208-catogry_type.html?fm=mainnav" title="家居-生活日用-拖鞋">拖鞋</a></p>
                <p><a href="http://www.xuanlp.com/category-819-sc11010209-catogry_type.html?fm=mainnav" title="家居-生活日用-驱蚊/降温">驱蚊/降温</a></p>
         
      </dd>
            <dd style="height:234px;" onmouseover="$(this).parent().show();$(this).parent().parent().find('.nav_a').addClass('on');"> <span><a href="http://www.xuanlp.com/category-852-sc110103-catogry_type.html?fm=mainnav" title="家居-收纳/储物">收纳/储物</a></span> 
                <p><a href="http://www.xuanlp.com/category-853-sc11010301-catogry_type.html?fm=mainnav" title="家居-收纳/储物-真空压缩袋">真空压缩袋</a></p>
                <p><a href="http://www.xuanlp.com/category-854-sc11010302-catogry_type.html?fm=mainnav" title="家居-收纳/储物-衣物收纳">衣物收纳</a></p>
                <p><a href="http://www.xuanlp.com/category-855-sc11010303-catogry_type.html?fm=mainnav" title="家居-收纳/储物-杂物收纳">杂物收纳</a></p>
                <p><a href="http://www.xuanlp.com/category-857-sc11010305-catogry_type.html?fm=mainnav" title="家居-收纳/储物-纸巾收纳">纸巾收纳</a></p>
                <p><a href="http://www.xuanlp.com/category-858-sc11010306-catogry_type.html?fm=mainnav" title="家居-收纳/储物-鞋盒">鞋盒</a></p>
                <p><a href="http://www.xuanlp.com/category-1236-sc11010309-catogry_type.html?fm=mainnav" title="家居-收纳/储物-收纳凳">收纳凳</a></p>
         
      </dd>
            <dd style="height:234px;" onmouseover="$(this).parent().show();$(this).parent().parent().find('.nav_a').addClass('on');"> <span><a href="http://www.xuanlp.com/category-861-sc110104-catogry_type.html?fm=mainnav" title="家居-香薰净化">香薰净化</a></span> 
                <p><a href="http://www.xuanlp.com/category-862-sc11010401-catogry_type.html?fm=mainnav" title="家居-香薰净化-加湿器/净化器">加湿器/净化器</a></p>
                <p><a href="http://www.xuanlp.com/category-863-sc11010402-catogry_type.html?fm=mainnav" title="家居-香薰净化-竹炭/触媒">竹炭/触媒</a></p>
                <p><a href="http://www.xuanlp.com/category-1348-sc11010405-catogry_type.html?fm=mainnav" title="家居-香薰净化-香薰/蜡烛">香薰/蜡烛</a></p>
         
      </dd>
            </dl>
      </li>
       
      <li class="nav_li"> 
       
      <a class="nav_a" href="http://www.xuanlp.com/category-866-sc1102-channel.html?fm=mainnav" title="装饰" onmouseover="$('.nav_a').removeClass('on');$(this).addClass('on');$('.nav_pop').hide();$(this).parent().find('.nav_pop').show();">装饰</a> 
       
      <dl class="nav_pop pop_right" style="width: 640px; height: 222px; display: none;" onmouseout="$(this).hide();$('.nav_a').removeClass('on');"> 
            <dd style="height:202px;" onmouseover="$(this).parent().show();$(this).parent().parent().find('.nav_a').addClass('on');"> <span><a href="http://www.xuanlp.com/category-1066-sc110201-catogry_type.html?fm=mainnav" title="装饰-墙面贴饰">墙面贴饰</a></span> 
                <p><a href="http://www.xuanlp.com/category-1067-sc11020101-catogry_type.html?fm=mainnav" title="装饰-墙面贴饰-贴饰">贴饰</a></p>
                <p><a href="http://www.xuanlp.com/category-1068-sc11020102-catogry_type.html?fm=mainnav" title="装饰-墙面贴饰-相框墙">相框墙</a></p>
                <p><a href="http://www.xuanlp.com/category-1069-sc11020103-catogry_type.html?fm=mainnav" title="装饰-墙面贴饰-装饰画">装饰画</a></p>
         
      </dd>
            <dd style="height:202px;" onmouseover="$(this).parent().show();$(this).parent().parent().find('.nav_a').addClass('on');"> <span><a href="http://www.xuanlp.com/category-1080-sc110202-catogry_type.html?fm=mainnav" title="装饰-灯饰">灯饰</a></span> 
                <p><a href="http://www.xuanlp.com/category-1081-sc11020201-catogry_type.html?fm=mainnav" title="装饰-灯饰-台灯">台灯</a></p>
                <p><a href="http://www.xuanlp.com/category-1082-sc11020202-catogry_type.html?fm=mainnav" title="装饰-灯饰-夜灯">夜灯</a></p>
                <p><a href="http://www.xuanlp.com/category-1083-sc11020203-catogry_type.html?fm=mainnav" title="装饰-灯饰-氛围灯">氛围灯</a></p>
         
      </dd>
            <dd style="height:202px;" onmouseover="$(this).parent().show();$(this).parent().parent().find('.nav_a').addClass('on');"> <span><a href="http://www.xuanlp.com/category-1084-sc110203-catogry_type.html?fm=mainnav" title="装饰-钟表">钟表</a></span> 
                <p><a href="http://www.xuanlp.com/category-1085-sc11020301-catogry_type.html?fm=mainnav" title="装饰-钟表-无框画钟">无框画钟</a></p>
                <p><a href="http://www.xuanlp.com/category-1086-sc11020302-catogry_type.html?fm=mainnav" title="装饰-钟表-挂钟">挂钟</a></p>
                <p><a href="http://www.xuanlp.com/category-1087-sc11020303-catogry_type.html?fm=mainnav" title="装饰-钟表-桌面钟/闹钟">桌面钟/闹钟</a></p>
         
      </dd>
            <dd style="height:202px;" onmouseover="$(this).parent().show();$(this).parent().parent().find('.nav_a').addClass('on');"> <span><a href="http://www.xuanlp.com/category-1088-sc110204-catogry_type.html?fm=mainnav" title="装饰-布艺软饰">布艺软饰</a></span> 
                <p><a href="http://www.xuanlp.com/category-1089-sc11020401-catogry_type.html?fm=mainnav" title="装饰-布艺软饰-地毯/地垫">地毯/地垫</a></p>
                <p><a href="http://www.xuanlp.com/category-1094-sc11020402-catogry_type.html?fm=mainnav" title="装饰-布艺软饰-靠垫/抱枕">靠垫/抱枕</a></p>
                <p><a href="http://www.xuanlp.com/category-1465-sc11020406-catogry_type.html?fm=mainnav" title="装饰-布艺软饰-桌巾/桌布">桌巾/桌布</a></p>
                <p><a href="http://www.xuanlp.com/category-1238-sc11020404-catogry_type.html?fm=mainnav" title="装饰-布艺软饰-公仔">公仔</a></p>
         
      </dd>
            <dd style="height:202px;" onmouseover="$(this).parent().show();$(this).parent().parent().find('.nav_a').addClass('on');"> <span><a href="http://www.xuanlp.com/category-1100-sc110205-catogry_type.html?fm=mainnav" title="装饰-摆件/挂件">摆件/挂件</a></span> 
                <p><a href="http://www.xuanlp.com/category-1300-sc11020509-catogry_type.html?fm=mainnav" title="装饰-摆件/挂件-存钱罐">存钱罐</a></p>
                <p><a href="http://www.xuanlp.com/category-1102-sc11020502-catogry_type.html?fm=mainnav" title="装饰-摆件/挂件-仿真花/器">仿真花/器</a></p>
                <p><a href="http://www.xuanlp.com/category-1104-sc11020504-catogry_type.html?fm=mainnav" title="装饰-摆件/挂件-桌面摆件">桌面摆件</a></p>
                <p><a href="http://www.xuanlp.com/category-1290-sc11020508-catogry_type.html?fm=mainnav" title="装饰-摆件/挂件-相框">相框</a></p>
                <p><a href="http://www.xuanlp.com/category-1467-sc11020507-catogry_type.html?fm=mainnav" title="装饰-摆件/挂件-挂件">挂件</a></p>
         
      </dd>
            </dl>
      </li>
       
      <li class="nav_li"> 
       
      <a class="nav_a" href="http://www.xuanlp.com/category-867-sc1103-channel.html?fm=mainnav" title="厨浴" onmouseover="$('.nav_a').removeClass('on');$(this).addClass('on');$('.nav_pop').hide();$(this).parent().find('.nav_pop').show();">厨浴</a> 
       
      <dl class="nav_pop pop_right" style="width: 512px; height: 222px; display: none;" onmouseout="$(this).hide();$('.nav_a').removeClass('on');"> 
            <dd style="height:202px;" onmouseover="$(this).parent().show();$(this).parent().parent().find('.nav_a').addClass('on');"> <span><a href="http://www.xuanlp.com/category-926-sc110304-catogry_type.html?fm=mainnav" title="厨浴-水具">水具</a></span> 
                <p><a href="http://www.xuanlp.com/category-927-sc11030401-catogry_type.html?fm=mainnav" title="厨浴-水具-杯具">杯具</a></p>
                <p><a href="http://www.xuanlp.com/category-934-sc11030402-catogry_type.html?fm=mainnav" title="厨浴-水具-壶/套装">壶/套装</a></p>
                <p><a href="http://www.xuanlp.com/category-1356-sc11030405-catogry_type.html?fm=mainnav" title="厨浴-水具-水净化">水净化</a></p>
                <p><a href="http://www.xuanlp.com/category-935-sc11030403-catogry_type.html?fm=mainnav" title="厨浴-水具-杯垫盖/附件">杯垫盖/附件</a></p>
         
      </dd>
            <dd style="height:202px;" onmouseover="$(this).parent().show();$(this).parent().parent().find('.nav_a').addClass('on');"> <span><a href="http://www.xuanlp.com/category-889-sc110302-catogry_type.html?fm=mainnav" title="厨浴-厨房器具">厨房器具</a></span> 
                <p><a href="http://www.xuanlp.com/category-903-sc11030205-catogry_type.html?fm=mainnav" title="厨浴-厨房器具-储物器皿">储物器皿</a></p>
                <p><a href="http://www.xuanlp.com/category-1485-sc11030207-catogry_type.html?fm=mainnav" title="厨浴-厨房器具-锅/壶/煲">锅/壶/煲</a></p>
                <p><a href="http://www.xuanlp.com/category-912-sc11030201-catogry_type.html?fm=mainnav" title="厨浴-厨房器具-小电器">小电器</a></p>
                <p><a href="http://www.xuanlp.com/category-907-sc11030206-catogry_type.html?fm=mainnav" title="厨浴-厨房器具-清洁用品">清洁用品</a></p>
                <p><a href="http://www.xuanlp.com/category-893-sc11030204-catogry_type.html?fm=mainnav" title="厨浴-厨房器具-小工具">小工具</a></p>
         
      </dd>
            <dd style="height:202px;" onmouseover="$(this).parent().show();$(this).parent().parent().find('.nav_a').addClass('on');"> <span><a href="http://www.xuanlp.com/category-868-sc110301-catogry_type.html?fm=mainnav" title="厨浴-卫浴用品">卫浴用品</a></span> 
                <p><a href="http://www.xuanlp.com/category-869-sc11030101-catogry_type.html?fm=mainnav" title="厨浴-卫浴用品-香皂/浴盐">香皂/浴盐</a></p>
                <p><a href="http://www.xuanlp.com/category-1173-sc11030112-catogry_type.html?fm=mainnav" title="厨浴-卫浴用品-卫浴置物">卫浴置物</a></p>
                <p><a href="http://www.xuanlp.com/category-1143-sc11030110-catogry_type.html?fm=mainnav" title="厨浴-卫浴用品-浴球/浴绵">浴球/浴绵</a></p>
                <p><a href="http://www.xuanlp.com/category-883-sc11030107-catogry_type.html?fm=mainnav" title="厨浴-卫浴用品-浴帘/防滑垫">浴帘/防滑垫</a></p>
                <p><a href="http://www.xuanlp.com/category-882-sc11030106-catogry_type.html?fm=mainnav" title="厨浴-卫浴用品-马桶贴/垫">马桶贴/垫</a></p>
         
      </dd>
            <dd style="height:202px;" onmouseover="$(this).parent().show();$(this).parent().parent().find('.nav_a').addClass('on');"> <span><a href="http://www.xuanlp.com/category-913-sc110303-catogry_type.html?fm=mainnav" title="厨浴-餐具">餐具</a></span> 
                <p><a href="http://www.xuanlp.com/category-920-sc11030303-catogry_type.html?fm=mainnav" title="厨浴-餐具-碗/盘">碗/盘</a></p>
                <p><a href="http://www.xuanlp.com/category-915-sc11030302-catogry_type.html?fm=mainnav" title="厨浴-餐具-筷子/勺子">筷子/勺子</a></p>
                <p><a href="http://www.xuanlp.com/category-925-sc11030305-catogry_type.html?fm=mainnav" title="厨浴-餐具-便当盒">便当盒</a></p>
                <p><a href="http://www.xuanlp.com/category-914-sc11030301-catogry_type.html?fm=mainnav" title="厨浴-餐具-餐桌配件">餐桌配件</a></p>
         
      </dd>
            </dl>
      </li>
       
      <li class="nav_li"> 
       
      <a class="nav_a" href="http://www.xuanlp.com/category-937-sc1104-channel.html?fm=mainnav" title="办公" onmouseover="$('.nav_a').removeClass('on');$(this).addClass('on');$('.nav_pop').hide();$(this).parent().find('.nav_pop').show();">办公</a> 
       
      <dl class="nav_pop pop_right" style="width: 384px; height: 286px; display: none;" onmouseout="$(this).hide();$('.nav_a').removeClass('on');"> 
            <dd style="height:266px;" onmouseover="$(this).parent().show();$(this).parent().parent().find('.nav_a').addClass('on');"> <span><a href="http://www.xuanlp.com/category-938-sc110401-catogry_type.html?fm=mainnav" title="办公-文具">文具</a></span> 
                <p><a href="http://www.xuanlp.com/category-1190-sc11040106-catogry_type.html?fm=mainnav" title="办公-文具-笔具">笔具</a></p>
                <p><a href="http://www.xuanlp.com/category-947-sc11040102-catogry_type.html?fm=mainnav" title="办公-文具-本簿/相册">本簿/相册</a></p>
                <p><a href="http://www.xuanlp.com/category-1283-sc11040108-catogry_type.html?fm=mainnav" title="办公-文具-书签/明信片/印章">书签/明信片/印章</a></p>
                <p><a href="http://www.xuanlp.com/category-958-sc11040104-catogry_type.html?fm=mainnav" title="办公-文具-桌面用品">桌面用品</a></p>
                <p><a href="http://www.xuanlp.com/category-953-sc11040107-catogry_type.html?fm=mainnav" title="办公-文具-办公储物">办公储物</a></p>
         
      </dd>
            <dd style="height:266px;" onmouseover="$(this).parent().show();$(this).parent().parent().find('.nav_a').addClass('on');"> <span><a href="http://www.xuanlp.com/category-967-sc110402-catogry_type.html?fm=mainnav" title="办公-电脑/数码周边">电脑/数码周边</a></span> 
                <p><a href="http://www.xuanlp.com/category-1241-sc11040208-catogry_type.html?fm=mainnav" title="办公-电脑/数码周边-Apple周边">Apple周边</a></p>
                <p><a href="http://www.xuanlp.com/category-968-sc11040201-catogry_type.html?fm=mainnav" title="办公-电脑/数码周边-创意U盘">创意U盘</a></p>
                <p><a href="http://www.xuanlp.com/category-972-sc11040202-catogry_type.html?fm=mainnav" title="办公-电脑/数码周边-鼠标/键盘">鼠标/键盘</a></p>
                <p><a href="http://www.xuanlp.com/category-1204-sc11040204-catogry_type.html?fm=mainnav" title="办公-电脑/数码周边-音箱/耳机">音箱/耳机</a></p>
                <p><a href="http://www.xuanlp.com/category-976-sc11040203-catogry_type.html?fm=mainnav" title="办公-电脑/数码周边-鼠标垫/护腕">鼠标垫/护腕</a></p>
                <p><a href="http://www.xuanlp.com/category-985-sc11040206-catogry_type.html?fm=mainnav" title="办公-电脑/数码周边-电脑桌/散热架">电脑桌/散热架</a></p>
                <p><a href="http://www.xuanlp.com/category-990-sc11040207-catogry_type.html?fm=mainnav" title="办公-电脑/数码周边-趣味周边">趣味周边</a></p>
         
      </dd>
            <dd style="height:266px;" onmouseover="$(this).parent().show();$(this).parent().parent().find('.nav_a').addClass('on');"> <span><a href="http://www.xuanlp.com/category-977-sc110404-catogry_type.html?fm=mainnav" title="办公-USB/玩意电子">USB/玩意电子</a></span> 
                <p><a href="http://www.xuanlp.com/category-1177-sc11040405-catogry_type.html?fm=mainnav" title="办公-USB/玩意电子-保暖设备">保暖设备</a></p>
                <p><a href="http://www.xuanlp.com/category-1178-sc11040406-catogry_type.html?fm=mainnav" title="办公-USB/玩意电子-加热设备">加热设备</a></p>
                <p><a href="http://www.xuanlp.com/category-979-sc11040402-catogry_type.html?fm=mainnav" title="办公-USB/玩意电子-LED灯">LED灯</a></p>
                <p><a href="http://www.xuanlp.com/category-981-sc11040404-catogry_type.html?fm=mainnav" title="办公-USB/玩意电子-氧吧/加湿器">氧吧/加湿器</a></p>
                <p><a href="http://www.xuanlp.com/category-984-sc11040403-catogry_type.html?fm=mainnav" title="办公-USB/玩意电子-HUB/读卡器">HUB/读卡器</a></p>
                <p><a href="http://www.xuanlp.com/category-978-sc11040415-catogry_type.html?fm=mainnav" title="办公-USB/玩意电子-小风扇">小风扇</a></p>
         
      </dd>
            </dl>
      </li>
       
      <li class="nav_li"> 
       
      <a class="nav_a" href="http://www.xuanlp.com/category-997-sc1105-channel.html?fm=mainnav" title="休闲" onmouseover="$('.nav_a').removeClass('on');$(this).addClass('on');$('.nav_pop').hide();$(this).parent().find('.nav_pop').show();">休闲</a> 
       
      <dl class="nav_pop pop_right" style="width: 512px; height: 318px; display: none;" onmouseout="$(this).hide();$('.nav_a').removeClass('on');"> 
            <dd style="height:298px;" onmouseover="$(this).parent().show();$(this).parent().parent().find('.nav_a').addClass('on');"> <span><a href="http://www.xuanlp.com/category-998-sc110501-catogry_type.html?fm=mainnav" title="休闲-汽车用品">汽车用品</a></span> 
                <p><a href="http://www.xuanlp.com/category-1370-sc11050109-catogry_type.html?fm=mainnav" title="休闲-汽车用品-电子设备">电子设备</a></p>
                <p><a href="http://www.xuanlp.com/category-1367-sc11050111-catogry_type.html?fm=mainnav" title="休闲-汽车用品-汽车内饰">汽车内饰</a></p>
                <p><a href="http://www.xuanlp.com/category-999-sc11050101-catogry_type.html?fm=mainnav" title="休闲-汽车用品-车用收纳">车用收纳</a></p>
                <p><a href="http://www.xuanlp.com/category-1001-sc11050103-catogry_type.html?fm=mainnav" title="休闲-汽车用品-香水/净化">香水/净化</a></p>
                <p><a href="http://www.xuanlp.com/category-1003-sc11050105-catogry_type.html?fm=mainnav" title="休闲-汽车用品-常用工具">常用工具</a></p>
         
      </dd>
            <dd style="height:298px;" onmouseover="$(this).parent().show();$(this).parent().parent().find('.nav_a').addClass('on');"> <span><a href="http://www.xuanlp.com/category-1005-sc110502-catogry_type.html?fm=mainnav" title="休闲-运动旅行户外">运动旅行户外</a></span> 
                <p><a href="http://www.xuanlp.com/category-1010-sc11050205-catogry_type.html?fm=mainnav" title="休闲-运动旅行户外-野营工具">野营工具</a></p>
                <p><a href="http://www.xuanlp.com/category-1487-sc11050208-catogry_type.html?fm=mainnav" title="休闲-运动旅行户外-商旅用品">商旅用品</a></p>
                <p><a href="http://www.xuanlp.com/category-1008-sc11050203-catogry_type.html?fm=mainnav" title="休闲-运动旅行户外-露营用品">露营用品</a></p>
                <p><a href="http://www.xuanlp.com/category-1009-sc11050204-catogry_type.html?fm=mainnav" title="休闲-运动旅行户外-便携包/袋">便携包/袋</a></p>
                <p><a href="http://www.xuanlp.com/category-1398-sc11050211-catogry_type.html?fm=mainnav" title="休闲-运动旅行户外-健身塑形">健身塑形</a></p>
                <p><a href="http://www.xuanlp.com/category-1011-sc11050206-catogry_type.html?fm=mainnav" title="休闲-运动旅行户外-防护急救">防护急救</a></p>
         
      </dd>
            <dd style="height:298px;" onmouseover="$(this).parent().show();$(this).parent().parent().find('.nav_a').addClass('on');"> <span><a href="http://www.xuanlp.com/category-1012-sc110503-catogry_type.html?fm=mainnav" title="休闲-玩具">玩具</a></span> 
                <p><a href="http://www.xuanlp.com/category-1013-sc11050306-catogry_type.html?fm=mainnav" title="休闲-玩具-桌游/棋牌">桌游/棋牌</a></p>
                <p><a href="http://www.xuanlp.com/category-1439-sc11050301-catogry_type.html?fm=mainnav" title="休闲-玩具-怀旧玩具">怀旧玩具</a></p>
                <p><a href="http://www.xuanlp.com/category-1424-sc11050313-catogry_type.html?fm=mainnav" title="休闲-玩具-拼图/绘画">拼图/绘画</a></p>
                <p><a href="http://www.xuanlp.com/category-1007-sc11050302-catogry_type.html?fm=mainnav" title="休闲-玩具-电子/电动">电子/电动</a></p>
                <p><a href="http://www.xuanlp.com/category-1015-sc11050303-catogry_type.html?fm=mainnav" title="休闲-玩具-遥控/车模">遥控/车模</a></p>
                <p><a href="http://www.xuanlp.com/category-1418-sc11050309-catogry_type.html?fm=mainnav" title="休闲-玩具-科学/智力">科学/智力</a></p>
                <p><a href="http://www.xuanlp.com/category-1411-sc11050308-catogry_type.html?fm=mainnav" title="休闲-玩具-运动玩具">运动玩具</a></p>
                <p><a href="http://www.xuanlp.com/category-1016-sc11050304-catogry_type.html?fm=mainnav" title="休闲-玩具-动漫周边">动漫周边</a></p>
         
      </dd>
            <dd style="height:298px;" onmouseover="$(this).parent().show();$(this).parent().parent().find('.nav_a').addClass('on');"> <span><a href="http://www.xuanlp.com/category-993-sc110504-catogry_type.html?fm=mainnav" title="休闲-健康减压">健康减压</a></span> 
                <p><a href="http://www.xuanlp.com/category-994-sc11050401-catogry_type.html?fm=mainnav" title="休闲-健康减压-迷你植物">迷你植物</a></p>
                <p><a href="http://www.xuanlp.com/category-995-sc11050402-catogry_type.html?fm=mainnav" title="休闲-健康减压-减压玩物">减压玩物</a></p>
         
      </dd>
            </dl>
      </li>
       
      <li class="nav_li" style="border-right:none;"> 
       
      <a class="nav_a" href="http://www.xuanlp.com/category-1017-sc1106-channel.html?fm=mainnav" title="潮流" onmouseover="$('.nav_a').removeClass('on');$(this).addClass('on');$('.nav_pop').hide();$(this).parent().find('.nav_pop').show();">潮流</a> 
       
      <dl class="nav_pop pop_left" style="width: 512px; height: 254px; display: none;" onmouseout="$(this).hide();$('.nav_a').removeClass('on');"> 
            <dd style="height:234px;" onmouseover="$(this).parent().show();$(this).parent().parent().find('.nav_a').addClass('on');"> <span><a href="http://www.xuanlp.com/category-1018-sc110601-catogry_type.html?fm=mainnav" title="潮流-随身配饰">随身配饰</a></span> 
                <p><a href="http://www.xuanlp.com/category-1235-sc11060105-catogry_type.html?fm=mainnav" title="潮流-随身配饰-饰品">饰品</a></p>
                <p><a href="http://www.xuanlp.com/category-1019-sc11060107-catogry_type.html?fm=mainnav" title="潮流-随身配饰-手机配饰">手机配饰</a></p>
                <p><a href="http://www.xuanlp.com/category-1022-sc11060102-catogry_type.html?fm=mainnav" title="潮流-随身配饰-钥匙扣">钥匙扣</a></p>
                <p><a href="http://www.xuanlp.com/category-1024-sc11060104-catogry_type.html?fm=mainnav" title="潮流-随身配饰-镜子/梳子">镜子/梳子</a></p>
                <p><a href="http://www.xuanlp.com/category-1028-sc11060106-catogry_type.html?fm=mainnav" title="潮流-随身配饰-卡贴">卡贴</a></p>
         
      </dd>
            <dd style="height:234px;" onmouseover="$(this).parent().show();$(this).parent().parent().find('.nav_a').addClass('on');"> <span><a href="http://www.xuanlp.com/category-1029-sc110602-catogry_type.html?fm=mainnav" title="潮流-个性装备">个性装备</a></span> 
                <p><a href="http://www.xuanlp.com/category-1047-sc11060205-catogry_type.html?fm=mainnav" title="潮流-个性装备-手套">手套</a></p>
                <p><a href="http://www.xuanlp.com/category-1050-sc11060208-catogry_type.html?fm=mainnav" title="潮流-个性装备-相机">相机</a></p>
                <p><a href="http://www.xuanlp.com/category-1246-sc11060211-catogry_type.html?fm=mainnav" title="潮流-个性装备-Apple周边">Apple周边</a></p>
                <p><a href="http://www.xuanlp.com/category-1030-sc11060201-catogry_type.html?fm=mainnav" title="潮流-个性装备-手表">手表</a></p>
                <p><a href="http://www.xuanlp.com/category-1048-sc11060206-catogry_type.html?fm=mainnav" title="潮流-个性装备-雨伞">雨伞</a></p>
                <p><a href="http://www.xuanlp.com/category-1254-sc11060209-catogry_type.html?fm=mainnav" title="潮流-个性装备-腰带/帽子/围巾">腰带/帽子/围巾</a></p>
         
      </dd>
            <dd style="height:234px;" onmouseover="$(this).parent().show();$(this).parent().parent().find('.nav_a').addClass('on');"> <span><a href="http://www.xuanlp.com/category-1051-sc110603-catogry_type.html?fm=mainnav" title="潮流-包">包</a></span> 
                <p><a href="http://www.xuanlp.com/category-1052-sc11060301-catogry_type.html?fm=mainnav" title="潮流-包-单肩包">单肩包</a></p>
                <p><a href="http://www.xuanlp.com/category-1057-sc11060302-catogry_type.html?fm=mainnav" title="潮流-包-双肩包">双肩包</a></p>
                <p><a href="http://www.xuanlp.com/category-1251-sc11060305-catogry_type.html?fm=mainnav" title="潮流-包-手提包">手提包</a></p>
                <p><a href="http://www.xuanlp.com/category-1252-sc11060306-catogry_type.html?fm=mainnav" title="潮流-包-斜挎包">斜挎包</a></p>
                <p><a href="http://www.xuanlp.com/category-1060-sc11060303-catogry_type.html?fm=mainnav" title="潮流-包-钱包卡包">钱包卡包</a></p>
                <p><a href="http://www.xuanlp.com/category-1065-sc11060304-catogry_type.html?fm=mainnav" title="潮流-包-数码包">数码包</a></p>
         
      </dd>
            <dd style="height:234px;" onmouseover="$(this).parent().show();$(this).parent().parent().find('.nav_a').addClass('on');"> <span><a href="http://www.xuanlp.com/category-1224-sc110604-catogry_type.html?fm=mainnav" title="潮流-手工/玩具">手工/玩具</a></span> 
                <p><a href="http://www.xuanlp.com/category-1464-sc11060424-catogry_type.html?fm=mainnav" title="潮流-手工/玩具-设计师手工">设计师手工</a></p>
                <p><a href="http://www.xuanlp.com/category-1253-sc11060407-catogry_type.html?fm=mainnav" title="潮流-手工/玩具-怀旧玩具">怀旧玩具</a></p>
                <p><a href="http://www.xuanlp.com/category-1225-sc11060401-catogry_type.html?fm=mainnav" title="潮流-手工/玩具-涂鸦">涂鸦</a></p>
                <p><a href="http://www.xuanlp.com/category-1237-sc11060406-catogry_type.html?fm=mainnav" title="潮流-手工/玩具-模型">模型</a></p>
                <p><a href="http://www.xuanlp.com/category-1226-sc11060402-catogry_type.html?fm=mainnav" title="潮流-手工/玩具-布艺">布艺</a></p>
         
      </dd>
            </dl>
      </li-->
	  
          </ul>
    <script> </script>
    <ul id="nav_cartbox">
      <li class="nav_cart"><?php 
$k = array (
  'name' => 'cart_info2',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> 
    </ul>
  </div>
  <!--<div id="nav_off"></div>--> 
</div>
<div id="nav_off" style="line-height:0; height:0;"> 
  
  <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=10,0,0,0" id="cache1" align="middle" height="1" width="1">
    <param name="allowScriptAccess" value="sameDomain">
    <param name="allowFullScreen" value="false">
    <param name="movie" value="cache.swf">
    <param name="quality" value="high">
    <param name="bgcolor" value="#ff0000">
    <embed src="themes/default/images/cache.swf" quality="high" bgcolor="#ffffff" id="cache2" allowscriptaccess="always" allowfullscreen="false" type="application/x-shockwave-flash" pluginspage="http://www.adobe.com/go/getflashplayer_cn" align="middle" height="1" width="1">
  </object>
   
</div>

<div class="sobox">
	<div class="so">
       <form id="searchForm" name="searchForm" method="get" action="search.php" onsubmit="return checkSearchFormAction();">
          <input name="keywords" id="so_txt" value="吹风机" onfocus="javascript:if(this.value=='吹风机')this.value='';" onblur="javascript:if(this.value=='')this.value='吹风机'" title="可输入商品名称、商品ID、商品品牌进行搜索" type="text"><input id="so_btn" value="" title="可输入商品名称、商品ID、商品品牌进行搜索" type="submit">
    <?php if ($this->_var['searchkeywords']): ?>
   <?php $_from = $this->_var['searchkeywords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?>
   <!--a href="search.php?keywords=<?php echo urlencode($this->_var['val']); ?>"><?php echo $this->_var['val']; ?></a-->
   <a href="javascript:search_kwords('<?php echo urlencode($this->_var['val']); ?>')"><?php echo $this->_var['val']; ?></a>
   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
   <?php endif; ?>
        </form>
	</div> 
</div>
<div style="margin: 0 auto;width:960px;">
