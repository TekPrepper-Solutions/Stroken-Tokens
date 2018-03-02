<?php /* Smarty version 2.6.20, created on 2018-02-18 23:47:35
         compiled from notices_add.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'notices_add.tpl', 42, false),)), $this); ?>
	<!-- BEGIN PAGE CONTAINER-->
	<div class="page-content"> 
		<div class="content">  
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<i class="icon-custom-left"></i>
				<h3>Notices - <span class="semi-bold">Add Notice</span></h3>
			</div>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "errmsg.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "warnings.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<!-- END PAGE TITLE -->
			<!-- BEGIN PlACE PAGE CONTENT HERE -->
			<div class="col-md-12">
				<div class="grid simple">
					<div class="grid-title no-border">
						<h4>Add <span class="semi-bold">Notice</span></h4>
					</div>
					<div class="grid-body no-border">
						<form class="form-no-horizontal-spacing" name="email_user" method="POST" action="notices.php?m=add">
							<h3>Notice <span class="semi-bold">Details</span></h3>
							<div class="row">
								<div class="form-group">
									<label class="col-lg-3 control-label">Username</label>					
									<div class="col-lg-9">
										<input type="text" id="username" name="username" value="<?php echo $this->_tpl_vars['notice']['username']; ?>
" class="form-control <?php if ($this->_tpl_vars['err']['username']): ?>error<?php endif; ?>" list="suggestions" autocomplete="off" >
										<datalist id="suggestions"></datalist>												
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="form-group">
									<label class="col-lg-3 control-label">Title</label>					
									<div class="col-lg-9">
										<input type="text" id="title" name="title" value="<?php echo $this->_tpl_vars['notice']['title']; ?>
" class="form-control <?php if ($this->_tpl_vars['err']['title']): ?>error<?php endif; ?>">										
									</div>
									<div class="clearfix"></div>
								</div>								
								<div class="form-group">
									<label class="col-lg-3 control-label">Category</label>
									<div class="col-lg-9">
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
											<option value="<?php echo $this->_tpl_vars['categories'][$this->_sections['i']['index']]['category_id']; ?>
"<?php if ($this->_tpl_vars['categories'][$this->_sections['i']['index']]['category_id'] == $this->_tpl_vars['notice']['category']): ?> selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['categories'][$this->_sections['i']['index']]['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</option>
											<?php endfor; endif; ?>
										</select>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="form-group">
									<label class="col-lg-3 control-label">Status</label>
									<div class="col-lg-9">
										<div class="radio p-t-9">
											<input id="status_a" type="radio" name="status" value="1" <?php if ($this->_tpl_vars['notice']['status'] == '1'): ?>checked="checked"<?php endif; ?> class="radio-enabled">
											<label for="status_a">Active</label>
											<input id="status_s" type="radio" name="status" value="0" <?php if ($this->_tpl_vars['notice']['status'] == '0'): ?>checked="checked"<?php endif; ?> class="radio-disabled">
											<label for="status_s">Suspended</label>												
										</div>
									</div>
									<div class="clearfix"></div>
								</div>								
								<div class="form-group m-0">
									<div class="col-xs-12">
										<textarea name="notice-content" id="notice-content" rows='30' style="width:100%" class="<?php if ($this->_tpl_vars['err']['message']): ?>error<?php endif; ?>"><?php echo $this->_tpl_vars['notice']['content']; ?>
</textarea>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="form-actions">
								<div class="pull-right">
									<input type="submit" name="add_notice" value="Add Notice" class="btn btn-success btn-cons">
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