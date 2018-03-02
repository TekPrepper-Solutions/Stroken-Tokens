<?php /* Smarty version 2.6.20, created on 2017-12-11 09:54:54
         compiled from user_wall.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 't', 'user_wall.tpl', 15, false),array('insert', 'time_range', 'user_wall.tpl', 65, false),array('modifier', 'nl2br', 'user_wall.tpl', 68, false),)), $this); ?>
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
            <?php if ($this->_tpl_vars['walls'] || ( isset ( $_SESSION['uid'] ) && $this->_tpl_vars['wall_comments'] == '1' )): ?>
					<div class="panel panel-default">           
						<div class="panel-heading">
							<?php echo $this->_tpl_vars['user']['username']; ?>
<?php if ($_SESSION['language'] == 'en_US'): ?>&#39;s<?php endif; ?> <?php echo smarty_function_t(array('c' => 'user.WALL'), $this);?>

						</div>
						<div class="panel-body">
						
							<?php if (isset ( $_SESSION['uid'] ) && $this->_tpl_vars['user']['UID'] && $this->_tpl_vars['wall_comments'] == '1'): ?>
							<div id="wall">
								<form class="form-horizontal" name="wall_form" id="wall_form" method="post" action="#post_comment">
									<div id="media_message" style="display: none;"></div>
									<div id="media_content" class="m-b-15" style="display: none;"></div>
									<div class="form-group">
										<div class="col-xs-12 col-sm-10 col-sm-offset-1">
											<textarea name="wall_comment" id="wall_comment" cols="75" rows="5" class="form-control" placeholder="<?php echo smarty_function_t(array('c' => 'global.add_comment'), $this);?>
"><?php echo $this->_tpl_vars['comment']; ?>
</textarea>
											<div id="post_message" class="text-danger m-t-5" style="display: none;"><?php echo smarty_function_t(array('c' => 'global.comment_empty'), $this);?>
</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-xs-12 col-sm-10 col-sm-offset-1">
											<div class="pull-left">
												<input name="submit_wall" type="submit" value=" <?php echo smarty_function_t(array('c' => 'global.post'), $this);?>
 " id="post_wall_comment_<?php echo $this->_tpl_vars['user']['UID']; ?>
" class="btn btn-primary">
												<a href="#attach_photo" id="attach_photo" class="btn btn-secondary m-l-5"><span class="visible-xs"><i class="fa fa-camera"></i></span><span class="hidden-xs"><?php echo smarty_function_t(array('c' => 'global.attach_photo'), $this);?>
</span></a>
												<a href="#attach_video" id="attach_video" class="btn btn-secondary m-l-5"><span class="visible-xs"><i class="fa fa-film"></i></span><span class="hidden-xs"><?php echo smarty_function_t(array('c' => 'global.attach_video'), $this);?>
</span></a>
											</div>
											<div class="pull-right">
												<span id="chars_left">1000</span> <?php echo smarty_function_t(array('c' => 'global.chars_left'), $this);?>

											</div>
											<div class="clearfix"></div>
										</div>
									</div>
								</form>
							</div>
							<?php endif; ?>
							
							<div id="wall_comments_<?php echo $this->_tpl_vars['user']['UID']; ?>
">
								<?php if ($this->_tpl_vars['walls']): ?>
									<?php echo smarty_function_t(array('c' => 'global.showing'), $this);?>
 <span class="text-white"><?php echo $this->_tpl_vars['start_num']; ?>
</span> <?php echo smarty_function_t(array('c' => 'global.to'), $this);?>
 <span id="end_num" class="text-white"><?php echo $this->_tpl_vars['end_num']; ?>
</span> <?php echo smarty_function_t(array('c' => 'global.of'), $this);?>
 <span id="total_comments" class="text-white"><?php echo $this->_tpl_vars['walls_total']; ?>
</span> <?php echo smarty_function_t(array('c' => 'global.comments'), $this);?>
.
								<?php endif; ?>
								<div id="wall_response" style="display: none;"><?php echo smarty_function_t(array('c' => 'global.posting'), $this);?>
</div>
								<div id="comments_delimiter" style="display:none;"></div>
								<?php if ($this->_tpl_vars['walls']): ?>
									<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['walls']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
										
										<div id="wall_comment_<?php echo $this->_tpl_vars['walls'][$this->_sections['i']['index']]['wall_id']; ?>
" class="col-xs-12 m-t-15">
											<div class="row">
												<div class="pull-left">
													<a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/<?php echo $this->_tpl_vars['walls'][$this->_sections['i']['index']]['username']; ?>
">
														<img src="<?php echo $this->_tpl_vars['relative']; ?>
/media/users/<?php if ($this->_tpl_vars['walls'][$this->_sections['i']['index']]['photo'] != ''): ?><?php echo $this->_tpl_vars['walls'][$this->_sections['i']['index']]['photo']; ?>
<?php else: ?>nopic-<?php echo $this->_tpl_vars['walls'][$this->_sections['i']['index']]['gender']; ?>
.gif<?php endif; ?>" title="<?php echo $this->_tpl_vars['walls'][$this->_sections['i']['index']]['username']; ?>
's avatar" alt="<?php echo $this->_tpl_vars['walls'][$this->_sections['i']['index']]['username']; ?>
's avatar" class="img-responsive comment-avatar" />
													</a>											
												</div>
												<div class="comment">
													<div class="comment-info">
														<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'time_range', 'assign' => 'addtime', 'time' => $this->_tpl_vars['walls'][$this->_sections['i']['index']]['addtime'])), $this); ?>

														<a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/<?php echo $this->_tpl_vars['walls'][$this->_sections['i']['index']]['username']; ?>
"><?php echo $this->_tpl_vars['walls'][$this->_sections['i']['index']]['username']; ?>
</a>&nbsp;-&nbsp;<span class=""><?php echo $this->_tpl_vars['addtime']; ?>
</span>
													</div>
													<div class="comment-body overflow-hidden"><?php echo ((is_array($_tmp=$this->_tpl_vars['walls'][$this->_sections['i']['index']]['message'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</div>
													<?php if (isset ( $_SESSION['uid'] )): ?>
														<div class="comment-actions">
															<?php if ($_SESSION['uid'] == $this->_tpl_vars['walls'][$this->_sections['i']['index']]['UID']): ?>
																<a href="#delete_comment" id="delete_comment_wall_<?php echo $this->_tpl_vars['walls'][$this->_sections['i']['index']]['wall_id']; ?>
_<?php echo $this->_tpl_vars['user']['UID']; ?>
"><?php echo smarty_function_t(array('c' => 'global.delete'), $this);?>
</a> <span id="delete_response_<?php echo $this->_tpl_vars['walls'][$this->_sections['i']['index']]['wall_id']; ?>
" style="display: none;"></span>
															<?php endif; ?>
															<?php if ($_SESSION['uid'] != $this->_tpl_vars['walls'][$this->_sections['i']['index']]['UID']): ?>
																<span id="reported_spam_<?php echo $this->_tpl_vars['walls'][$this->_sections['i']['index']]['wall_id']; ?>
_<?php echo $this->_tpl_vars['user']['UID']; ?>
"><a href="#report_spam" id="report_spam_wall_<?php echo $this->_tpl_vars['walls'][$this->_sections['i']['index']]['wall_id']; ?>
_<?php echo $this->_tpl_vars['user']['UID']; ?>
"><?php echo smarty_function_t(array('c' => 'global.report_spam'), $this);?>
</a></span>
															<?php endif; ?>
														</div>
													<?php endif; ?>
												</div>
												<div class="clearfix"></div>
											</div>
											
										</div>
										
									<?php endfor; endif; ?>

									<?php if ($this->_tpl_vars['page_link']): ?>
										<div class="visible-xs center m-b--15">
											<ul class="pagination pagination-lg"><?php echo $this->_tpl_vars['page_link']; ?>
</ul>
										</div>
										<div class="hidden-xs center m-b--15">
											<ul class="pagination"><?php echo $this->_tpl_vars['page_link']; ?>
</ul>
										</div>
									<?php endif; ?>
						
								<?php endif; ?>
							</div>
						</div>
					</div>
			<?php endif; ?>	

		</div>
	</div>
</div>
