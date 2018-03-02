<?php /* Smarty version 2.6.20, created on 2017-12-11 02:23:21
         compiled from index_sessions.tpl */ ?>
	<!-- BEGIN PAGE CONTAINER-->
	<div class="page-content"> 
		<div class="content">  
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<i class="icon-custom-left"></i>
				<h3>Settings - <span class="semi-bold">Security</span></h3>
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
						<h4>Sessions</h4>
					</div>
					<div class="grid-body no-border">
						<form class="form-no-horizontal-spacing" name="session_settings" method="POST" action="index.php?m=sessions">
							<div class="row">
								<div class="col-lg-6 col-lg-offset-3 col-md-12">
									<div class="row">
										<div class="col-xs-12 m-b-5">
											<h3>Session <span class="semi-bold">Settings</span></h3>
										</div>									
										<div class="form-group">
											<label class="col-lg-4 control-label">Session Driver</label>
											<div class="col-lg-8">
												<select id="session_driver" name="session_driver" style="width:100%">
													<option value="files"<?php if ($this->_tpl_vars['session_driver'] == 'files'): ?> selected="selected"<?php endif; ?>>Files</option>
													<option value="database"<?php if ($this->_tpl_vars['session_driver'] == 'database'): ?> selected="selected"<?php endif; ?>>Database</option>
												</select>											
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="form-group">
											<label class="col-lg-4 control-label">Session Lifetime</label>
											<div class="col-lg-8">
												<input type="text" name="session_lifetime" value="<?php echo $this->_tpl_vars['session_lifetime']; ?>
" class="form-control <?php if ($this->_tpl_vars['err']['session_lifetime']): ?>error<?php endif; ?>">
											</div>
											<div class="clearfix"></div>
										</div>

									</div>
								</div>
							</div>
							<div class="form-actions">
								<div class="pull-right">
									<input type="submit" name="submit_sessions" value="Save" class="btn btn-success btn-cons">
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