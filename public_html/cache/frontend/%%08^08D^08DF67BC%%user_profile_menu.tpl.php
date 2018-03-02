<?php /* Smarty version 2.6.20, created on 2018-01-04 21:23:03
         compiled from user_profile_menu.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 't', 'user_profile_menu.tpl', 2, false),)), $this); ?>
<script type="text/javascript">
var lang_blocking = "<?php echo smarty_function_t(array('c' => 'global.blocking'), $this);?>
";
var lang_unblocking = "<?php echo smarty_function_t(array('c' => 'global.unblocking'), $this);?>
";
var lang_block = "<?php echo smarty_function_t(array('c' => 'user.block'), $this);?>
";
var lang_unblock = "<?php echo smarty_function_t(array('c' => 'user.unblock'), $this);?>
";
</script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/js/jquery.profile-0.2.js"></script>
<div class="container">

	<ul class="nav nav-tabs hidden-xs">
		<li <?php if ($this->_tpl_vars['profile_menu'] == 'edit'): ?> class="active"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/edit"><?php echo smarty_function_t(array('c' => 'user.personal'), $this);?>
</a></li>
		<li <?php if ($this->_tpl_vars['profile_menu'] == 'prefs'): ?> class="active"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/prefs"><?php echo smarty_function_t(array('c' => 'user.prefs'), $this);?>
</a></li>
		<li <?php if ($this->_tpl_vars['profile_menu'] == 'avatar'): ?> class="active"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/avatar"><?php echo smarty_function_t(array('c' => 'user.avatar'), $this);?>
</a></li>
		<li <?php if ($this->_tpl_vars['profile_menu'] == 'blocks'): ?> class="active"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/blocks"><?php echo smarty_function_t(array('c' => 'user.block_list'), $this);?>
</a></li>
		<li <?php if ($this->_tpl_vars['profile_menu'] == 'delete'): ?> class="active"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/delete"><?php echo smarty_function_t(array('c' => 'user.delete_profile'), $this);?>
</a></li>
		<li class="pull-right"> <a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/<?php echo $this->_tpl_vars['username']; ?>
"><?php echo smarty_function_t(array('c' => 'global.back_to_profile'), $this);?>
</a></li>
	</ul>
	<div class="visible-xs">
		<div class="btn-group">
			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><?php if ($this->_tpl_vars['profile_menu'] == 'edit'): ?><?php echo smarty_function_t(array('c' => 'user.personal'), $this);?>
<?php elseif ($this->_tpl_vars['profile_menu'] == 'prefs'): ?><?php echo smarty_function_t(array('c' => 'user.prefs'), $this);?>
<?php elseif ($this->_tpl_vars['profile_menu'] == 'avatar'): ?><?php echo smarty_function_t(array('c' => 'user.avatar'), $this);?>
<?php elseif ($this->_tpl_vars['profile_menu'] == 'blocks'): ?><?php echo smarty_function_t(array('c' => 'user.block_list'), $this);?>
<?php else: ?><?php echo smarty_function_t(array('c' => 'user.delete_profile'), $this);?>
<?php endif; ?> <span class="caret"></span></button>
			<ul class="dropdown-menu">
				<li <?php if ($this->_tpl_vars['profile_menu'] == 'edit'): ?> class="active"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/edit"><?php echo smarty_function_t(array('c' => 'user.personal'), $this);?>
</a></li>
				<li <?php if ($this->_tpl_vars['profile_menu'] == 'prefs'): ?> class="active"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/prefs"><?php echo smarty_function_t(array('c' => 'user.prefs'), $this);?>
</a></li>
				<li <?php if ($this->_tpl_vars['profile_menu'] == 'avatar'): ?> class="active"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/avatar"><?php echo smarty_function_t(array('c' => 'user.avatar'), $this);?>
</a></li>
				<li <?php if ($this->_tpl_vars['profile_menu'] == 'blocks'): ?> class="active"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/blocks"><?php echo smarty_function_t(array('c' => 'user.block_list'), $this);?>
</a></li>
				<li <?php if ($this->_tpl_vars['profile_menu'] == 'delete'): ?> class="active"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/delete"><?php echo smarty_function_t(array('c' => 'user.delete_profile'), $this);?>
</a></li>
				<li class="divider"></li>
				<li> <a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/<?php echo $this->_tpl_vars['username']; ?>
"><?php echo smarty_function_t(array('c' => 'global.back_to_profile'), $this);?>
</a></li>
			</ul>
		</div>
	</div>

	<div class="clearfix"></div>

	<?php if ($this->_tpl_vars['profile_menu'] == 'delete'): ?>
		<div class="p-t-15 p-b-15">
			<?php echo smarty_function_t(array('c' => 'user.delete_sub'), $this);?>

		</div>
	<?php elseif ($this->_tpl_vars['profile_menu'] == 'blocks'): ?>
		<div class="p-t-15 p-b-15">
			<?php echo smarty_function_t(array('c' => 'user.block_sub'), $this);?>

		</div>
	<?php elseif ($this->_tpl_vars['profile_menu'] == 'avatar'): ?>
		<div class="p-t-15 p-b-15">
			<?php echo smarty_function_t(array('c' => 'user.avatar_sub'), $this);?>

		</div>
	<?php elseif ($this->_tpl_vars['profile_menu'] == 'prefs'): ?>
		<div class="p-t-15 p-b-15">
			<?php echo smarty_function_t(array('c' => 'user.prefs_sub'), $this);?>

		</div>
	<?php else: ?>
		<div class="p-t-15 p-b-15">
			<?php echo smarty_function_t(array('c' => 'user.profile_sub'), $this);?>

		</div>
	<?php endif; ?>

</div>