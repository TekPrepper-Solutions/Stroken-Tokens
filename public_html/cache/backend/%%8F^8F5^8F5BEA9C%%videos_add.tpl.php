<?php /* Smarty version 2.6.20, created on 2017-12-13 16:40:50
         compiled from videos_add.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'videos_add.tpl', 97, false),)), $this); ?>
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
			<?php if ($this->_tpl_vars['grabbing']): ?>
				<div id="g_failed" class="col-xs-12" style="display:none;">
					<div class="alert alert-error">
						<button class="close" data-dismiss="alert"></button>
						Failed to download video!
					</div>
				</div>			
				<div id="g_ready" class="col-xs-12" style="display:none;">
					<div class="alert alert-success">
						<button class="close" data-dismiss="alert"></button>
						Video was successfully added!
					</div>
				</div>	
			<?php endif; ?>
			<!-- END PAGE TITLE -->
			<!-- BEGIN PlACE PAGE CONTENT HERE -->
			<div class="col-md-12">
				<div class="grid simple">
					<div class="grid-title no-border">
						<h4>Grab <span class="semi-bold">Video</span></h4>
					</div>
					<div class="grid-body no-border">
						<form class="form-no-horizontal-spacing" name="save_video" method="POST" action="videos.php?m=add">
							<div class="row">					
								<?php if ($this->_tpl_vars['video']['site'] != ''): ?>		
									<?php if ($this->_tpl_vars['grabbing']): ?>
										<div class="col-lg-6 col-lg-offset-3 col-md-12">
											<div class="row">		
												<div class="col-xs-12 m-b-5">
													<h3>Grabbing: <?php echo $this->_tpl_vars['video']['site']; ?>
 - <span class="semi-bold"><?php echo $this->_tpl_vars['video']['title']; ?>
</span></h3>
												</div>										
												<div class="form-group">
													<label class="col-lg-4 control-label">Download Progress</label>
													<div class="col-lg-8">
														<div class="progress active progress-large" style="margin-top: 9px;">
															<div id="download_progress" data-percentage="0%" style="width: 0%;" class="progress-bar progress-bar-info" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>													
														</div>
													</div>
												</div>
												<div id="sd_video_c" class="form-group" style="display:none">
													<label class="col-lg-4 control-label">SD Video</label>
													<div class="col-lg-8">
														<span id="sd_video" class="grabber-size">0</span>
													</div>
													<div class="clearfix"></div>													
												</div>
												<div id="mobile_video_c" class="form-group" style="display:none">
													<label class="col-lg-4 control-label">SD/Mobile Video</label>
													<div class="col-lg-8">
														<span id="mobile_video" class="grabber-size">0</span>
													</div>
													<div class="clearfix"></div>													
												</div>											
												<div id="hd_video_c" class="form-group" style="display:none">
													<label class="col-lg-4 control-label">HD Video</label>
													<div class="col-lg-8">
														<span id="hd_video" class="grabber-size">0</span>
													</div>
													<div class="clearfix"></div>
												</div>
												<div id="thumbnails_c" class="form-group" style="display:none">
													<label class="col-lg-4 control-label">Thumbnails</label>
													<div class="col-lg-8">
														<span id="thumbnails" class="grabber-size">0</span>
													</div>
													<div class="clearfix"></div>
												</div>												
											</div>
										</div>
									<?php else: ?>								
									<div class="col-lg-6 col-lg-offset-3 col-md-12">
										<div class="row">		
											<div class="col-xs-12 m-b-5">
												<h3>Save: <?php echo $this->_tpl_vars['video']['site']; ?>
 - <span class="semi-bold"><?php echo $this->_tpl_vars['video']['title']; ?>
</span></h3>
											</div>
											<input name="video_id" type="hidden" value="<?php echo $this->_tpl_vars['video']['id']; ?>
" />
											<input name="site" type="hidden" value="<?php echo $this->_tpl_vars['video']['site']; ?>
" />										
											<div class="form-group">
												<label class="col-lg-4 control-label">Username</label>
												<div class="col-lg-8">
													<input class="form-control" name="username" type="text" value="<?php echo $this->_tpl_vars['video']['username']; ?>
">
												</div>
												<div class="clearfix"></div>
											</div>
											<div class="form-group">
												<label class="col-lg-4 control-label">Title</label>
												<div class="col-lg-8">
													<input class="form-control" name="title" type="text" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['video']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
">
												</div>
												<div class="clearfix"></div>
											</div>
											<div class="form-group">
												<label class="col-lg-4 control-label">Description</label>
												<div class="col-lg-8">
													<textarea class="form-control" name="description" rows="5" style="resize: vertical"><?php echo ((is_array($_tmp=$this->_tpl_vars['video']['description'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</textarea>
												</div>
												<div class="clearfix"></div>
											</div>											
											<div class="form-group">
												<label class="col-lg-4 control-label">Category</label>
												<div class="col-lg-8">
													<select id="category" name="category" style="width:100%">
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
"<?php if ($this->_tpl_vars['video']['category'] == $this->_tpl_vars['categories'][$this->_sections['i']['index']]['CHID']): ?> selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['categories'][$this->_sections['i']['index']]['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</option>
														<?php endfor; endif; ?>
													</select>
												</div>
												<div class="clearfix"></div>
											</div>
											<div class="form-group">
												<label class="col-lg-4 control-label">Tags</label>
												<div class="col-lg-8">
													 <textarea class="form-control" name="tags" rows="3" style="resize: vertical"><?php echo ((is_array($_tmp=$this->_tpl_vars['video']['tags'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</textarea>
													 <span class="help">Space separated</span>
												</div>
												<div class="clearfix"></div>
											</div>
											<div class="form-group">
												<label class="col-lg-4 control-label">Type</label>
												<div class="col-lg-8">
													<div class="radio p-t-9">
														<input id="type_pb" type="radio" name="type" value="public" <?php if ($this->_tpl_vars['video']['type'] != 'private'): ?>checked="checked"<?php endif; ?> class="radio-enabled">
														<label for="type_pb">Public</label>
														<input id="type_pv" type="radio" name="type" value="private" <?php if ($this->_tpl_vars['video']['type'] == 'private'): ?>checked="checked"<?php endif; ?> class="radio-disabled">
														<label for="type_pv">Private</label>												
													</div>
												</div>
												<div class="clearfix"></div>
											</div>
											<div class="form-group grabber-url">
												<?php $_from = $this->_tpl_vars['videos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['url'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['url']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
        $this->_foreach['url']['iteration']++;
?>
													<label class="col-lg-4 control-label"><?php echo $this->_tpl_vars['k']; ?>
 / <?php echo $this->_tpl_vars['v']['filetype']; ?>
 / <?php echo $this->_tpl_vars['v']['filesize']; ?>
</label>
													<div class="col-lg-8 m-b-10">
														<div class="radio">
															<input class="col-xs-9 col-sm-10" name="url[<?php echo $this->_tpl_vars['k']; ?>
]" type="text" value="<?php echo $this->_tpl_vars['v']['url']; ?>
">
															<input id="selected_url_<?php echo $this->_tpl_vars['k']; ?>
" name="selected_url" type="radio" value="<?php echo $this->_tpl_vars['k']; ?>
" <?php if ($this->_tpl_vars['video']['selected_url'] == $this->_tpl_vars['k']): ?>checked<?php else: ?><?php if (($this->_foreach['url']['iteration'] == $this->_foreach['url']['total']) && $this->_tpl_vars['video']['selected_url'] == ''): ?>checked<?php endif; ?><?php endif; ?>  class="radio-enabled">
															<label for="selected_url_<?php echo $this->_tpl_vars['k']; ?>
">&nbsp;</label>
														</div>
														<input name="filesize[<?php echo $this->_tpl_vars['k']; ?>
]" type="hidden" value="<?php echo $this->_tpl_vars['v']['filesize']; ?>
">
														<input name="filetype[<?php echo $this->_tpl_vars['k']; ?>
]" type="hidden" value="<?php echo $this->_tpl_vars['v']['filetype']; ?>
">
													</div>
													<div class="clearfix"></div>												
												<?php endforeach; endif; unset($_from); ?>
											</div>
										</div>
									</div>
									<?php endif; ?>
								<?php else: ?>
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
    foreach ($_from as $this->_tpl_vars['current'] => $this->_tpl_vars['domain']):
?>
														<div class="col-md-4 grabber-label"><?php echo $this->_tpl_vars['domain']['name']; ?>
</div>
													<?php endforeach; endif; unset($_from); ?>
													<div class="clearfix"></div>
												</div>
												<div class="col-xs-12 m-b-5">
													<h3>Video <span class="semi-bold">Details</span></h3>
												</div>											
												<div class="form-group">
													<label class="col-lg-4 control-label">Video URL</label>
													<div class="col-lg-8">
														<input  class="form-control" name="url" type="text" value="">
													</div>
													<div class="clearfix"></div>
												</div>
											</div>
										</div>								
									<?php endif; ?>
								<?php endif; ?>
							</div>
							<div class="form-actions">
								<div class="pull-right">
									<?php if (! $this->_tpl_vars['warnings']): ?>
										<?php if ($this->_tpl_vars['video']['site'] == ''): ?>
											<input name="grab_video" type="submit" value="Next" class="btn btn-success btn-cons">
											<a href="index.php" class="btn btn-white btn-cons">Cancel</a>												
										<?php else: ?>
											<?php if ($this->_tpl_vars['grabbing']): ?>
												<a href="videos.php?m=add" class="btn btn-success btn-cons">Grab Another Video</a>
												<a href="index.php" class="btn btn-white btn-cons">Go to Dashboard</a>
											<?php else: ?>
												<input name="save_video" type="submit" value="Grab Video" id="save_video_button" class="btn btn-success btn-cons" onClick="document.getElementById('save_video_button').value='Grabbing...'">
												<a href="videos.php?m=add" class="btn btn-white btn-cons">Back</a>
											<?php endif; ?>											
										<?php endif; ?>
									<?php endif; ?>
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