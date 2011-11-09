</div>
<div id="foot">
  <div id="footer">
    <div id="phone"><a target="_blank" href="http://www.quwan.com/article-29.html"><img src="themes/default/images/public_bg.gif"></a></div>
    <div id="help_box">
<?php if ($this->_var['helps']): ?>
<?php $_from = $this->_var['helps']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'help_cat');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['help_cat']):
        $this->_foreach['no']['iteration']++;
?>
<dl  class="help" <?php if (! ($this->_foreach['no']['iteration'] == $this->_foreach['no']['total'])): ?>
             style="border-right:1px solid #ccc;"  
            <?php endif; ?>        >
  <dt><span class="help_<?php echo $this->_foreach['no']['iteration']; ?>"><?php echo $this->_var['help_cat']['cat_name']; ?></span></dt>
  <?php $_from = $this->_var['help_cat']['article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item_0_41220900_1320792871');if (count($_from)):
    foreach ($_from AS $this->_var['item_0_41220900_1320792871']):
?>
  <dd><a href="<?php echo $this->_var['item_0_41220900_1320792871']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['item_0_41220900_1320792871']['title']); ?>"><?php echo $this->_var['item_0_41220900_1320792871']['short_title']; ?></a></dd>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</dl>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<?php endif; ?>

      <div class="clear"></div>
    </div>
    <div class="clear"></div>
    <dl class="guarantee">
      <dt></dt>
      <dd><a class="guar_1"></a><a class="guar_2"></a><a class="guar_3"></a></dd>
    </dl>
      <div class="clear"></div>
    </div>



<div id="bottomNav" class="box">
 <div class="box_1">
  <div class="links clearfix"> 
<?php if ($this->_var['img_links'] || $this->_var['txt_links']): ?>
    <?php $_from = $this->_var['img_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?>
    <a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>"><img src="<?php echo $this->_var['link']['logo']; ?>" alt="<?php echo $this->_var['link']['name']; ?>" border="0" /></a>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    
    
    <?php if ($this->_var['txt_links']): ?>
    <?php $_from = $this->_var['txt_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?>
    [<a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>"><?php echo $this->_var['link']['name']; ?></a>]
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <?php endif; ?>
   

<?php endif; ?> 
 </div>
 </div>
</div>

<div class="blank"></div>
