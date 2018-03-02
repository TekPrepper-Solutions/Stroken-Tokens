<?php /* Smarty version 2.6.20, created on 2018-01-04 22:23:38
         compiled from blog.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 't', 'blog.tpl', 2, false),array('modifier', 'truncate', 'blog.tpl', 23, false),array('modifier', 'clean', 'blog.tpl', 34, false),array('modifier', 'escape', 'blog.tpl', 34, false),array('modifier', 'nl2br', 'blog.tpl', 38, false),array('insert', 'time_range', 'blog.tpl', 26, false),)), $this); ?>
<script type="text/javascript">
var lang_posting = "<?php echo smarty_function_t(array('c' => 'global.posting'), $this);?>
";
var lang_comment_limit = "<?php echo smarty_function_t(array('c' => 'global.comment_limit'), $this);?>
";
var lang_comment_success = "<?php echo smarty_function_t(array('c' => 'global.comment_success'), $this);?>
";
</script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/js/jquery.blog-0.1.js"></script>

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
								<a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/<?php echo $this->_tpl_vars['user']['username']; ?>
"><img class="small-avatar" src="<?php echo $this->_tpl_vars['relative']; ?>
/media/users/<?php if ($this->_tpl_vars['user']['photo'] == ''): ?>nopic-<?php echo $this->_tpl_vars['user']['gender']; ?>
.gif<?php else: ?><?php echo $this->_tpl_vars['user']['photo']; ?>
<?php endif; ?>" /><span><?php echo ((is_array($_tmp=$this->_tpl_vars['username'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 25, "...") : smarty_modifier_truncate($_tmp, 25, "...")); ?>
</span></a>
							</div>						
							<div class="pull-right">
								<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'time_range', 'assign' => 'addtime', 'time' => $this->_tpl_vars['blog']['addtime'])), $this); ?>

								<?php echo $this->_tpl_vars['blog']['total_views']; ?>
 <?php echo smarty_function_t(array('c' => 'global.views'), $this);?>
 <strong>&middot;</strong> <?php echo $this->_tpl_vars['addtime']; ?>
								
							</div>

							<div class="clearfix"></div>
						</div>
						<div class="panel-body">
							<div class="blog_header">
								<a href="<?php echo $this->_tpl_vars['relative']; ?>
/blog/<?php echo $this->_tpl_vars['blog']['BID']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['blog']['title'])) ? $this->_run_mod_handler('clean', true, $_tmp) : smarty_modifier_clean($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['blog']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</a>							
							</div>
							
							<div class="blog_content">
								<?php echo ((is_array($_tmp=$this->_tpl_vars['blog']['content'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

							</div>


						<?php if (isset ( $_SESSION['uid'] ) && $this->_tpl_vars['blog_comments'] == '1'): ?>
							<div class="separator m-t-15"></div>
							<div id="post_comment_blog">
								<form class="form-horizontal" name="postBlogComment" id="postBlogComment" method="post" action="<?php echo $this->_tpl_vars['relative']; ?>
/blog/<?php echo $this->_tpl_vars['blog']['BID']; ?>
">
									<div id="media_message" style="display: none;"></div>
									<div id="media_content" class="m-b-15" style="display: none;"></div>
									<div class="form-group">
										<div class="col-xs-12 col-sm-10 col-sm-offset-1">
											<textarea name="blog_comment" id="blog_comment" rows="5" class="form-control" placeholder="<?php echo smarty_function_t(array('c' => 'global.add_comment'), $this);?>
"><?php echo $this->_tpl_vars['comment']; ?>
</textarea>
											<div id="post_message" class="text-danger m-t-5" style="display: none;"><?php echo smarty_function_t(array('c' => 'global.comment_empty'), $this);?>
!</div>											
										</div>
									</div>
									<div class="form-group">
										<div class="col-xs-12 col-sm-10 col-sm-offset-1">
											<div class="pull-left">
												<input name="submit_comment" type="button" value=" <?php echo smarty_function_t(array('c' => 'global.post'), $this);?>
 " id="post_blog_comment_<?php echo $this->_tpl_vars['blog']['BID']; ?>
" class="btn btn-primary" />
												<a href="#attach_photo" id="attach_photo" class="btn btn-secondary m-l-5"><span class="visible-xs"><i class="fa fa-camera"></i></span><span class="hidden-xs"><?php echo smarty_function_t(array('c' => 'global.attach_photo'), $this);?>
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
						<?php else: ?>
							<?php if ($this->_tpl_vars['comments']): ?>
								<div class="separator m-t-15"></div>
							<?php endif; ?>
						<?php endif; ?>

							<div id="blog_comments_<?php echo $this->_tpl_vars['blog']['BID']; ?>
">
								<?php if ($this->_tpl_vars['comments']): ?>
									<?php echo smarty_function_t(array('c' => 'global.showing'), $this);?>
 <span class="text-white"><?php echo $this->_tpl_vars['start_num']; ?>
</span> <?php echo smarty_function_t(array('c' => 'global.to'), $this);?>
 <span id="end_num" class="text-white"><?php echo $this->_tpl_vars['end_num']; ?>
</span> <?php echo smarty_function_t(array('c' => 'global.of'), $this);?>
 <span id="total_comments" class="text-white"><?php echo $this->_tpl_vars['comments_total']; ?>
</span> <?php echo smarty_function_t(array('c' => 'global.comments'), $this);?>
.
								<?php endif; ?>
								<div id="blog_response" style="display: none;"></div>
								<div id="comments_delimiter" style="display: none;"></div>
								
								<?php if ($this->_tpl_vars['comments']): ?>
									<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['comments']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
										
										<div id="blog_comment_<?php echo $this->_tpl_vars['blog']['BID']; ?>
_<?php echo $this->_tpl_vars['comments'][$this->_sections['i']['index']]['CID']; ?>
" class="col-xs-12 m-t-15">
											<div class="row">
												<div class="pull-left">
													<a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/<?php echo $this->_tpl_vars['comments'][$this->_sections['i']['index']]['username']; ?>
">
														<img src="<?php echo $this->_tpl_vars['relative']; ?>
/media/users/<?php if ($this->_tpl_vars['comments'][$this->_sections['i']['index']]['photo'] != ''): ?><?php echo $this->_tpl_vars['comments'][$this->_sections['i']['index']]['photo']; ?>
<?php else: ?>nopic-<?php echo $this->_tpl_vars['comments'][$this->_sections['i']['index']]['gender']; ?>
.gif<?php endif; ?>" title="<?php echo $this->_tpl_vars['comments'][$this->_sections['i']['index']]['username']; ?>
's avatar" alt="<?php echo $this->_tpl_vars['comments'][$this->_sections['i']['index']]['username']; ?>
's avatar" class="img-responsive comment-avatar" />
													</a>											
												</div>
												<div class="comment">
													<div class="comment-info">
														<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'time_range', 'assign' => 'addtime', 'time' => $this->_tpl_vars['comments'][$this->_sections['i']['index']]['addtime'])), $this); ?>

														<a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/<?php echo $this->_tpl_vars['comments'][$this->_sections['i']['index']]['username']; ?>
"><?php echo $this->_tpl_vars['comments'][$this->_sections['i']['index']]['username']; ?>
</a>&nbsp;-&nbsp;<span class=""><?php echo $this->_tpl_vars['addtime']; ?>
</span>
													</div>
													<div class="comment-body overflow-hidden"><?php echo ((is_array($_tmp=$this->_tpl_vars['comments'][$this->_sections['i']['index']]['comment'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</div>
													<?php if (isset ( $_SESSION['uid'] )): ?>
														<div class="comment-actions">
															<?php if ($_SESSION['uid'] == $this->_tpl_vars['comments'][$this->_sections['i']['index']]['UID']): ?>
																<a href="#delete_comment" id="delete_comment_blog_<?php echo $this->_tpl_vars['comments'][$this->_sections['i']['index']]['CID']; ?>
_<?php echo $this->_tpl_vars['blog']['BID']; ?>
"><?php echo smarty_function_t(array('c' => 'global.delete'), $this);?>
</a> <span id="delete_response_<?php echo $this->_tpl_vars['comments'][$this->_sections['i']['index']]['CID']; ?>
" style="display: none;"></span>
															<?php else: ?>
																<span id="reported_spam_<?php echo $this->_tpl_vars['comments'][$this->_sections['i']['index']]['CID']; ?>
_<?php echo $this->_tpl_vars['blog']['BID']; ?>
"><a href="#report_spam" id="report_spam_blog_<?php echo $this->_tpl_vars['comments'][$this->_sections['i']['index']]['CID']; ?>
_<?php echo $this->_tpl_vars['blog']['BID']; ?>
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
						<?php if (isset ( $_SESSION['uid'] ) && $_SESSION['uid'] == $this->_tpl_vars['user']['UID']): ?>
							<div class="panel-footer">
								<div class="pull-left">
									<a href="<?php echo $this->_tpl_vars['relative']; ?>
/blog/edit/<?php echo $this->_tpl_vars['blog']['BID']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['blog']['title'])) ? $this->_run_mod_handler('clean', true, $_tmp) : smarty_modifier_clean($_tmp)); ?>
"><?php echo smarty_function_t(array('c' => 'global.edit'), $this);?>
</a> <strong>&middot;</strong>
									<a href="<?php echo $this->_tpl_vars['relative']; ?>
/blog/delete/<?php echo $this->_tpl_vars['blog']['BID']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['blog']['title'])) ? $this->_run_mod_handler('clean', true, $_tmp) : smarty_modifier_clean($_tmp)); ?>
"><?php echo smarty_function_t(array('c' => 'global.delete'), $this);?>
</a>
								</div>
								<div class="clearfix"></div>
							</div>								
						<?php endif; ?>							
					</div>
		</div>
	</div>
</div>
