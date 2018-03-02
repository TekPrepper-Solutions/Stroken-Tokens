<?php /* Smarty version 2.6.20, created on 2017-12-11 12:42:17
         compiled from user_favorite_photos.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 't', 'user_favorite_photos.tpl', 15, false),array('modifier', 'escape', 'user_favorite_photos.tpl', 38, false),)), $this); ?>
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="visible-sm visible-xs">
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'quick_jumps.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			</div>		
			<div class="hidden-sm hidden-xs">
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'user_info.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			</div>
		</div>
		<div class="col-md-8">
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="pull-left">
						<?php echo $this->_tpl_vars['user']['username']; ?>
<?php if ($_SESSION['language'] == 'en_US'): ?>&#39;s<?php endif; ?> <?php echo smarty_function_t(array('c' => 'user.FAVORITE_PHOTOS'), $this);?>

					</div>
					<?php if (isset ( $_SESSION['uid'] ) && $_SESSION['uid'] == $this->_tpl_vars['user']['UID']): ?>
						<div class="pull-right">
							<a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/<?php echo $this->_tpl_vars['username']; ?>
/favorite/photos?clear=yes" title="<?php echo smarty_function_t(array('c' => 'favorite_photos.clear'), $this);?>
" onclick="javascript:return confirm('<?php echo smarty_function_t(array('c' => 'user.fav_photos_all'), $this);?>
');"><?php echo smarty_function_t(array('c' => 'global.clear_all'), $this);?>
</a>
						</div>
					<?php endif; ?>					
					<div class="clearfix"></div>
				</div>
			
            <?php if ($this->_tpl_vars['favorites']): ?>
				<div class="panel-body">
					<div id="remove_favorite_photo_message" class="m-t-15" style="display: none;"></div>
					<?php echo smarty_function_t(array('c' => 'global.showing'), $this);?>
 <span class="text-white"><?php echo $this->_tpl_vars['start_num']; ?>
</span> <?php echo smarty_function_t(array('c' => 'global.to'), $this);?>
 <span class="text-white"><?php echo $this->_tpl_vars['end_num']; ?>
</span> <?php echo smarty_function_t(array('c' => 'global.of'), $this);?>
 <span class="text-white"><?php echo $this->_tpl_vars['favorites_total']; ?>
</span> <?php echo smarty_function_t(array('c' => 'photo.photos'), $this);?>
.
					<div class="row">
								<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['favorites']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
									<?php if (( $this->_sections['i']['index'] % 3 == 0 ) && ( $this->_sections['i']['index'] <> 0 )): ?>
										</div><div class="row">
									<?php endif; ?>	
									<div id="favorite_photo_<?php echo $this->_tpl_vars['favorites'][$this->_sections['i']['index']]['PID']; ?>
" class="col-sm-4 m-t-15">
										<div class="thumb-overlay">
											<a href="<?php echo $this->_tpl_vars['relative']; ?>
/photo/<?php echo $this->_tpl_vars['favorites'][$this->_sections['i']['index']]['PID']; ?>
/">
												<div class="thumb-overlay">
													<img src="<?php echo $this->_tpl_vars['relative']; ?>
/media/photos/tmb/<?php echo $this->_tpl_vars['favorites'][$this->_sections['i']['index']]['PID']; ?>
.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['favorites'][$this->_sections['i']['index']]['caption'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" id="album_photo_<?php echo $this->_tpl_vars['favorites'][$this->_sections['i']['index']]['PID']; ?>
" class="img-responsive <?php if ($this->_tpl_vars['favorites'][$this->_sections['i']['index']]['type'] == 'private'): ?>img-private<?php endif; ?>" />
													<?php if ($this->_tpl_vars['favorites'][$this->_sections['i']['index']]['type'] == 'private'): ?><div class="label-private"><?php echo smarty_function_t(array('c' => 'global.PRIVATE'), $this);?>
</div><?php endif; ?>
												</div>
											</a>
											<?php if (isset ( $_SESSION['uid'] ) && $_SESSION['uid'] == $this->_tpl_vars['user']['UID']): ?>
												<div class="actions">
													<a href="#remove_photo" id="remove_photo_from_favorite_<?php echo $this->_tpl_vars['favorites'][$this->_sections['i']['index']]['PID']; ?>
" class="btn btn-danger btn-xs remove-btn hidden-xs"><?php echo smarty_function_t(array('c' => 'global.remove'), $this);?>
</a>
													<a href="#remove_photo" id="remove_photo_from_favorite_<?php echo $this->_tpl_vars['favorites'][$this->_sections['i']['index']]['PID']; ?>
" class="btn btn-danger remove-btn visible-xs"><i class="glyphicon glyphicon-remove"></i> <?php echo smarty_function_t(array('c' => 'global.remove'), $this);?>
</a>
												</div>
											<?php endif; ?>
										</div>
									</div>  
								<?php endfor; endif; ?>
					</div>
					<?php if ($this->_tpl_vars['page_link']): ?>
						<div style="text-align: center;" class="visible-xs">
							<ul class="pagination pagination-lg"><?php echo $this->_tpl_vars['page_link']; ?>
</ul>
						</div>
						<div style="text-align: center;" class="hidden-xs">
							<ul class="pagination"><?php echo $this->_tpl_vars['page_link']; ?>
</ul>
						</div>
					<?php endif; ?>
				</div>
			<?php else: ?>
				<div class="panel-body">
					<span class="text-danger"><?php echo smarty_function_t(array('c' => 'user.fav_photos_none'), $this);?>
.</span>
				</div>
			<?php endif; ?>	
			</div>	
		</div>
	</div>
</div>
