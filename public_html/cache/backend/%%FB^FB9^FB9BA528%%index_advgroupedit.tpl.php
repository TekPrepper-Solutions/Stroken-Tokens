<?php /* Smarty version 2.6.20, created on 2017-12-11 01:35:17
         compiled from index_advgroupedit.tpl */ ?>
	<!-- BEGIN PAGE CONTAINER-->
	<div class="page-content"> 
		<div class="content">  
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<i class="icon-custom-left"></i>
				<h3>Settings - <span class="semi-bold">Advertising</span></h3>
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
						<h4>Editing Group: <span class="semi-bold"><?php echo $this->_tpl_vars['adv_group'][0]['advgrp_name']; ?>
</span></h4>
					</div>
					<div class="grid-body no-border">
						<form class="form-no-horizontal-spacing" name="edit_adv_group" method="POST" action="index.php?m=advgroupedit&AGID=<?php echo $this->_tpl_vars['adv_group'][0]['advgrp_id']; ?>
">
							<div class="row">
								<div class="col-lg-6 col-lg-offset-3 col-md-12">
									<div class="row">
										<div class="col-xs-12 m-b-5">
											<h3>Group <span class="semi-bold">Details</span></h3>
										</div>									
										<div class="form-group">
											<label class="col-lg-4 control-label">Width</label>
											<div class="col-lg-8">
												<input type="text" name="adv_width" value="<?php echo $this->_tpl_vars['adv_group'][0]['adv_width']; ?>
" class="form-control <?php if ($this->_tpl_vars['err']['adv_width']): ?>error<?php endif; ?>">
												<span class="help">Pixels</span>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="form-group">
											<label class="col-lg-4 control-label">Height</label>
											<div class="col-lg-8">
												<input type="text" name="adv_height" value="<?php echo $this->_tpl_vars['adv_group'][0]['adv_height']; ?>
" class="form-control <?php if ($this->_tpl_vars['err']['adv_height']): ?>error<?php endif; ?>">
												<span class="help">Pixels</span>
											</div>
											<div class="clearfix"></div>
										</div>										
										<div class="form-group">
											<label class="col-lg-4 control-label">Rotating</label>
											<div class="col-lg-8">
												<div class="radio p-t-9">
													<input id="adv_rotate_y" type="radio" name="adv_rotate" value="1" <?php if ($this->_tpl_vars['adv_group'][0]['advgrp_rotate'] == '1'): ?>checked="checked"<?php endif; ?> class="radio-enabled">
													<label for="adv_rotate_y">Yes</label>
													<input id="adv_rotate_n" type="radio" name="adv_rotate" value="0" <?php if ($this->_tpl_vars['adv_group'][0]['advgrp_rotate'] == '0'): ?>checked="checked"<?php endif; ?> class="radio-disabled">
													<label for="adv_rotate_n">No</label>												
												</div>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="form-group">
											<label class="col-lg-4 control-label">Status</label>
											<div class="col-lg-8">
												<div class="radio p-t-9">
													<input id="adv_status_a" type="radio" name="adv_status" value="1" <?php if ($this->_tpl_vars['adv_group'][0]['advgrp_status'] == '1'): ?>checked="checked"<?php endif; ?> class="radio-enabled">
													<label for="adv_status_a">Active</label>
													<input id="adv_status_i" type="radio" name="adv_status" value="0" <?php if ($this->_tpl_vars['adv_group'][0]['advgrp_status'] == '0'): ?>checked="checked"<?php endif; ?> class="radio-disabled">
													<label for="adv_status_i">Inactive</label>												
												</div>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>							
							</div>
							<div class="form-actions">
								<div class="pull-right">
									<input type="submit" name="edit_adv_group" value="Save" class="btn btn-success btn-cons">
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