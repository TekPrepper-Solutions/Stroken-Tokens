<?php /* Smarty version 2.6.20, created on 2017-12-11 02:23:34
         compiled from index_playeredit.tpl */ ?>
	<!-- BEGIN PAGE CONTAINER-->
	<div class="page-content"> 
		<div class="content">  
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<i class="icon-custom-left"></i>
				<h3>Settings - <span class="semi-bold">Player Profiles</span></h3>
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
						<h4>Editing: <span class="semi-bold"><?php echo $this->_tpl_vars['player']['profile']; ?>
</span></h4>
					</div>
					<div class="grid-body no-border">
						<form class="form-no-horizontal-spacing" name="player_settings" method="POST" action="index.php?m=playeredit&PID=<?php echo $this->_tpl_vars['player']['id']; ?>
">
							<div class="row">
								<div class="col-lg-6 col-lg-offset-3 col-md-12">
									<div class="row">
										<div class="col-xs-12 m-b-5">
											<h3>General <span class="semi-bold">Settings</span></h3>
										</div>									
										<div class="form-group">
											<label class="col-lg-4 control-label">Autoplay</label>
											<div class="col-lg-8">
												<div class="radio p-t-9">
													<input id="autoplay_e" type="radio" name="autoplay" value="1" <?php if ($this->_tpl_vars['player']['autoplay'] == '1'): ?>checked="checked"<?php endif; ?> class="radio-enabled">
													<label for="autoplay_e">Enabled</label>
													<input id="autoplay_d" type="radio" name="autoplay" value="0" <?php if ($this->_tpl_vars['player']['autoplay'] == '0'): ?>checked="checked"<?php endif; ?> class="radio-disabled">
													<label for="autoplay_d">Disabled</label>												
												</div>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="form-group">
											<label class="col-lg-4 control-label">Default Resolution</label>
											<div class="col-lg-8">
												<div class="radio p-t-9">
													<input id="resolution_l" type="radio" name="resolution" value="low" <?php if ($this->_tpl_vars['player']['resolution'] == 'low'): ?>checked="checked"<?php endif; ?> class="radio-enabled">
													<label for="resolution_l">Low</label>
													<input id="resolution_h" type="radio" name="resolution" value="high" <?php if ($this->_tpl_vars['player']['resolution'] == 'high'): ?>checked="checked"<?php endif; ?> class="radio-enabled">
													<label for="resolution_h">High</label>												
												</div>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="form-group">
											<label class="col-lg-4 control-label">Timeline Preview</label>
											<div class="col-lg-8">
												<div class="radio p-t-9">
													<input id="timeline_preview_e" type="radio" name="timeline_preview" value="1" <?php if ($this->_tpl_vars['player']['timeline_preview'] == '1'): ?>checked="checked"<?php endif; ?> class="radio-enabled">
													<label for="timeline_preview_e">Enabled</label>
													<input id="timeline_preview_d" type="radio" name="timeline_preview" value="0" <?php if ($this->_tpl_vars['player']['timeline_preview'] == '0'): ?>checked="checked"<?php endif; ?> class="radio-disabled">
													<label for="timeline_preview_d">Disabled</label>												
												</div>
											</div>
											<div class="clearfix"></div>
										</div>										

									</div>
									<div class="col-xs-12 m-b-5">
										<h3>Logo <span class="semi-bold">Settings</span></h3>
									</div>								
									<div class="form-group">
										<label class="col-lg-4 control-label">Logo</label>
										<div class="col-lg-8">
											<div class="radio p-t-9">
												<input id="logo_e" type="radio" name="logo" value="1" <?php if ($this->_tpl_vars['player']['logo'] == '1'): ?>checked="checked"<?php endif; ?> class="radio-enabled">
												<label for="logo_e">Enabled</label>
												<input id="logo_d" type="radio" name="logo" value="0" <?php if ($this->_tpl_vars['player']['logo'] == '0'): ?>checked="checked"<?php endif; ?> class="radio-disabled">
												<label for="logo_d">Disabled</label>												
											</div>
										</div>										
										<div class="clearfix"></div>
									</div>
									<div class="form-group">
										<label class="col-lg-4 control-label">Logo Redirect</label>
										<div class="col-lg-8">
											<div class="radio p-t-9">
												<input id="logo_redirect_e" type="radio" name="logo_redirect" value="1" <?php if ($this->_tpl_vars['player']['logo_redirect'] == '1'): ?>checked="checked"<?php endif; ?> class="radio-enabled">
												<label for="logo_redirect_e">Enabled</label>
												<input id="logo_redirect_d" type="radio" name="logo_redirect" value="0" <?php if ($this->_tpl_vars['player']['logo_redirect'] == '0'): ?>checked="checked"<?php endif; ?> class="radio-disabled">
												<label for="logo_redirect_d">Disabled</label>												
											</div>
										</div>
										<div class="clearfix"></div>
									</div>									
									<div class="form-group">
										<label class="col-lg-4 control-label">Logo Link</label>
										<div class="col-lg-8">										
											<input name="logo_link" type="text" value="<?php echo $this->_tpl_vars['player']['logo_link']; ?>
