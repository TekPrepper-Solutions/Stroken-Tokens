<?php /* Smarty version 2.6.20, created on 2017-12-10 20:59:34
         compiled from upload_video.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 't', 'upload_video.tpl', 3, false),array('modifier', 'escape', 'upload_video.tpl', 55, false),)), $this); ?>
<script type="text/javascript">
var video_allowed_extensions = /<?php echo $this->_tpl_vars['allowed_video_extensions']; ?>
$/i;
var lang_ext_invalid = "<?php echo smarty_function_t(array('c' => 'upload.video_ext_invalid','s' => $this->_tpl_vars['video_extensions']), $this);?>
";
var lang_submit = "<?php echo smarty_function_t(array('c' => 'upload.video_submit'), $this);?>
";
</script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/js/jquery.upload-0.1.js"></script>

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
					<?php echo smarty_function_t(array('c' => 'upload.video_title'), $this);?>

				</div>
				<div class="panel-body">
				
					<div class="text-warning m-b-20"><?php echo smarty_function_t(array('c' => 'upload.terms','s' => $this->_tpl_vars['site_name']), $this);?>
</div>				

					<form class="form-horizontal" name="uploadVideo" id="uploadVideo" method="post" enctype="multipart/form-data" target="_self" action="<?php echo $this->_tpl_vars['relative']; ?>
/upload/video">
					
						<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $this->_tpl_vars['upload_max_size']; ?>
" />
						<input type="hidden" name="UPLOAD_IDENTIFIER" id="UPLOAD_IDENTIFIER" value="<?php echo $this->_tpl_vars['upload_id']; ?>
" />
						<input type="hidden" name="video_upload_started" />
						
						<div  id="upload_title" class="form-group">
							<label for="upload_video_title" class="col-lg-3 control-label"><?php echo smarty_function_t(array('c' => 'global.title'), $this);?>
</label>
							<div class="col-lg-9">
								<input name="video_title" type="text" class="form-control" value="<?php echo $this->_tpl_vars['video']['title']; ?>
" id="upload_video_title" placeholder="<?php echo smarty_function_t(array('c' => 'global.title'), $this);?>
" />
								<div id="video_title_error" class="text-danger m-t-5" style="display: none;"><?php echo smarty_function_t(array('c' => 'upload.video_title_empty'), $this);?>
</div>
							</div>
						</div>

						<div id="upload_tags" class="form-group">
							<label for="upload_video_keywords" class="col-lg-3 control-label"><?php echo smarty_function_t(array('c' => 'global.tags'), $this);?>
</label>
							<div class="col-lg-9">
								<textarea name="video_keywords" id="upload_video_keywords" rows="2" class="form-control" placeholder="<?php echo smarty_function_t(array('c' => 'upload.tags_expl'), $this);?>
"><?php echo $this->_tpl_vars['video']['keywords']; ?>
</textarea>
								<div id="video_tags_error" class="text-danger m-t-5" style="display: none;"><?php echo smarty_function_t(array('c' => 'upload.video_tags_empty'), $this);?>
</div>
							</div>
						</div>
						
						<div id="upload_category" class="form-group">
							<label for="upload_video_category" class="col-lg-3 control-label"><?php echo smarty_function_t(array('c' => 'global.category'), $this);?>
</label>
							<div class="col-lg-9">
								<select name="video_category" id="upload_video_category" class="form-control">
									<option value="0"<?php if ($this->_tpl_vars['video']['category'] == '0'): ?> selected="selected"<?php endif; ?>>-----</option>
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
								<div id="video_category_error" class="text-danger m-t-5" style="display: none;"><?php echo smarty_function_t(array('c' => 'global.category_empty'), $this);?>
</div>
							</div>
						</div>

						<div id="upload_file" class="form-group">
							<label for="upload_video_file" class="col-lg-3 control-label"><?php echo smarty_function_t(array('c' => 'global.file'), $this);?>
</label>
							<div class="col-lg-9">
							
							<div id="get_video_file" class="btn btn btn-primary no-radius-r pull-left" onclick="getFile('upload_video_file')"><?php echo smarty_function_t(array('c' => 'file.choose_file'), $this);?>
</div>
							<div class="file-box">
								<span id="upvname"><?php echo smarty_function_t(array('c' => 'file.no_file'), $this);?>
</span>
								<div style="height: 0px; width: 0px;overflow:hidden;">
									<input name="video_file" type="file" id="upload_video_file" onChange="sub(this,'upvname','nofile')" accept="video/*"/>								
								</div>
								<input type="hidden" id="nofile" value="<?php echo smarty_function_t(array('c' => 'file.no_file'), $this);?>
">
							</div>
							<div class="clearfix"></div>
							<div id="video_file_error" class="text-danger m-t-5" style="display: none;"><?php echo smarty_function_t(array('c' => 'upload.video_file_empty'), $this);?>
</div>
							<div id="video_file_ext_error" class="text-danger m-t-5" style="display: none;"></div>
							</div>
						</div>						
						
						<div class="form-group">
							<label class="col-lg-3 control-label"><?php echo smarty_function_t(array('c' => 'upload.anonymous'), $this);?>
</label>
							<div class="col-lg-9">
								<div class="radio">
									<label>
										<input name="video_anonymous" type="radio" value="no" id="upload_video_anonymous_no" <?php if ($this->_tpl_vars['video']['anonymous'] == 'no'): ?> checked="checked"<?php endif; ?> />
										<?php echo smarty_function_t(array('c' => 'upload.anonymous_yes'), $this);?>

									</label>
								</div>
								<div class="radio">
									<label>
										<input name="video_anonymous" type="radio" value="yes" id="upload_video_anonymous_yes" <?php if ($this->_tpl_vars['video']['anonymous'] == 'yes'): ?> checked="checked"<?php endif; ?> />
										<?php echo smarty_function_t(array('c' => 'upload.anonymous_no'), $this);?>

									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-lg-3 control-label"><?php echo smarty_function_t(array('c' => 'upload.privacy'), $this);?>
</label>
							<div class="col-lg-9">
								<div class="radio">
									<label>
										<input name="video_privacy" type="radio" value="public" id="upload_video_privacy_public" <?php if ($this->_tpl_vars['video']['privacy'] == 'public'): ?> checked="checked"<?php endif; ?> />
										<?php echo smarty_function_t(array('c' => 'upload.video_public'), $this);?>

									</label>
								</div>
								<div class="radio">
									<label>
										<input name="video_privacy" type="radio" value="private" id="upload_video_privacy_private" <?php if ($this->_tpl_vars['video']['privacy'] == 'private'): ?> checked="checked"<?php endif; ?> />
										<?php echo smarty_function_t(array('c' => 'upload.video_private'), $this);?>

									</label>
								</div>
							</div>
						</div>


						<div id="upload_status" class="form-group" style="display:none;">
							<div id="upload_progress" class="col-lg-9 col-lg-offset-3">
								<div class="progress progress-striped active hidden-xs">
									<div id="bar" class="progress-bar progress-bar-warning" style="width: 0;">&nbsp;</div>
								</div>
								<div class="progress progress-striped active visible-xs">
									<div class="progress-bar progress-bar-warning" style="width: 100%"></div>
								</div>								
							</div>
							<div class="col-lg-9 col-lg-offset-3 hidden-xs">
								<div id="upload_time"></div>
								<div id="upload_size"></div>
							</div>
						</div>
						
						<div id="upload_message" style="display: none;"></div>
						
						<div class="form-group">
							<div class="col-lg-9 col-lg-offset-3">
								<input name="submit_upload_video" type="button" id="upload_video_submit" value="<?php echo smarty_function_t(array('c' => 'upload.video_button'), $this);?>
" class="btn btn-primary" />
							</div>
						</div>
						<?php echo smarty_function_t(array('c' => 'upload.contr','s' => $this->_tpl_vars['site_name']), $this);?>

					</form>
				</div>
			</div>	
		</div>
	</div>
</div>