

<div id="links" class="box">
<?php echo $this->_var['copyright']; ?> <span>|</span>
   <?php if ($this->_var['navigator_list']['bottom']): ?>
   <?php $_from = $this->_var['navigator_list']['bottom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav_0_41563600_1320792871');$this->_foreach['nav_bottom_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_bottom_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav_0_41563600_1320792871']):
        $this->_foreach['nav_bottom_list']['iteration']++;
?>
        <a href="<?php echo $this->_var['nav_0_41563600_1320792871']['url']; ?>" <?php if ($this->_var['nav_0_41563600_1320792871']['opennew'] == 1): ?> target="_blank" <?php endif; ?>><?php echo $this->_var['nav_0_41563600_1320792871']['name']; ?></a>
        <?php if (! ($this->_foreach['nav_bottom_list']['iteration'] == $this->_foreach['nav_bottom_list']['total'])): ?>
           <span>|</span>
        <?php endif; ?>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  <?php endif; ?>
 </div>
</div>

<div class="blank"></div>

<div id="footer">
 <div class="text">
 <?php echo $this->_var['shop_address']; ?> <?php echo $this->_var['shop_postcode']; ?>
 <?php if ($this->_var['service_phone']): ?>
      Tel: <?php echo $this->_var['service_phone']; ?>
 <?php endif; ?>
 <?php if ($this->_var['service_email']): ?>
      E-mail: <?php echo $this->_var['service_email']; ?><br />
 <?php endif; ?>
 <?php $_from = $this->_var['qq']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?>
      <?php if ($this->_var['im']): ?>
      <a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=<?php echo $this->_var['im']; ?>&amp;Site=<?php echo $this->_var['shop_name']; ?>&amp;Menu=yes" target="_blank"><img src="http://wpa.qq.com/pa?p=1:<?php echo $this->_var['im']; ?>:4" height="16" border="0" alt="QQ" /> <?php echo $this->_var['im']; ?></a>
      <?php endif; ?>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      <?php $_from = $this->_var['ww']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?>
      <?php if ($this->_var['im']): ?>
      <a href="http://amos1.taobao.com/msg.ww?v=2&uid=<?php echo urlencode($this->_var['im']); ?>&s=2" target="_blank"><img src="http://amos1.taobao.com/online.ww?v=2&uid=<?php echo urlencode($this->_var['im']); ?>&s=2" width="16" height="16" border="0" alt="淘宝旺旺" /><?php echo $this->_var['im']; ?></a>
      <?php endif; ?>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      <?php $_from = $this->_var['ym']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?>
      <?php if ($this->_var['im']): ?>
      <a href="http://edit.yahoo.com/config/send_webmesg?.target=<?php echo $this->_var['im']; ?>n&.src=pg" target="_blank"><img src="themes/default/images/yahoo.gif" width="18" height="17" border="0" alt="Yahoo Messenger" /> <?php echo $this->_var['im']; ?></a>
      <?php endif; ?>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      <?php $_from = $this->_var['msn']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?>
      <?php if ($this->_var['im']): ?>
      <img src="themes/default/images/msn.gif" width="18" height="17" border="0" alt="MSN" /> <a href="msnim:chat?contact=<?php echo $this->_var['im']; ?>"><?php echo $this->_var['im']; ?></a>
      <?php endif; ?>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      <?php $_from = $this->_var['skype']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'im');if (count($_from)):
    foreach ($_from AS $this->_var['im']):
?>
      <?php if ($this->_var['im']): ?>
      <img src="http://mystatus.skype.com/smallclassic/<?php echo urlencode($this->_var['im']); ?>" alt="Skype" /><a href="skype:<?php echo urlencode($this->_var['im']); ?>?call"><?php echo $this->_var['im']; ?></a>
      <?php endif; ?>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <?php if ($this->_var['stats_code']): ?>
    <span><?php echo $this->_var['stats_code']; ?></span>
    <?php endif; ?>
  <br />
  <?php if ($this->_var['icp_number']): ?>
  <?php echo $this->_var['lang']['icp_number']; ?>:<a href="http://www.miibeian.gov.cn/" target="_blank"><?php echo $this->_var['icp_number']; ?></a><br />
  <?php endif; ?>
  <!--
  <?php $_from = $this->_var['lang']['p_y']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'pv');if (count($_from)):
    foreach ($_from AS $this->_var['pv']):
