<?php /* Smarty version 2.6.20, created on 2018-02-18 23:39:23
         compiled from index_logo.tpl */ ?>
	<!-- BEGIN PAGE CONTAINER-->
	<div class="page-content"> 
		<div class="content">  
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<i class="icon-custom-left"></i>
				<h3>Settings - <span class="semi-bold">General</span></h3>
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
						<h4>Main <span class="semi-bold">Logo</span></h4>
					</div>
					<div class="grid-body no-border">
						<form class="form-no-horizontal-spacing" name="add_logo" method="POST" enctype="multipart/form-data" action="index.php?m=logo">
							<div class="row">
								<div class="col-lg-6 col-lg-offset-3 col-md-12">					
									<div class="col-xs-12 m-b-5">
										<h3>Logo <span class="semi-bold">Preview</span></h3>
									</div>									
									<div class="form-group">
										<div class="col-xs-12 logo-box">
											<center>
												<img src="<?php echo $this->_tpl_vars['baseurl']; ?>
/images/logo/logo.png<?php if ($this->_tpl_vars['rand']): ?>?<?php echo $this->_tpl_vars['rand']; ?>
<?php endif; ?>">
											</center>
										</div>
										<div class="clearfix"></div>										
									</div>
									<div class="form-group">
										<label class="col-lg-4 control-label">File</label>
										<div class="col-lg-8">
											<div id="get_file" class="btn btn btn-success btn-file" onclick="getFile('logo')">Choose File</div>
											<div class="file-box">
												<span id="addfile">No file chosen</span>
												<input name="logo" type="file" id="logo" onChange="sub(this,'addfile','nofile')" accept=".png" />
												<input type="hidden" id="nofile" value="No File">												
											</div>
											<span class="help">*.png</span>
										</div>	
										<div class="clearfix"></div>
									</div>									
								</div>				
							</div>								
							<div class="form-actions">
								<div class="pull-right">
									<input type="submit" name="upload_logo" value="Upload Logo" class="btn btn-success btn-cons">
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