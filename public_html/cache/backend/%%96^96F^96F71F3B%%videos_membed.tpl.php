<?php /* Smarty version 2.6.20, created on 2017-12-13 16:42:05
         compiled from videos_membed.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'videos_membed.tpl', 59, false),)), $this); ?>
	<!-- BEGIN PAGE CONTAINER-->
	<div class="page-content"> 
		<div class="content">  
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<i class="icon-custom-left"></i>
				<h3>Videos - <span class="semi-bold">Add Videos</span></h3>
			</div>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "errmsg.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<!-- END PAGE TITLE -->
			<!-- BEGIN PlACE PAGE CONTENT HERE -->
			<div class="col-md-12">
				<div class="grid simple">
					<div class="grid-title no-border">
						<h4>Mass Embed <span class="semi-bold">Videos</span></h4>
					</div>
					<div class="grid-body no-border">
						<form class="form-no-horizontal-spacing" name="embedVideo" method="POST" enctype="multipart/form-data" action="videos.php?m=membed<?php if ($this->_tpl_vars['debug']): ?>&debug=<?php echo $this->_tpl_vars['debug']; ?>
<?php endif; ?>">
							<div class="row">					
								<?php if ($this->_tpl_vars['warnings']): ?>
									<div class="col-xs-12">
										<div class="alert alert-info">
											<button class="close" data-dismiss="alert"></button>
											No classes loaded!
										</div>
									</div>
								<?php else: ?>
									<div class="col-lg-6 col-lg-offset-3 col-md-12">
										<div class="row">								
											<div class="form-group">											
												<?php $_from = $this->_tpl_vars['sites']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['domain'] => $this->_tpl_vars['website']):
?>
													<div class="col-md-4 grabber-label"><?php echo $this->_tpl_vars['domain']; ?>
</div>
												<?php endforeach; endif; unset($_from); ?>
												<div class="clearfix"></div>
											</div>
											<div class="col-xs-12 m-b-5">
												<h3>Page / Video <span class="semi-bold">Details</span></h3>
											</div>											
											<div class="form-group">
												<label class="col-lg-4 control-label">Page URL</label>
												<div class="col-lg-8">
													<input class="form-control" name="url" type="text" value="<?php echo $this->_tpl_vars['embed']['url']; ?>
">
												</div>
												<div class="clearfix"></div>
											</div>
											<div class="form-group">
												<label class="col-lg-4 control-label">Username</label>
												<div class="col-lg-8">
													<input class="form-control" name="username" type="text" value="<?php echo $this->_tpl_vars['embed']['username']; ?>
">
												</div>
												<div class="clearfix"></div>
											</div>
											<div class="form-group">
												<label class="col-lg-4 control-label">Category</label>
												<div class="col-lg-8">
													<select id="category" name="category" style="width:100%">
														<option value="0">Autodetect</option>													
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
														<option value="<?php echo $this->_tpl_vars['categories'][$this->_sections['i']['index']]['CHID']; ?>
"<?php if ($this->_tpl_vars['embed']['category'] == $this->_tpl_vars['categories'][$this->_sections['i']['index']]['CHID']): ?> selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['categories'][$this->_sections['i']['index']]['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</option>
														<?php endfor; endif; ?>
													</select>
												</div>
												<div class="clearfix"></div>
											</div>
											<div class="form-group">
												<label class="col-lg-4 control-label">Status</label>
												<div class="col-lg-8">
													<div class="radio p-t-9">
														<input id="status_a" type="radio" name="status" value="1" <?php if ($this->_tpl_vars['embed']['status'] == '1'): ?>checked="checked"<?php endif; ?> class="radio-enabled">
														<label for="status_a">Active</label>
														<input id="status_s" type="radio" name="status" value="0" <?php if ($this->_tpl_vars['embed']['status'] == '0'): ?>checked="checked"<?php endif; ?> class="radio-disabled">
														<label for="status_s">Suspended</label>												
													</div>
												</div>
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
								<?php endif; ?>
							</div>
							<div class="form-actions">
								<div class="pull-right">
									<input name="membed_videos" type="submit" value="Embed Videos" id="save_video_button" class="btn btn-success btn-cons" onClick="document.getElementById('save_video_button').value='Embedding...'";>
									<a href="index.php" class="btn btn-white btn-cons">Cancel</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>		
			<!-- END PLACE PAGE CONTENT HERE -->
		</div>
	</div>
	<!-- END PAGE CONTAINER -->	