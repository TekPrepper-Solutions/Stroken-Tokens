<?php /* Smarty version 2.6.20, created on 2017-12-11 09:53:05
         compiled from notices.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'notices.tpl', 4, false),array('modifier', 'clean', 'notices.tpl', 30, false),array('modifier', 'nl2br', 'notices.tpl', 34, false),array('modifier', 'date_format', 'notices.tpl', 80, false),array('function', 't', 'notices.tpl', 4, false),array('function', 'url', 'notices.tpl', 65, false),array('insert', 'time_range', 'notices.tpl', 23, false),)), $this); ?>
<div class="container">

	<div class="well well-md">
				<h4><?php echo ((is_array($_tmp=$this->_tpl_vars['site_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
 <?php echo smarty_function_t(array('c' => 'global.notices'), $this);?>
</h4>
	</div>
	
	<div class="row">
		<div class="col-md-9 col-sm-8">
            <?php if ($this->_tpl_vars['notices']): ?>
			<div class="well well-sm">
				<?php echo smarty_function_t(array('c' => 'global.showing'), $this);?>
 <span class="text-white"><?php echo $this->_tpl_vars['start_num']; ?>
</span> <?php echo smarty_function_t(array('c' => 'global.to'), $this);?>
 <span class="text-white"><?php echo $this->_tpl_vars['end_num']; ?>
</span> <?php echo smarty_function_t(array('c' => 'global.of'), $this);?>
 <span class="text-white"><?php echo $this->_tpl_vars['notices_total']; ?>
</span> <?php echo smarty_function_t(array('c' => 'notice.notices'), $this);?>
.
			</div>			
			<div class="row">
            <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['notices']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
				<div class="col-md-12">
					<div class="panel panel-default">
         
						<div class="panel-heading">
							<div class="pull-left">
								<a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/<?php echo $this->_tpl_vars['notices'][$this->_sections['i']['index']]['username']; ?>
"><img class="small-avatar" src="<?php echo $this->_tpl_vars['relative']; ?>
/media/users/<?php if ($this->_tpl_vars['notices'][$this->_sections['i']['index']]['photo'] == ''): ?>nopic-<?php echo $this->_tpl_vars['notices'][$this->_sections['i']['index']]['gender']; ?>
.gif<?php else: ?><?php echo $this->_tpl_vars['notices'][$this->_sections['i']['index']]['photo']; ?>
<?php endif; ?>" /><span><?php echo $this->_tpl_vars['notices'][$this->_sections['i']['index']]['username']; ?>
</span></a>
							</div>
							<div class="pull-right">
								<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'time_range', 'assign' => 'addtime', 'time' => $this->_tpl_vars['notices'][$this->_sections['i']['index']]['addtime'])), $this); ?>

								<?php echo $this->_tpl_vars['addtime']; ?>
							
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="panel-body">
							<div class="blog_header">
								<a href="<?php echo $this->_tpl_vars['relative']; ?>
/notice/<?php echo $this->_tpl_vars['notices'][$this->_sections['i']['index']]['NID']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['notices'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('clean', true, $_tmp) : smarty_modifier_clean($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['notices'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</a>
							</div>
							
							<div class="blog_content">
								<?php echo ((is_array($_tmp=$this->_tpl_vars['notices'][$this->_sections['i']['index']]['content'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

							</div>
						</div>
						
						<div class="panel-footer">
							<i class="fa fa-comment"></i> <a href="<?php echo $this->_tpl_vars['relative']; ?>
/notice/<?php echo $this->_tpl_vars['notices'][$this->_sections['i']['index']]['NID']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['notices'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('clean', true, $_tmp) : smarty_modifier_clean($_tmp)); ?>
"><?php echo $this->_tpl_vars['notices'][$this->_sections['i']['index']]['total_comments']; ?>
</a> <strong>&middot;</strong>
							<a href="<?php echo $this->_tpl_vars['relative']; ?>
/notice/<?php echo $this->_tpl_vars['notices'][$this->_sections['i']['index']]['NID']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['notices'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('clean', true, $_tmp) : smarty_modifier_clean($_tmp)); ?>
"><?php echo smarty_function_t(array('c' => 'blog.post_comment'), $this);?>
</a>                                
						</div>

						
					</div>				
				</div>			
            <?php endfor; endif; ?>
			
			</div>
            <?php else: ?>
			<div class="well well-sm">
				<span class="text-danger"><?php echo smarty_function_t(array('c' => 'notice.none'), $this);?>
.</span>
			</div>
            <?php endif; ?>	

			<?php if ($this->_tpl_vars['notices'] && $this->_tpl_vars['page_link']): ?>		
				<div style="text-align: center;" class="visible-xs">
					<ul class="pagination pagination-lg"><?php echo $this->_tpl_vars['page_link']; ?>
</ul>
				</div>
			<?php endif; ?>

		</div>
		
		<div class="col-md-3 col-sm-4">
			<div class="list-group">
				<a href="<?php echo smarty_function_url(array('base' => 'notices','strip' => 'c','value' => ""), $this);?>
" <?php if ($this->_tpl_vars['category'] == '0' || ! $this->_tpl_vars['category']): ?>class="list-group-item active"<?php else: ?>class="list-group-item"<?php endif; ?>>
					<?php echo smarty_function_t(array('c' => 'global.all'), $this);?>

				</a>
				<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['categories']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
				<a href="<?php echo smarty_function_url(array('base' => 'notices','strip' => 'c','value' => $this->_tpl_vars['categories'][$this->_sections['i']['index']]['category_id']), $this);?>
" <?php if ($this->_tpl_vars['category'] == $this->_tpl_vars['categories'][$this->_sections['i']['index']]['category_id']): ?>class="list-group-item active"<?php else: ?>class="list-group-item"<?php endif; ?>>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['categories'][$this->_sections['i']['index']]['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

				</a>
				<?php endfor; endif; ?>
			</div>
			<div class="list-group">
				<a href="<?php echo smarty_function_url(array('base' => 'notices','strip' => 't','value' => ""), $this);?>
" <?php if (! $this->_tpl_vars['timestamp']): ?>class="list-group-item active"<?php else: ?>class="list-group-item"<?php endif; ?>>
					<?php echo smarty_function_t(array('c' => 'global.all'), $this);?>

				</a>
				<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['arhive']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
				<a href="<?php echo smarty_function_url(array('base' => 'notices','strip' => 't','value' => $this->_tpl_vars['arhive'][$this->_sections['i']['index']]), $this);?>
" <?php if ($this->_tpl_vars['timestamp'] == $this->_tpl_vars['arhive'][$this->_sections['i']['index']]): ?>class="list-group-item active"<?php else: ?>class="list-group-item"<?php endif; ?>>
					<?php echo ((is_array($_tmp=$this->_tpl_vars['arhive'][$this->_sections['i']['index']])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%B %Y") : smarty_modifier_date_format($_tmp, "%B %Y")); ?>

				</a>
				<?php endfor; endif; ?>
			</div>			
		</div>
	</div>
	<?php if ($this->_tpl_vars['notices'] && $this->_tpl_vars['page_link']): ?>
		<div style="text-align: center;" class="hidden-xs">
			<ul class="pagination"><?php echo $this->_tpl_vars['page_link']; ?>
</ul>
		</div>
	<?php endif; ?>
</div>