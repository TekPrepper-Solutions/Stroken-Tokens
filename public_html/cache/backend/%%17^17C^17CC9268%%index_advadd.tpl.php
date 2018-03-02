<?php /* Smarty version 2.6.20, created on 2017-12-11 01:30:23
         compiled from index_advadd.tpl */ ?>
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
						<h4>Add <span class="semi-bold">Banner Ad</span></h4>
					</div>
					<div class="grid-body no-border">
						<form class="form-no-horizontal-spacing" name="add_adv" method="POST" action="index.php?m=advadd">
							<div class="row">
								<div class="col-lg-6 col-lg-offset-3 col-md-12">
									<div class="row">
										<?php if ($this->_tpl_vars['adv']['text'] != ''): ?>
										<div class="col-xs-12 m-b-5">
											<h3>Banner <span class="semi-bold">Preview</span></h3>
										</div>
										<div class="form-group">
											<div class="col-xs-12">
												<?php echo $this->_tpl_vars['adv']['text']; ?>

											</div>
											<div class="clearfix"></div>
										</div>
										<?php endif; ?>									
										<div class="col-xs-12 m-b-5">
											<h3>Banner <span class="semi-bold">Details</span></h3>
										</div>									
										<div class="form-group">
											<label class="col-lg-4 control-label">Name</label>
											<div class="col-lg-8">
												<input name="adv_name" type="text" value="<?php echo $this->_tpl_vars['adv']['name']; ?>
" class="form-control <?php if ($this->_tpl_vars['err']['adv_name']): ?>error<?php endif; ?>">
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="form-group">
											<label class="col-lg-4 control-label">Group</label>
											<div class="col-lg-8">
												<select id="adv_group" name="adv_group" style="width:100%" <?php if ($this->_tpl_vars['err']['adv_group']): ?>class="select-error"<?php endif; ?>>
												<option value="0"<?php if ($this->_tpl_vars['adv']['group'] == '0'): ?> selected="selected"<?php endif; ?>>Select Group</option>
												<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['advgroups']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
													<option value="<?php echo $this->_tpl_vars['advgroups'][$this->_sections['i']['index']]['advgrp_id']; ?>
"<?php if ($this->_tpl_vars['adv']['group'] == $this->_tpl_vars['advgroups'][$this->_sections['i']['index']]['advgrp_id']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['advgroups'][$this->_sections['i']['index']]['advgrp_name']; ?>
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
													<input id="adv_status_a" type="radio" name="adv_status" value="1" <?php if ($this->_tpl_vars['adv']['status'] == '1'): ?>checked="checked"<?php endif; ?> class="radio-enabled">
													<label for="adv_status_a">Active</label>
													<input id="adv_status_i" type="radio" name="adv_status" value="0" <?php if ($this->_tpl_vars['adv']['status'] == '0'): ?>checked="checked"<?php endif; ?> class="radio-disabled">
													<label for="adv_status_i">Inactive</label>												
												</div>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="form-group">
											<label class="col-lg-4 control-label">Code</label>
											<div class="col-lg-8">
												<textarea name="adv_text" rows="6" class="form-control <?php if ($this->_tpl_vars['err']['adv_text']): ?>error<?php endif; ?>" style="resize: vertical"><?php echo $this->_tpl_vars['adv']['text']; ?>
</textarea>
											</div>	
											<div class="clearfix"></div>
										</div>									
									</div>
								</div>							
							</div>
							<div class="form-actions">
								<div class="pull-right">
									<input type="submit" name="adv_add" value="Add" class="btn btn-success btn-cons">
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