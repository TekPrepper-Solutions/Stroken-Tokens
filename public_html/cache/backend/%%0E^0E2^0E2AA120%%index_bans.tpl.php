<?php /* Smarty version 2.6.20, created on 2017-12-11 02:23:23
         compiled from index_bans.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'user_byip', 'index_bans.tpl', 103, false),)), $this); ?>
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
						<h4>Bans <span class="semi-bold"></span></h4>
					</div>
					<div class="grid-body no-border">
						<div class="row">
							<div class="col-xs-12">
								<form class="form-no-horizontal-spacing form-grey" name="add_ban" method="POST" action="index.php?m=bans&a=add">
									<div class="row">
										<div class="col-xs-12 col-sm-6 col-md-4">
											<div class="form-group">
												<input type="text" name="add_ip" value="<?php echo $this->_tpl_vars['ban_ip']; ?>
" class="form-control <?php if ($this->_tpl_vars['err']['add_ip']): ?>error<?php endif; ?>" placeholder="IP">
											</div>
										</div>
										<div class="col-xs-12 col-sm-6 col-md-8">
											<div class="form-group">
												<input type="submit" name="add_ban" value="Add Ban" class="btn btn-success btn-cons btn-icon m-0 pull-right">
												<div class="clearfix"></div>
											</div>
										</div>
									</div>			
								</form>
								<form class="form-no-horizontal-spacing search-filters" name="search_bans" method="POST" action="index.php?m=bans">
									<div class="filters">
										<div class="row">
											<div class="filter col-xs-12 col-sm-6 col-md-4">
												<div class="form-group">
													<input type="text" id="filter_ip" name="ip" value="<?php echo $this->_tpl_vars['option']['ip']; ?>
" class="form-control <?php if ($this->_tpl_vars['option']['ip']): ?>filter-active<?php endif; ?>" placeholder="IP">
													<i id="filter_remove_ip" class="fa fa-times remove-filter" <?php if (! $this->_tpl_vars['option']['ip']): ?>style="display:none"<?php endif; ?>></i>
												</div>
											</div>										
										</div>
									</div>
									<input id="sort" name="sort" type="hidden" value=<?php echo $this->_tpl_vars['option']['sort']; ?>
>
									<input id="order" name="order" type="hidden" value=<?php echo $this->_tpl_vars['option']['order']; ?>
>
									<input id="display" name="display" type="hidden" value=<?php echo $this->_tpl_vars['option']['display']; ?>
>

									<div class="pull-left">
										<div class="btn-group"> <a class="btn dropdown-toggle btn-demo-space" data-toggle="dropdown" href="#">Order by <span id="sort_items"><?php if ($this->_tpl_vars['option']['sort'] == 'ban_ip'): ?>IP<?php elseif ($this->_tpl_vars['option']['sort'] == 'ban_date'): ?>Ban Date<?php else: ?>ID<?php endif; ?></span> <span class="caret"></span> </a>
											<ul class="dropdown-menu">
												<li><a href="#" onClick="document.getElementById('sort_items').innerText = 'ID'; document.getElementById('sort').value = 'ban_id'" >ID</a></li>
												<li><a href="#" onClick="document.getElementById('sort_items').innerText = 'IP'; document.getElementById('sort').value = 'ban_ip'" >IP</a></li>
												<li><a href="#" onClick="document.getElementById('sort_items').innerText = 'Ban Date'; document.getElementById('sort').value = 'ban_date'" >Ban Date</a></li>

											</ul>
										</div>									
										<div class="btn-group"> <a class="btn dropdown-toggle btn-demo-space" data-toggle="dropdown" href="#"><span id="order_items"><?php if ($this->_tpl_vars['option']['order'] == 'ASC'): ?>Ascending<?php else: ?>Descending<?php endif; ?></span> <span class="caret"></span> </a>
											<ul class="dropdown-menu">
												<li><a href="#" onClick="document.getElementById('order_items').innerText = 'Ascending'; document.getElementById('order').value = 'ASC'" >Ascending</a></li>
												<li><a href="#" onClick="document.getElementById('order_items').innerText = 'Descending'; document.getElementById('order').value = 'DESC'" >Descending</a></li>
											</ul>
										</div>									
										<div class="btn-group"> <a class="btn dropdown-toggle btn-demo-space" data-toggle="dropdown" href="#"><span id="display_items"><?php echo $this->_tpl_vars['option']['display']; ?>
</span> <span class="caret"></span> </a>
											<ul class="dropdown-menu">
												<li><a href="#" onClick="document.getElementById('display_items').innerText = '10'; document.getElementById('display').value = '10'" >10</a></li>
												<li><a href="#" onClick="document.getElementById('display_items').innerText = '20'; document.getElementById('display').value = '20'" >20</a></li>
												<li><a href="#" onClick="document.getElementById('display_items').innerText = '30'; document.getElementById('display').value = '30'" >30</a></li>
												<li><a href="#" onClick="document.getElementById('display_items').innerText = '40'; document.getElementById('display').value = '40'" >40</a></li>
												<li><a href="#" onClick="document.getElementById('display_items').innerText = '50'; document.getElementById('display').value = '50'" >50</a></li>
												<li><a href="#" onClick="document.getElementById('display_items').innerText = '100'; document.getElementById('display').value = '100'" >100</a></li>
												<li><a href="#" onClick="document.getElementById('display_items').innerText = '200'; document.getElementById('display').value = '200'" >200</a></li>
											</ul>
										</div>
									</div>
									<div class="pull-right">
										<button type="button" id="reset_search" name="reset_search" class="btn btn-white btn-cons btn-icon"><i class="fa fa-times"></i></button>									
										<button type="submit" name="search_bans" class="btn btn-success btn-cons btn-icon m-r-0"><i class="fa fa-search"></i></button>									
									</div>
									<div class="clearfix"></div>
								</form>	
							</div>
						</div>
						<!-- END SEARCH FILTERS -->
						<div class="row">
							<div class="col-xs-12">
								<div>
									<?php if ($this->_tpl_vars['total_bans'] >= 1): ?>
										<div class="s-pagination"><?php echo $this->_tpl_vars['paging']; ?>
</div>
										<table class="table no-more-tables m-0">
											<thead>
												<tr>
													<th style="width:5%">ID</th>
													<th>IP</th>
													<th>USERNAME</th>
													<th>DATE</th>												
													<th>ACTION</th>
												</tr>
											</thead>
											<tbody>
												<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['bans']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
												<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'user_byip', 'assign' => 'uname', 'ip' => $this->_tpl_vars['bans'][$this->_sections['i']['index']]['ban_ip'])), $this); ?>

												<tr>
													<td class="<?php if ($this->_sections['i']['index'] % 2 == 0): ?>grey<?php else: ?>white<?php endif; ?>"><?php echo $this->_tpl_vars['bans'][$this->_sections['i']['index']]['ban_id']; ?>
</td>
													<td class="<?php if ($this->_sections['i']['index'] % 2 == 0): ?>grey<?php else: ?>white<?php endif; ?>"><?php echo $this->_tpl_vars['bans'][$this->_sections['i']['index']]['ban_ip']; ?>
</td>
													<td class="<?php if ($this->_sections['i']['index'] % 2 == 0): ?>grey<?php else: ?>white<?php endif; ?>">
														<?php if ($this->_tpl_vars['uname']['UID']): ?> 
															<a href="users.php?m=all&all=1&UID=<?php echo $this->_tpl_vars['uname']['UID']; ?>
" class="text-info"><?php echo $this->_tpl_vars['uname']['username']; ?>
</a>
														<?php else: ?>
															<span class="text-danger"><?php echo $this->_tpl_vars['uname']['username']; ?>
</span>
														<?php endif; ?>
													</td>
													<td class="<?php if ($this->_sections['i']['index'] % 2 == 0): ?>grey<?php else: ?>white<?php endif; ?>"><?php echo $this->_tpl_vars['bans'][$this->_sections['i']['index']]['ban_date']; ?>
</td>												
													<td class="action <?php if ($this->_sections['i']['index'] % 2 == 0): ?>grey<?php else: ?>white<?php endif; ?>">
														<div>
															<a class="btn btn-danger btn-xs btn-mini" href="index.php?m=bans<?php if ($this->_tpl_vars['page'] != ''): ?>&page=<?php echo $this->_tpl_vars['page']; ?>
<?php endif; ?>&a=delete&BID=<?php echo $this->_tpl_vars['bans'][$this->_sections['i']['index']]['ban_id']; ?>
" onClick="javascript:return confirm('Are you sure you want to remove this ban?');">REMOVE</a>
														</div>
													</td>									
												</tr>
												<?php endfor; endif; ?>
											</tbody>											
										</table>										
										<div class="s-pagination"><?php echo $this->_tpl_vars['paging']; ?>
</div>
									<?php else: ?>
									<div class="row">
										<div class="col-xs-12">
											<div class="alert alert-info">
												<button class="close" data-dismiss="alert"></button>
												No Bans Found
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