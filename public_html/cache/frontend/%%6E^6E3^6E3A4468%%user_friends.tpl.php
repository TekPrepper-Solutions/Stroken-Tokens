<?php /* Smarty version 2.6.20, created on 2017-12-11 09:54:59
         compiled from user_friends.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 't', 'user_friends.tpl', 14, false),array('function', 'url', 'user_friends.tpl', 21, false),array('modifier', 'escape', 'user_friends.tpl', 38, false),)), $this); ?>
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
					<?php echo $this->_tpl_vars['user']['username']; ?>
<?php if ($_SESSION['language'] == 'en_US'): ?>&#39;s<?php endif; ?> <?php echo smarty_function_t(array('c' => 'user.FRIENDS'), $this);?>

				</div>
				<div class="panel-body">
					<?php if ($this->_tpl_vars['friends']): ?>				
						<div class="btn-group">
							<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><?php if ($this->_tpl_vars['order'] == 'invite_date'): ?><?php echo smarty_function_t(array('c' => 'user.recent_friends'), $this);?>
<?php elseif ($this->_tpl_vars['order'] == 'recent_users'): ?><?php echo smarty_function_t(array('c' => 'user.recent_users'), $this);?>
<?php elseif ($this->_tpl_vars['order'] == 'recent_logins'): ?><?php echo smarty_function_t(array('c' => 'user.recent_logins'), $this);?>
<?php else: ?><?php echo smarty_function_t(array('c' => 'global.username'), $this);?>
<?php endif; ?> <span class="caret"></span></button>
							<ul class="dropdown-menu">
								<li <?php if ($this->_tpl_vars['order'] == 'invite_date'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => "user/".($this->_tpl_vars['username'])."/friends",'strip' => 'o','value' => 'invite_date'), $this);?>
"><?php echo smarty_function_t(array('c' => 'user.recent_friends'), $this);?>
</a></li>
								<li <?php if ($this->_tpl_vars['order'] == 'recent_users'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => "user/".($this->_tpl_vars['username'])."/friends",'strip' => 'o','value' => 'recent_users'), $this);?>
"><?php echo smarty_function_t(array('c' => 'user.recent_users'), $this);?>
</a></li>
								<li <?php if ($this->_tpl_vars['order'] == 'recent_logins'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => "user/".($this->_tpl_vars['username'])."/friends",'strip' => 'o','value' => 'recent_logins'), $this);?>
"><?php echo smarty_function_t(array('c' => 'user.recent_logins'), $this);?>
</a></li>
								<li <?php if ($this->_tpl_vars['order'] == 'username'): ?>class="active"<?php endif; ?>><a href="<?php echo smarty_function_url(array('base' => "user/".($this->_tpl_vars['username'])."/friends",'strip' => 'o','value' => 'username'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.username'), $this);?>
</a></li>							
							</ul>
						</div>				
						<div class="clearfix"></div>
						<div id="remove_friend_message" class="m-t-15" style="display:none"></div>
						<div class="m-t-15">
							<?php echo smarty_function_t(array('c' => 'global.showing'), $this);?>
 <span class="text-white"><?php echo $this->_tpl_vars['start_num']; ?>
</span> <?php echo smarty_function_t(array('c' => 'global.to'), $this);?>
 <span class="text-white"><?php echo $this->_tpl_vars['end_num']; ?>
</span> <?php echo smarty_function_t(array('c' => 'global.of'), $this);?>
 <span class="text-white"><?php echo $this->_tpl_vars['friends_total']; ?>
</span> <?php echo smarty_function_t(array('c' => 'global.friends'), $this);?>
.
						</div>
						<div class="row">
									<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['friends']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
										<div id="friend_<?php echo $this->_tpl_vars['friends'][$this->_sections['i']['index']]['FID']; ?>
" class="col-xs-6 col-md-3 m-t-15">
											<div class="thumb-overlay">
												<a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/<?php echo $this->_tpl_vars['friends'][$this->_sections['i']['index']]['username']; ?>
">
													<img src="<?php echo $this->_tpl_vars['relative']; ?>
/media/users/<?php if ($this->_tpl_vars['friends'][$this->_sections['i']['index']]['photo'] == ''): ?>nopic-<?php echo $this->_tpl_vars['friends'][$this->_sections['i']['index']]['gender']; ?>
.gif<?php else: ?><?php echo $this->_tpl_vars['friends'][$this->_sections['i']['index']]['photo']; ?>
<?php endif; ?>" alt="<?php echo $this->_tpl_vars['friends'][$this->_sections['i']['index']]['username']; ?>
's avatar" class="img-responsive"/>
													<div class="video-title title-truncate"><?php echo ((is_array($_tmp=$this->_tpl_vars['friends'][$this->_sections['i']['index']]['username'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</div>
												</a>
												<?php if (isset ( $_SESSION['uid'] ) && $_SESSION['uid'] == $this->_tpl_vars['user']['UID']): ?>
													<div class="actions">
														<a href="#remove_friend" id="remove_profile_friend_<?php echo $this->_tpl_vars['friends'][$this->_sections['i']['index']]['FID']; ?>
" class="btn btn-danger btn-xs remove-btn hidden-xs"><?php echo smarty_function_t(array('c' => 'global.remove'), $this);?>
</a>
														<a href="#remove_friend" id="remove_profile_friend_<?php echo $this->_tpl_vars['friends'][$this->_sections['i']['index']]['FID']; ?>
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
					<?php else: ?>
						<span class="text-danger"><?php echo smarty_function_t(array('c' => 'user.friends_none'), $this);?>
.</span>
					<?php endif; ?>
				</div>				
			</div>	
		</div>
	</div>
</div>
