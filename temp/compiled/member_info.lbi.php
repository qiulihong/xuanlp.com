<div id="append_parent"></div>
<?php if ($this->_var['user_info']): ?>
<font style="position:relative; top:0px;">
<font class="f4_b"><?php echo $this->_var['user_info']['username']; ?></font>, <?php echo $this->_var['lang']['welcome_return']; ?>！
<a href="user.php"><?php echo $this->_var['lang']['user_center']; ?></a> | 
 <a href="user.php?act=logout"><?php echo $this->_var['lang']['user_logout']; ?></a>
</font>
<?php else: ?>
 <li><span><?php echo $this->_var['lang']['welcome']; ?>&nbsp;&nbsp;&nbsp;&nbsp;</span></li>
  <li id="login"><a href="user.php?act=login" class="red">登录</a></li>
  <li>|</li>
  <li id="register"><a href="user.php?act=register" class="red">注册&nbsp;&nbsp;</a></li>
<?php endif; ?>
