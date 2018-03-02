<?php /* Smarty version 2.6.20, created on 2017-12-11 01:47:47
         compiled from feedback.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 't', 'feedback.tpl', 19, false),)), $this); ?>
<script type="text/javascript">
    <?php echo '
        $(document).ready(function(){
            $("#captcha_reload").click(function(event){
                event.preventDefault();
                $("#captcha_image").attr(\'src\', "'; ?>
<?php echo $this->_tpl_vars['relative']; ?>
<?php echo '/captcha" + \'/\' + Math.random());
            });
        });
    '; ?>
  
</script>

<div class="container">
	
	<div class="row">
		<div class="col-md-6">
		<div class="well bs-component">
			<form class="form-horizontal" name="contactUsForm" id="contactUsForm" method="post" action="<?php echo $this->_tpl_vars['relative']; ?>
/feedback">
			  <fieldset>
				<legend><?php echo smarty_function_t(array('c' => 'feedback.title'), $this);?>
</legend>
				
					<div class="form-group <?php if ($this->_tpl_vars['err']['department']): ?>has-error<?php endif; ?>">
						<label for="contact_option" class="col-lg-4 control-label"><?php echo smarty_function_t(array('c' => 'feedback.department'), $this);?>
</label>
						<div class="col-lg-8">
							<select name="department" id="contact_option" class="form-control">
								<option value="General"<?php if ($this->_tpl_vars['feedback']['department'] == 'General'): ?> selected="selected"<?php endif; ?>><?php echo smarty_function_t(array('c' => 'feedback.general'), $this);?>
</option>
								<option value="Violations"<?php if ($this->_tpl_vars['feedback']['department'] == 'Violations'): ?> selected="selected"<?php endif; ?>><?php echo smarty_function_t(array('c' => 'feedback.violations'), $this);?>
</option>
								<option value="Advertising"<?php if ($this->_tpl_vars['feedback']['department'] == 'Advertising'): ?> selected="selected"<?php endif; ?>><?php echo smarty_function_t(array('c' => 'feedback.advertising'), $this);?>
</option>
							</select>
						</div>
					</div>

					<div class="form-group <?php if ($this->_tpl_vars['err']['email']): ?>has-error<?php endif; ?>">
						<label for="contact_email" class="col-lg-4 control-label"><?php echo smarty_function_t(array('c' => 'global.email'), $this);?>
</label>
						<div class="col-lg-8">
							<input name="email" type="text" class="form-control" value="<?php echo $this->_tpl_vars['feedback']['email']; ?>
" maxlength="100" id="contact_email" placeholder="<?php echo smarty_function_t(array('c' => 'global.email'), $this);?>
" />
						</div>
					</div>

					<div class="form-group <?php if ($this->_tpl_vars['err']['name']): ?>has-error<?php endif; ?>">
						<label for="contact_name" class="col-lg-4 control-label"><?php echo smarty_function_t(array('c' => 'global.name'), $this);?>
</label>
						<div class="col-lg-8">
							<input name="name" type="text" class="form-control" value="<?php echo $this->_tpl_vars['feedback']['name']; ?>
" maxlength="100" id="contact_name" placeholder="<?php echo smarty_function_t(array('c' => 'global.name'), $this);?>
" />
						</div>
					</div>

					<div class="form-group <?php if ($this->_tpl_vars['err']['message']): ?>has-error<?php endif; ?>">
						<label for="contact_message" class="col-lg-4 control-label"><?php echo smarty_function_t(array('c' => 'global.message'), $this);?>
</label>
						<div class="col-lg-8">
							<textarea class="form-control" name="message" id="contact_message" rows="5" placeholder="<?php echo smarty_function_t(array('c' => 'global.message'), $this);?>
" ><?php echo $this->_tpl_vars['feedback']['message']; ?>
</textarea>
						</div>
					</div>			

					<div class="form-group <?php if ($this->_tpl_vars['err']['captcha']): ?>has-error<?php endif; ?>">
						<label for="feedback_verification" class="col-lg-4 control-label"><?php echo smarty_function_t(array('c' => 'global.verification'), $this);?>
</label>
						<div class="col-lg-8">
							<input name="verification" type="text" class="form-control" value="" id="feedback_verification" placeholder="<?php echo smarty_function_t(array('c' => 'global.verif_expl'), $this);?>
" />
							<div class="m-t-10">
								<img src="<?php echo $this->_tpl_vars['relative']; ?>
/captcha" id="captcha_image" alt="Are you human?" />
							</div>
							<div class="m-t-5">
								<a href="#reload_captcha" id="captcha_reload"><?php echo smarty_function_t(array('c' => 'global.verif_reload'), $this);?>
</a>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="col-lg-8 col-lg-offset-4">
							<button name="submit_feedback" type="submit" class="btn btn-primary"><?php echo smarty_function_t(array('c' => 'global.send'), $this);?>
</button>
						</div>
					</div>					
					
			  </fieldset>
			</form>		
		</div>
		</div>
		<div class="col-md-6">
			<div class="well bs-component">
				<legend><?php echo smarty_function_t(array('c' => 'faq.check'), $this);?>
</legend>
				<?php echo smarty_function_t(array('c' => 'faq.expl','s' => $this->_tpl_vars['relative']), $this);?>

			</div>
			<div class="well bs-component">
				<legend><?php echo smarty_function_t(array('c' => 'global.what_is','s' => $this->_tpl_vars['site_name']), $this);?>
</legend>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'static/whatis.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			</div>
		</div>
	</div>
</div>