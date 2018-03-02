<?php /* Smarty version 2.6.20, created on 2018-02-19 00:15:24
         compiled from games.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'games.tpl', 163, false),array('modifier', 'date_format', 'games.tpl', 182, false),)), $this); ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "game_edit.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "game_thumbnail.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "comments.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>	
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "game_view.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<!-- BEGIN PAGE CONTAINER-->
	<div class="page-content"> 
		<div class="content">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<i class="icon-custom-left"></i>
				<h3>Games - <span class="semi-bold">Manage Games</span></h3>
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
						<h4>Search <span class="semi-bold">Filters</span></h4>
					</div>
					<div class="grid-body no-border">
						<div class="row">
							<div class="col-xs-12">
								<form class="form-no-horizontal-spacing search-filters" name="search_games" method="POST" action="games.php?m=<?php echo $this->_tpl_vars['module']; ?>
">
									<div class="filters">
										<div class="row">
											<div class="filter col-xs-12 col-sm-6 col-md-4">
												<div class="form-group">
													<input type="text" id="filter_username" name="username" value="<?php echo $this->_tpl_vars['option']['username']; ?>
" class="form-control <?php if ($this->_tpl_vars['option']['username']): ?>filter-active<?php endif; ?>" placeholder="Username">
													<i id="filter_remove_username" class="fa fa-times remove-filter" <?php if (! $this->_tpl_vars['option']['username']): ?>style="display:none"<?php endif; ?>></i>
												</div>
											</div>
											<div class="filter col-xs-12 col-sm-6 col-md-4">
												<div class="form-group">
													<input type="text"  id="filter_title" name="title" value="<?php echo $this->_tpl_vars['option']['title']; ?>
" class="form-control <?php if ($this->_tpl_vars['option']['title']): ?>filter-active<?php endif; ?>" placeholder="Title">
													<i id="filter_remove_title" class="fa fa-times remove-filter" <?php if (! $this->_tpl_vars['option']['title']): ?>style="display:none"<?php endif; ?>></i>
												</div>										
											</div>
											<div class="filter col-xs-12 col-sm-6 col-md-4">
												<div class="form-group">
													<input type="text"  id="filter_keyword" name="keyword" value="<?php echo $this->_tpl_vars['option']['keyword']; ?>
" class="form-control <?php if ($this->_tpl_vars['option']['keyword']): ?>filter-active<?php endif; ?>" placeholder="Tag">
													<i id="filter_remove_keyword" class="fa fa-times remove-filter" <?php if (! $this->_tpl_vars['option']['keyword']): ?>style="display:none"<?php endif; ?>></i>
												</div>										
											</div>
											<div class="filter col-xs-12 col-sm-6 col-md-4">
												<div class="form-group">
													<select id="filter_category" name="category" style="width:100%">
														<option value="">Category</option>
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
"<?php if ($this->_tpl_vars['categories'][$this->_sections['i']['index']]['category_id'] == $this->_tpl_vars['option']['category']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['categories'][$this->_sections['i']['index']]['category_name']; ?>
</option>
														<?php endfor; endif; ?>
													</select>  												
												</div>
											</div>
											<div class="filter col-xs-12 col-sm-6 col-md-4">
												<div class="form-group">
													<select id="filter_status" name="status" style="width:100%">
														<option value="">Status</option>
														<option value="1"<?php if ($this->_tpl_vars['option']['status'] == '1'): ?> selected="selected"<?php endif; ?>>Active</option>
														<option value="0"<?php if ($this->_tpl_vars['option']['status'] == '0'): ?> selected="selected"<?php endif; ?>>Inactive</option>
													</select>												
												</div>
											</div>
											<div class="filter col-xs-12 col-sm-6 col-md-4">
												<div class="form-group">
													<select id="filter_type" name="type" style="width:100%">
														<option value="">Type</option>
														<option value="public"<?php if ($this->_tpl_vars['option']['type'] == 'public'): ?> selected="selected"<?php endif; ?>>Public</option>
														<option value="private"<?php if ($this->_tpl_vars['option']['type'] == 'private'): ?> selected="selected"<?php endif; ?>>Private</option>
													</select>												
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
										<div class="btn-group"> <a class="btn dropdown-toggle btn-demo-space" data-toggle="dropdown" href="#">Order by <span id="sort_items"><?php if ($this->_tpl_vars['option']['sort'] == 'g.title'): ?>Title<?php elseif ($this->_tpl_vars['option']['sort'] == 'g.type'): ?>Type<?php elseif ($this->_tpl_vars['option']['sort'] == 'g.adddate'): ?>Date<?php elseif ($this->_tpl_vars['option']['sort'] == 'g.total_plays'): ?>Plays<?php elseif ($this->_tpl_vars['option']['sort'] == 'g.total_favorites'): ?>Favorites<?php elseif ($this->_tpl_vars['option']['sort'] == 'g.total_comments'): ?>Comments<?php else: ?>ID<?php endif; ?></span> <span class="caret"></span> </a>
											<ul class="dropdown-menu">
												<li><a href="#" onClick="document.getElementById('sort_items').innerText = 'ID'; document.getElementById('sort').value = 'g.GID'" >ID</a></li>
												<li><a href="#" onClick="document.getElementById('sort_items').innerText = 'Title'; document.getElementById('sort').value = 'g.title'" >Title</a></li>
												<li><a href="#" onClick="document.getElementById('sort_items').innerText = 'Type'; document.getElementById('sort').value = 'g.type'" >Type</a></li>
												<li><a href="#" onClick="document.getElementById('sort_items').innerText = 'Date'; document.getElementById('sort').value = 'g.adddate'" >Date</a></li>
												<li><a href="#" onClick="document.getElementById('sort_items').innerText = 'Plays'; document.getElementById('sort').value = 'g.total_plays'" >Plays</a></li>
												<li><a href="#" onClick="document.getElementById('sort_items').innerText = 'Favorites'; document.getElementById('sort').value = 'g.total_favorites'" >Favorites</a></li>
												<li><a href="#" onClick="document.getElementById('sort_items').innerText = 'Comments'; document.getElementById('sort').value = 'g.total_comments'" >Comments</a></li>											
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
										<button type="submit" name="search_games" class="btn btn-success btn-cons btn-icon m-r-0"><i class="fa fa-search"></i></button>									
									</div>
									<div class="clearfix"></div>
								</form>
							</div>
						</div>
						<!-- END SEARCH FILTERS -->						
						<div class="row">
							<div class="col-xs-12">
								<div>
									 <?php if ($this->_tpl_vars['total_games'] >= 1): ?>
										<form class="form-no-horizontal-spacing" name="game_select" method="post" id="game_select" action="">
										<div>
											<input type="submit" name="delete_selected_games" value="Delete" class="btn btn-danger btn-cons" onClick="javascript:return confirm('Are you sure you want to delete all selected games?');">
											<input type="submit" name="suspend_selected_games" value="Suspend" class="btn btn-white btn-cons" onClick="javascript:return confirm('Are you sure you want to suspend all selected games?');">
											<input type="submit" name="approve_selected_games" value="Approve" class="btn btn-white btn-cons" onClick="javascript:return confirm('Are you sure you want to approve all selected games?');">
										</div>
										<div class="s-pagination"><?php echo $this->_tpl_vars['paging']; ?>
</div>
										<div class="checkbox check-default">
											<input id="check_all_games" name="check_all_games" type="checkbox" id="game_check_all">
											<label for="check_all_games" style="margin: 0 0 15px 10px !important;">Select All</label>
											<code class="text-info hidden-xs hidden-sm pull-right">Use CHECK -> SHIFT + CHECK to select multiple games.</code>
										</div>
										<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['games']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
											<div id="item-<?php echo $this->_tpl_vars['games'][$this->_sections['i']['index']]['GID']; ?>
" class="item-main-container">
												<div class="item-col-left">
													<div class="item-main">
														<div class="item-select" unselectable="on" onselectstart="return false;" onmousedown="return false;">
															<div class="checkbox check-default">
																<input name="game_id_checkbox_<?php echo $this->_tpl_vars['games'][$this->_sections['i']['index']]['GID']; ?>
" id="game_checkbox_<?php echo $this->_tpl_vars['games'][$this->_sections['i']['index']]['GID']; ?>
" type="checkbox" class="select-multiple">
																<label for="game_checkbox_<?php echo $this->_tpl_vars['games'][$this->_sections['i']['index']]['GID']; ?>
" style="margin: 0 0 15px 0 !important;"></label>
															</div>												
														</div>
														<div class="item-thumb">
															<div class="thumb-overlay">														
																<a id="view_game_<?php echo $this->_tpl_vars['games'][$this->_sections['i']['index']]['GID']; ?>
" href="#">
																	<img id="thumb-<?php echo $this->_tpl_vars['games'][$this->_sections['i']['index']]['GID']; ?>
" src="<?php echo $this->_tpl_vars['baseurl']; ?>
/media/games/tmb/<?php echo $this->_tpl_vars['games'][$this->_sections['i']['index']]['GID']; ?>
.jpg" class="img-responsive">
																</a>
																<div class="item-id">
																	<b>ID</b> <?php echo $this->_tpl_vars['games'][$this->_sections['i']['index']]['GID']; ?>

																</div>
																<div id="private-<?php echo $this->_tpl_vars['games'][$this->_sections['i']['index']]['GID']; ?>
">
																	<?php if ($this->_tpl_vars['games'][$this->_sections['i']['index']]['type'] == 'private'): ?><div class="item-private">PRIVATE</div><?php endif; ?>
																</div>
																<div id="photos-loading-<?php echo $this->_tpl_vars['games'][$this->_sections['i']['index']]['GID']; ?>
" class="thumbnails-loading" style="display: none"><i class="loader"></i></div>
															</div>												
														</div>
													</div>
												</div>
												<div class="item-col-right">
													<div class="item-details">
														<div class="item-title">
															<a id="view_game_<?php echo $this->_tpl_vars['games'][$this->_sections['i']['index']]['GID']; ?>
_" href="#"><span id="title-<?php echo $this->_tpl_vars['games'][$this->_sections['i']['index']]['GID']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['games'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</span></a>
														</div>
														<div class="row">						
															<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
																<div class="d-label">User</div>
																<a href="users.php?m=all&all=1&UID=<?php echo $this->_tpl_vars['games'][$this->_sections['i']['index']]['UID']; ?>
" class="text-info"><?php echo $this->_tpl_vars['games'][$this->_sections['i']['index']]['username']; ?>
</a>															
															</div>
															<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
																<div class="d-label">Status</div>
																<span id="status-<?php echo $this->_tpl_vars['games'][$this->_sections['i']['index']]['GID']; ?>
">
																	<?php if ($this->_tpl_vars['games'][$this->_sections['i']['index']]['status'] == 1): ?>
																		<span class="text-green" alt="Active" title="Active">Active</span>
																	<?php else: ?>
																		<span class="text-red" alt="Inactive" title="Inactive">Inactive</span>
																	<?php endif; ?>
																</span>
															</div>
															<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
																<div class="d-label">Date</div>
																<?php echo ((is_array($_tmp=$this->_tpl_vars['games'][$this->_sections['i']['index']]['adddate'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
													
															</div>
															<div class="col-xs-4 col-sm-4 col-md-1 col-lg-1">
																<div class="d-label"><i class="fa fa-comments"></i></div>
																<?php if ($this->_tpl_vars['games'][$this->_sections['i']['index']]['total_comments'] > 0): ?>
																	<a id="comments_Game_<?php echo $this->_tpl_vars['games'][$this->_sections['i']['index']]['GID']; ?>
" href="#" class="text-info"><?php echo $this->_tpl_vars['games'][$this->_sections['i']['index']]['total_comments']; ?>
</a>
																<?php else: ?>
																	<span class="text-muted"><?php echo $this->_tpl_vars['games'][$this->_sections['i']['index']]['total_comments']; ?>
</span>
																<?php endif; ?>																
															</div>
															<div class="col-xs-4 col-sm-4 col-md-1 col-lg-1">
																<div class="d-label"><i class="fa fa-eye"></i></div>
																<span id="views-<?php echo $this->_tpl_vars['games'][$this->_sections['i']['index']]['GID']; ?>
"><?php echo $this->_tpl_vars['games'][$this->_sections['i']['index']]['total_plays']; ?>
</span>
															</div>
															<div class="col-xs-4 col-sm-4 col-md-1 col-lg-1">
																<div class="d-label"><i class="fa fa-star"></i></div>
																<?php echo $this->_tpl_vars['games'][$this->_sections['i']['index']]['total_favorites']; ?>

															</div>
														</div>
													</div>
												</div>
												<div class="clearfix"></div>
												<div class="item-actions">																									
													<div class="btn-group">
														<div class="btn-group">
															<a id="delete__game_<?php echo $this->_tpl_vars['games'][$this->_sections['i']['index']]['GID']; ?>
" class="btn btn-success" data-toggle="dropdown" href="#" alt="Delete" title="Delete"><i class="fa fa-trash-o"></i></a>
															<ul class="dropdown-menu">
																<li><a id="delete_game_<?php echo $this->_tpl_vars['games'][$this->_sections['i']['index']]['GID']; ?>
" href="#">Delete</a></li>
															</ul>
														</div>
														<a id="edit_game_<?php echo $this->_tpl_vars['games'][$this->_sections['i']['index']]['GID']; ?>
" class="btn btn-success" href="#" alt="Edit" title="Edit"><i class="fa fa-pencil"></i></a>
														<a id="thumb_game_<?php echo $this->_tpl_vars['games'][$this->_sections['i']['index']]['GID']; ?>
" class="btn btn-success" href="#" alt="Thumbnail" title="Thumbnail"><i class="fa fa-picture-o"></i></a>
														<?php if ($this->_tpl_vars['games'][$this->_sections['i']['index']]['status'] == '1'): ?>
															<a id="status_game_<?php echo $this->_tpl_vars['games'][$this->_sections['i']['index']]['GID']; ?>
" class="btn btn-success" href="#" alt="Suspend" title="Suspend" data-processing="0" data-status="1"><i class="fa fa-times"></i></a>
														<?php else: ?>
															<a id="status_game_<?php echo $this->_tpl_vars['games'][$this->_sections['i']['index']]['GID']; ?>
" class="btn btn-success" href="#" alt="Activate" title="Activate" data-processing="0" data-status="0"><i class="fa fa-check"></i></a>
														<?php endif; ?>																	
													</div>
												
												</div>												
											</div>
										<?php endfor; endif; ?>
											

										<div class="s-pagination"><?php echo $this->_tpl_vars['paging']; ?>
</div>										
										</form>
									<?php else: ?>
									<div class="row">
										<div class="col-xs-12">
											<div class="alert alert-info">
												<button class="close" data-dismiss="alert"></button>
												No Games Found
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