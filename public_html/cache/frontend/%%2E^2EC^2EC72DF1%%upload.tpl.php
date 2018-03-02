<?php /* Smarty version 2.6.20, created on 2017-12-10 21:01:07
         compiled from upload.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 't', 'upload.tpl', 14, false),)), $this); ?>
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="visible-sm visible-xs">
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'quick_jumps.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			</div>
			<div class="hidden-sm hidden-xs">
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'user_info.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			</div>
		</div>
		<div class="col-md-8">
			<div class="panel panel-default">
				<div class="panel-heading">
					<?php echo smarty_function_t(array('c' => 'upload.title'), $this);?>

				</div>
				<div class="panel-body">
					<div class="row hidden-xs">
					<?php if ($this->_tpl_vars['video_module'] == '1'): ?>
						<div class="col-xs-4">
							<center>
								<a href="<?php echo $this->_tpl_vars['relative']; ?>
/upload/video">
									<div class="text-white"><i class="fa fa-film fa-5x"></i></div>
									<div class="text-lg m-t-10"><?php echo smarty_function_t(array('c' => 'global.videos'), $this);?>
</div>
								</a>
							</center>
						</div>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['photo_module'] == '1'): ?>					
						<div class="col-xs-4">
							<center>
								<a href="<?php echo $this->_tpl_vars['relative']; ?>
/upload/photo">
									<div class="text-white"><i class="fa fa-camera fa-5x"></i></div>
									<div class="text-lg m-t-10"><?php echo smarty_function_t(array('c' => 'global.photos'), $this);?>
</div>
								</a>
							</center>
						</div>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['game_module'] == '1'): ?>
						<div class="col-xs-4">
							<center>
								<a href="<?php echo $this->_tpl_vars['relative']; ?>
/upload/game">
									<div class="text-white"><i class="fa fa-gamepad fa-5x"></i></div>
									<div class="text-lg m-t-10"><?php echo smarty_function_t(array('c' => 'global.games'), $this);?>
</div>
								</a>
							</center>
						</div>
					<?php endif; ?>
					</div>
					<div class="row visible-xs">
					<?php if ($this->_tpl_vars['video_module'] == '1'): ?>
						<div class="col-xs-4">
							<center>
								<a href="<?php echo $this->_tpl_vars['relative']; ?>
/upload/video">
									<div class="text-white"><i class="fa fa-film fa-3x"></i></div>
									<div class="text-md m-t-10"><?php echo smarty_function_t(array('c' => 'global.videos'), $this);?>
</div>
								</a>
							</center>
						</div>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['photo_module'] == '1'): ?>					
						<div class="col-xs-4">
							<center>
								<a href="<?php echo $this->_tpl_vars['relative']; ?>
/upload/photo">
									<div class="text-white"><i class="fa fa-camera fa-3x"></i></div>
									<div class="text-md m-t-10"><?php echo smarty_function_t(array('c' => 'global.photos'), $this);?>
</div>
								</a>
							</center>
						</div>
					<?php endif; ?>
					<?php if ($this->_tpl_vars['game_module'] == '1'): ?>
						<div class="col-xs-4">
							<center>
								<a href="<?php echo $this->_tpl_vars['relative']; ?>
/upload/game">
									<div class="text-white"><i class="fa fa-gamepad fa-3x"></i></div>
									<div class="text-md m-t-10"><?php echo smarty_function_t(array('c' => 'global.games'), $this);?>
</div>
								</a>
							</center>
						</div>
					<?php endif; ?>
					</div>					
				</div>
			</div>	
		</div>
	</div>
</div>