" class="form-control <?php if ($this->_tpl_vars['err']['logo_link']): ?>error<?php endif; ?>" placeholder="Redirect is set to video page by default.">
											<span class="help">Leave blank for redirecting to video page or set your own link.</span>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="form-group">
										<label class="col-lg-4 control-label">Logo Position</label>
										<div class="col-lg-8">
											<select id="logo_position" name="logo_position" style="width:100%">
												<option value="top-left"<?php if ($this->_tpl_vars['player']['logo_position'] == 'top-lef'): ?> selected<?php endif; ?>>Top Left</option>
												<option value="top-right"<?php if ($this->_tpl_vars['player']['logo_position'] == 'top-right'): ?> selected<?php endif; ?>>Top Right</option>
												<option value="bottom-left"<?php if ($this->_tpl_vars['player']['logo_position'] == 'bottom-left'): ?> selected<?php endif; ?>>Bottom Left</option>
												<option value="bottom-right"<?php if ($this->_tpl_vars['player']['logo_position'] == 'bottom-right'): ?> selected<?php endif; ?>>Bottom Right</option>
											</select>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="form-group">
										<label class="col-lg-4 control-label">Logo Opacity</label>
										<div class="col-lg-8">
											<div class="slider sucess">
												<input id="logo_opacity" name="logo_opacity" type="text" class="slider-element" value="<?php echo $this->_tpl_vars['player']['logo_opacity']; ?>
" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="<?php echo $this->_tpl_vars['player']['logo_opacity']; ?>
" data-slider-orientation="orizontal" data-slider-selection="after" data-slider-tooltip="show">
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="form-group">
										<div class="col-lg-8 col-lg-offset-4">
										<div class="logo-box">
											<center>
												<img id="logo" src="<?php echo $this->_tpl_vars['baseurl']; ?>
/media/player/logo/logo.png<?php if ($this->_tpl_vars['rand']): ?>?<?php echo $this->_tpl_vars['rand']; ?>
<?php endif; ?>">
											</center>
										</div>										
											<span class="help">To change the logo, please visit: <a href="index.php?m=playerlogo">Player Logo</a>.</span>														
										</div>
										<div class="clearfix"></div>										
									</div>										
									<div class="col-xs-12 m-b-5">
										<h3>Advertising <span class="semi-bold">Settings</span></h3>
									</div>
									<div class="form-group">
										<label class="col-lg-4 control-label">Pause Advertising</label>
										<div class="col-lg-8">
											<div class="radio p-t-9">
												<input id="pause_adv_e" type="radio" name="pause_adv" value="1" <?php if ($this->_tpl_vars['player']['pause_adv'] == '1'): ?>checked="checked"<?php endif; ?> class="radio-enabled">
												<label for="pause_adv_e">Enabled</label>
												<input id="pause_adv_d" type="radio" name="pause_adv" value="0" <?php if ($this->_tpl_vars['player']['pause_adv'] == '0'): ?>checked="checked"<?php endif; ?> class="radio-disabled">
												<label for="pause_adv_d">Disabled</label>												
											</div>
											<span class="help">Display ads when video is paused.</span>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="form-group" style="display: none">
										<label class="col-lg-4 control-label">Timeline Advertising</label>
										<div class="col-lg-8">
											<div class="radio p-t-9">
												<input id="timeline_adv_e" type="radio" name="timeline_adv" value="1" <?php if ($this->_tpl_vars['player']['timeline_adv'] == '1'): ?>checked="checked"<?php endif; ?> class="radio-enabled">
												<label for="timeline_adv_e">Enabled</label>
												<input id="timeline_adv_d" type="radio" name="timeline_adv" value="0" <?php if ($this->_tpl_vars['player']['timeline_adv'] == '0'): ?>checked="checked"<?php endif; ?> class="radio-disabled">
												<label for="timeline_adv_d">Disabled</label>												
											</div>
										</div>
										<div class="clearfix"></div>
									</div>									
								</div>
							</div>
							<div class="form-actions">
								<div class="pull-right">
									<input type="submit" name="submit_settings" value="Save" class="btn btn-success btn-cons">
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