?><?php echo $this->_var['pv']; ?><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?><?php echo $this->_var['licensed']; ?><br />
  //-->
       <!--div align="center" style="padding-bottom:5px;" ><a href=" http://www.ecmoban.com" target="_blank"><img src="themes/default/images/ecmoban.gif" alt="ECShop模板" /></a></div-->
       
       <div class="blank"></div>
       
 </div>
</div>

  <script src="themes/default/images/c.html" language="JavaScript" charset="gb2312"></script>
</div>
<div style="left: 1194px; display: none;" class="scroll_div"></div>
<!--[if IE 6]><script type="text/javascript">try {document.execCommand('BackgroundImageCache', false, true);} catch(e) {}</script><![endif]--> 
 
 
<script type="text/javascript">
function showMeta()
{
  var metas = document.getElementsByTagName("meta");
  var strMeta=new String();
  var strTemp;
  for(var i=0;i < metas.length;i++)
  {
    if ('pagename' == metas[i].name)
    {
      var t = i;
      return metas[t].content;
    }
  }
  return 'others';
}
</script> 
 
 
<script type="text/javascript" src="themes/default/images/wly_tuijian.js"></script>
<script type="text/javascript" src="themes/default/images/wly_quwan.js"></script>
<script type="text/javascript" src="themes/default/images/js-clib.js" charset="UTF-8"></script>
<script type="text/javascript" src="themes/default/images/photo-switch.js" charset="UTF-8"></script>
<script type="text/javascript" src="themes/default/images/photo-move.js" charset="UTF-8"></script>
<script type="text/javascript">
$(document).ready(function(){  
   setHeadUserStatus();// 检测是否登录
   setHeadFlowNum();//购物车数量
});
</script>
<script type="text/javascript" src="themes/default/images/index.js" charset="UTF-8"></script>
<script type="text/javascript" charset="utf-8">
$(document).ready(function(){
$('.rank').find('dd').hover(function(){				  
	$('.rank').find('.rank_on').hide();
	$('.rank').find('.rank_off').show();		
	$(this).find('.rank_on').show();		  
	$(this).find('.rank_off').hide();	
	}, function(){});
$('#fbox').switchboxaction({Time:5000,SwitchTime:3000,switchindex:'#fbar',onclass:'fbar_on',SwitchMode:'Hover',AutoStart:true,SwitchEffect:'show'});
 if($.browser.msie&&$.browser.version=='6.0')
 {
$('#nbox').switchboxaction({Time:5000,SwitchTime:3000,switchindex:'#nbar',onclass:'nbar_on',SwitchMode:'Hover',AutoStart:true,SwitchEffect:'none'});
 }
 else
 {
$('#nbox').switchboxaction({Time:5000,SwitchTime:3000,switchindex:'#nbar',onclass:'nbar_on',SwitchMode:'Hover',AutoStart:true,SwitchEffect:'fadeOut'});	 
}
$(".brandlist").Slider({prevId:'.brand_left',nextId:'.brand_right',shownum:4,offbtn:'off_btn',offline:4});
  IndexgetTuanGouCountDown();//团购倒计时
});
</script>

<div style="left: 0px ! important; top: 109px ! important;" class="firebugResetStyles firebugBlockBackgroundColor firebugLayoutBox firebugLayoutBoxOffset"><div style="padding: 0px ! important; background-color: rgb(237, 255, 100) ! important;" class="firebugResetStyles firebugLayoutBox"><div style="padding: 0px ! important; background-color: rgb(68, 68, 68) ! important;" class="firebugResetStyles firebugLayoutBox"><div style="padding: 0px ! important; background-color: SlateBlue ! important;" class="firebugResetStyles firebugLayoutBox"><div style="width: 1425px ! important; height: 0px ! important; background-color: SkyBlue ! important;" class="firebugResetStyles firebugLayoutBox"></div></div></div></div></div>
