<?php /* Smarty version 2.6.20, created on 2018-02-18 23:47:40
         compiled from notices_list_categories.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'notices_list_categories.tpl', 90, false),)), $this); ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "category_edit.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "category_thumbnail.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<!-- BEGIN PAGE CONTAINER-->
	<div class="page-content"> 
		<div class="content">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<i class="icon-custom-left"></i>
				<h3>Categories - <span class="semi-bold">Notice Categories</span></h3>
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
						<h4>Notice <span class="semi-bold">Categories</span></h4>
					</div>
					<div class="grid-body no-border">
						<div class="row">
							<div class="col-xs-12">
								<form class="form-no-horizontal-spacing form-grey" name="add_category" method="POST" enctype="multipart/form-data" action="notices.php?m=list_categories">
									<div class="row">
										<div class="col-xs-12 col-sm-6 col-md-3">
											<div class="form-group">
												 <input type="text" name="name" value="<?php echo $this->_tpl_vars['category']['name']; ?>
" class="form-control <?php if ($this->_tpl_vars['err']['name']): ?>error<?php endif; ?>" placeholder="Name">												
											</div>
										</div>								
										<div class="col-xs-12 col-sm-6 col-md-9">
											<div class="form-group">
												<input type="submit" name="add_category" value="Add Category" class="btn btn-success btn-cons btn-icon m-0 pull-right">
												<div class="clearfix"></div>
											</div>
										</div>
									</div>			
								</form>						
								<form class="form-no-horizontal-spacing search-filters" name="search_categories" method="POST" action="notices.php?m=list_categories">
									<input id="sort" name="sort" type="hidden" value=<?php echo $this->_tpl_vars['option']['sort']; ?>
>
									<input id="order" name="order" type="hidden" value=<?php echo $this->_tpl_vars['option']['order']; ?>
>
									<div class="pull-left">
										<div class="btn-group"> <a class="btn dropdown-toggle btn-demo-space" data-toggle="dropdown" href="#">Order by <span id="sort_items"><?php if ($this->_tpl_vars['option']['sort'] == 'name'): ?>Name<?php elseif ($this->_tpl_vars['option']['sort'] == 'total_notices'): ?>Total Notices<?php else: ?>ID<?php endif; ?></span> <span class="caret"></span> </a>
											<ul class="dropdown-menu">
												<li><a href="#" onClick="document.getElementById('sort_items').innerText = 'ID'; document.getElementById('sort').value = 'category_id'" >ID</a></li>
												<li><a href="#" onClick="document.getElementById('sort_items').innerText = 'Name'; document.getElementById('sort').value = 'name'" >Name</a></li>
												<li><a href="#" onClick="document.getElementById('sort_items').innerText = 'Total Notices'; document.getElementById('sort').value = 'total_notices'" >Total Notices</a></li>										
											</ul>
										</div>									
										<div class="btn-group"> <a class="btn dropdown-toggle btn-demo-space" data-toggle="dropdown" href="#"><span id="order_items"><?php if ($this->_tpl_vars['option']['order'] == 'ASC'): ?>Ascending<?php else: ?>Descending<?php endif; ?></span> <span class="caret"></span> </a>
											<ul class="dropdown-menu">
												<li><a href="#" onClick="document.getElementById('order_items').innerText = 'Ascending'; document.getElementById('order').value = 'ASC'" >Ascending</a></li>
												<li><a href="#" onClick="document.getElementById('order_items').innerText = 'Descending'; document.getElementById('order').value = 'DESC'" >Descending</a></li>
											</ul>
										</div>
									</div>
									<div class="pull-right">
										<button type="button" id="reset_search" name="reset_search" class="btn btn-white btn-cons btn-icon"><i class="fa fa-times"></i></button>									
										<button type="submit" name="search_categories" class="btn btn-success btn-cons btn-icon m-r-0"><i class="fa fa-search"></i></button>									
									</div>
									<div class="clearfix"></div>
								</form>
							</div>
						</div>
						<!-- END SEARCH FILTERS -->						
						<div class="row">
							<div class="col-xs-12">
								<div>
									<?php if ($this->_tpl_vars['categories']): ?>
										<form class="form-no-horizontal-spacing" name="category_select" method="post" id="category_select" action="">
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
											<div id="item-<?php echo $this->_tpl_vars['categories'][$this->_sections['i']['index']]['category_id']; ?>
" class="item-main-container notice">
												<div class="item-col-left">
													<div class="item-main">
														<div class="item-thumb">
															<div class="thumb-overlay">	
																<a href="notices.php?m=all&CID=<?php echo $this->_tpl_vars['categories'][$this->_sections['i']['index']]['category_id']; ?>
">
																	<img id="thumb-<?php echo $this->_tpl_vars['categories'][$this->_sections['i']['index']]['category_id']; ?>
" src="<?php echo $this->_tpl_vars['baseurl']; ?>
/templates/backend/default/assets/img/category.png" class="img-responsive">
																</a>
																<div class="item-id">
																	<b>ID</b> <?php echo $this->_tpl_vars['categories'][$this->_sections['i']['index']]['category_id']; ?>

																</div>
																<div id="photos-loading-<?php echo $this->_tpl_vars['categories'][$this->_sections['i']['index']]['category_id']; ?>
" class="thumbnails-loading" style="display: none"><i class="loader"></i></div>
															</div>												
														</div>
													</div>
												</div>
												<div class="item-col-right">
													<div class="item-details">
														<div class="item-title">
															<a href="notices.php?m=all&CID=<?php echo $this->_tpl_vars['categories'][$this->_sections['i']['index']]['category_id']; ?>
">
																<span class="text-info" id="title-<?php echo $this->_tpl_vars['categories'][$this->_sections['i']['index']]['category_id']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['categories'][$this->_sections['i']['index']]['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</span>
															</a>
														</div>
														<div class="row">						
															<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
																<div class="d-label">Status</div>
																<span id="status-<?php echo $this->_tpl_vars['categories'][$this->_sections['i']['index']]['category_id']; ?>
">
																	<?php if ($this->_tpl_vars['categories'][$this->_sections['i']['index']]['status'] == 1): ?>
																		<span class="text-green" alt="Active" title="Active">Active</span>
																	<?php else: ?>
																		<span class="text-red" alt="Inactive" title="Inactive">Inactive</span>
																	<?php endif; ?>
																</span>
															</div>
															<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
																<div class="d-label">Notices</div>
																<a id="total-items-<?php echo $this->_tpl_vars['categories'][$this->_sections['i']['index']]['category_id']; ?>
" href="notices.php?m=list&CID=<?php echo $this->_tpl_vars['categories'][$this->_sections['i']['index']]['category_id']; ?>
"><?php echo $this->_tpl_vars['categories'][$this->_sections['i']['index']]['total_notices']; ?>
</a>
															</div>
														</div>
													</div>
												</div>
												<div class="clearfix"></div>
												<div class="item-actions">																									
													<div class="btn-group">
														<div class="btn-group">
															<a id="delete__category_<?php echo $this->_tpl_vars['categories'][$this->_sections['i']['index']]['category_id']; ?>
" class="btn btn-success" data-toggle="dropdown" href="#" alt="Delete" title="Delete"><i class="fa fa-trash-o"></i></a>
															<ul class="dropdown-menu">
																<li><a id="delete_category_Notice_<?php echo $this->_tpl_vars['categories'][$this->_sections['i']['index']]['category_id']; ?>
" href="#">Delete</a></li>
															</ul>
														</div>
														<a id="edit_category_Notice_<?php echo $this->_tpl_vars['categories'][$this->_sections['i']['index']]['category_id']; ?>
" class="btn btn-success" href="#" alt="Edit" title="Edit"><i class="fa fa-pencil"></i></a>
														<?php if ($this->_tpl_vars['categories'][$this->_sections['i']['index']]['status'] == '1'): ?>
															<a id="status_category_<?php echo $this->_tpl_vars['categories'][$this->_sections['i']['index']]['category_id']; ?>
" class="btn btn-success" href="#" alt="Suspend" title="Suspend" data-processing="0" data-status="1"><i class="fa fa-times"></i></a>
														<?php else: ?>
															<a id="status_category_<?php echo $this->_tpl_vars['categories'][$this->_sections['i']['index']]['category_id']; ?>
" class="btn btn-success" href="#" alt="Activate" title="Activate" data-processing="0" data-status="0"><i class="fa fa-check"></i></a>
														<?php endif; ?>	
													</div>
												
												</div>												
											</div>
										<?php endfor; endif; ?>									
										</form>
									<?php else: ?>
									<div class="row">
										<div class="col-xs-12">
											<div class="alert alert-info">
												<button class="close" data-dismiss="alert"></button>
												No Categories Found
											</div>
										</div>
									</div>
									<?php endif; ?>	
								</div>
							
							</div>
						</div>
					</div>
				</div>
			</div>			
			<!-- END PLACE PAGE CONTENT HERE -->
		</div>
	</div>
	<!-- END PAGE CONTAINER -->	