
<dl class="cat">
			<dt><div class="fl cattdiv"><a class="ct0" target="_blank" href="<?php echo $this->_var['goods_cat']['url']; ?>"><?php echo $this->_var['goods_cat']['name']; ?></a></div>
    <div class="fl catta"> 
	 <?php if ($this->_var['goods_cat']['cat_id']): ?>
	    <?php $_from = $this->_var['goods_cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'rec_cat');if (count($_from)):
    foreach ($_from AS $this->_var['rec_cat']):
?>
	     <a href="<?php echo $this->_var['rec_cat']['url']; ?>"><?php echo $this->_var['rec_cat']['name']; ?></a>
	    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	 <?php endif; ?>
       
    </div>
    <span class="fl"><a class="more" href="<?php echo $this->_var['goods_cat']['url']; ?>" target="_blank"><?php echo $this->_var['lang']['all_goods']; ?></a></span>
    <div class="clear"></div>
	</dt>
	<dd>
		<!--div class="fl cat_left"> 
		  <a href="http://www.quwan.com/category-784-sc1101-channel.html?fm=mainnav&amp;fm=living" title="精品生态羊毛被" target="_blank"><img original="http://i2.quwan.com/images/index/201110/2/syd(2).jpg" src="themes/default/images/grey.gif" height="420" width="185"></a> 
		</div-->
		<div class="f1">
      <?php $_from = $this->_var['cat_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_60857100_1321235636');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_60857100_1321235636']):
?>
			<ul class="cat_ul">
        <li class="cat_img"> <a target="_blank" title="<?php echo htmlspecialchars($this->_var['goods_0_60857100_1321235636']['name']); ?>" href="<?php echo $this->_var['goods_0_60857100_1321235636']['url']; ?>"><img original="<?php echo $this->_var['goods_0_60857100_1321235636']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_60857100_1321235636']['name']); ?>" src="<?php echo $this->_var['goods_0_60857100_1321235636']['thumb']; ?>" height="140" width="140"></a> 
           
        </li>
        <li><a target="_blank" title="<?php echo htmlspecialchars($this->_var['goods_0_60857100_1321235636']['name']); ?>" href="<?php echo $this->_var['goods_0_60857100_1321235636']['url']; ?>"><?php echo htmlspecialchars($this->_var['goods_0_60857100_1321235636']['short_name']); ?></a></li>
        <li><span><?php echo $this->_var['goods_0_60857100_1321235636']['shop_price']; ?></span></li>
			</ul>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</div>
	<span class="clear"></span>
	</dd>
</dl>
