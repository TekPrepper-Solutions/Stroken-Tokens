<?php /* Smarty version 2.6.20, created on 2018-01-04 21:23:04
         compiled from blog_add.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 't', 'blog_add.tpl', 33, false),)), $this); ?>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/js/jquery.browser.min.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['relative']; ?>
/addons/markitup/jquery.markitup.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['relative']; ?>
/addons/markitup/sets/bbcode/set.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['relative']; ?>
/addons/markitup/skins/jtageditor/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['relative']; ?>
/addons/markitup/sets/bbcode/style.css" />

<script type="text/javascript">
    <?php echo '		
        $(document).ready(function() {
            $("#blog_content").markItUp(myBbcodeSettings);
			$(".markItUpSeparator").addClass(" hidden-xs");
			$(\'.markItUpDropMenu .markItUpButton\').on("click", function () {
				$(this).parent(\'ul\').hide();
			});
        });
	'; ?>

</script>

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
					<?php echo smarty_function_t(array('c' => 'blog.add_title'), $this);?>

				</div>
				<div class="panel-body">

					<form class="form-horizontal" name="addBlogForm" id="addBlogForm" method="post" action="<?php echo $this->_tpl_vars['relative']; ?>
/blog/add">
					
						<div class="form-group<?php if ($this->_tpl_vars['err']['title']): ?> has-error<?php endif; ?>">
							<label for="blog_title" class="col-lg-3 control-label"><?php echo smarty_function_t(array('c' => 'global.title'), $this);?>
</label>
							<div class="col-lg-9">
								<input name="blog_title" type="text" class="form-control" value="<?php echo $this->_tpl_vars['blog_title']; ?>
" maxlength="99" id="blog_title" placeholder="<?php echo smarty_function_t(array('c' => 'global.title'), $this);?>
" />
							</div>
						</div>

						<div id="media_message" style="display: none;"></div>

						<div class="row">
							<div id="media_content" class="col-md-12 m-b-15" style="display: none;"></div>
						</div>

						<div class="form-group">
							<div class="col-md-12">
								<textarea name="blog_content" id="blog_content"><?php echo $this->_tpl_vars['blog_content']; ?>
</textarea>
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-lg-9 col-lg-offset-3">
								<input name="blog_add_submit" type="submit" value=" <?php echo smarty_function_t(array('c' => 'global.save'), $this);?>
 " id="blog_submit" class="btn btn-primary" />
							</div>
						</div>

					</form>
 
				</div>				
			</div>	
		</div>
	</div>
</div>