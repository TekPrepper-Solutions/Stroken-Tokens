<?php /* Smarty version 2.6.20, created on 2018-02-19 00:15:32
         compiled from games_add.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'games_add.tpl', 42, false),)), $this); ?>
	<!-- BEGIN PAGE CONTAINER-->
	<div class="page-content"> 
		<div class="content">  
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<i class="icon-custom-left"></i>
				<h3>Games - <span class="semi-bold">Add Game</span></h3>
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
						<h4>Game <span class="semi-bold">Information</span></h4>
					</div>
					<div class="grid-body no-border">
						<form class="form-no-horizontal-spacing" name="add_game" method="POST" enctype="multipart/form-data" action="games.php?m=add">
				
							<div class="row">
								<div class="col-lg-6 col-lg-offset-3 col-md-12">
									<div class="row">		
										<div class="form-group">
											<label class="col-lg-4 control-label">Username</label>
											<div class="col-lg-8">
												<input class="form-control <?php if ($this->_tpl_vars['err']['username']): ?>error<?php endif; ?>" name="username" type="text" value="<?php echo $this->_tpl_vars['game']['username']; ?>
">
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="form-group">
											<label class="col-lg-4 control-label">Title</label>
											<div class="col-lg-8">
												<input class="form-control <?php if ($this->_tpl_vars['err']['title']): ?>error<?php endif; ?>" name="title" type="text" value="<?php echo $this->_tpl_vars['game']['title']; ?>
">
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="form-group">
											<label class="col-lg-4 control-label">Category</label>
											<div class="col-lg-8">
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
"<?php if ($this->_tpl_vars['game']['category'] == $this->_tpl_vars['categories'][$this->_sections['i']['index']]['category_id']): ?> selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['categories'][$this->_sections['i']['index']]['category_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</option>
													<?php endfor; endif; ?>
												</select>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="form-group">
											<label class="col-lg-4 control-label">Tags</label>
											<div class="col-lg-8">
												 <textarea class="form-control <?php if ($this->_tpl_vars['err']['tags']): ?>error<?php endif; ?>" name="tags" rows="3" style="resize: vertical"><?php echo $this->_tpl_vars['game']['tags']; ?>
</textarea>
												 <span class="help">Space separated</span>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="form-group">
											<label class="col-lg-4 control-label">Type</label>
											<div class="col-lg-8">
												<div class="radio p-t-9">
													<input id="type_pb" type="radio" name="type" value="public" <?php if ($this->_tpl_vars['game']['type'] != 'private'): ?>checked="checked"<?php endif; ?> class="radio-enabled">
													<label for="type_pb">Public</label>
													<input id="type_pv" type="radio" name="type" value="private" <?php if ($this->_tpl_vars['game']['type'] == 'private'): ?>checked="checked"<?php endif; ?> class="radio-disabled">
													<label for="type_pv">Private</label>												
												</div>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="form-group">
											<label class="col-lg-4 control-label">Game</label>
											<div class="col-lg-8">
												<div id="get_file" class="btn btn btn-success btn-file" onclick="getFile('game_file')">Choose File</div>
												<div class="file-box">
													<span id="addgame">No file chosen</span>
													<input name="game_file" type="file" id="game_file" onChange="sub(this,'addgame','nofile_1')" accept=".swf" />		
													<input type="hidden" id="nofile_1" value="No File">
												</div>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="form-group">
											<label class="col-lg-4 control-label">Thumbnail</label>
											<div class="col-lg-8">
												<div id="get_file" class="btn btn btn-success btn-file" onclick="getFile('game_thumb')">Choose File</div>
												<div class="file-box">
													<span id="addthumb">No file chosen</span>
													<input name="game_thumb" type="file" id="game_thumb" onChange="sub(this,'addthumb','nofile_2')" accept=".gif,.jpg,.jpeg,.png" />		
													<input type="hidden" id="nofile_2" value="No File">
												</div>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-actions">
								<div class="pull-right">
									<input name="add_game" type="submit" value="Add Game" id="add_game" class="btn btn-success btn-cons" onClick="document.getElementById('add_game').value='Uploading...'">
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