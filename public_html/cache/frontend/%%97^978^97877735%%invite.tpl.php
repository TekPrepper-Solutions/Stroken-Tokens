<?php /* Smarty version 2.6.20, created on 2017-12-11 01:47:38
         compiled from invite.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 't', 'invite.tpl', 19, false),)), $this); ?>
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
				<form class="form-horizontal" name="inviteFriendsForm" id="inviteFriendsForm" method="post" action="<?php echo $this->_tpl_vars['relative']; ?>
/invite">
				  <fieldset>
					<legend><?php echo smarty_function_t(array('c' => 'invite.title'), $this);?>
</legend>
						<div class="m-b-20">
							<h4><?php echo smarty_function_t(array('c' => 'invite.expl'), $this);?>
</h4>
						</div>
						
						<div class="form-group <?php if ($this->_tpl_vars['err']['emails']): ?>has-error<?php endif; ?>">
							<label for="friend_1" class="col-lg-3 control-label"><?php echo smarty_function_t(array('c' => 'global.friend'), $this);?>
 <?php echo smarty_function_t(array('c' => 'global.one'), $this);?>
</label>
							<div class="col-lg-9">
								<input name="friend_1" type="text" class="form-control" value="<?php echo $this->_tpl_vars['emails'][0]; ?>
" id="friend_1" placeholder="<?php echo smarty_function_t(array('c' => 'global.email'), $this);?>
" />
							</div>
						</div>

						<div class="form-group">
							<label for="friend_2" class="col-lg-3 control-label"><?php echo smarty_function_t(array('c' => 'global.friend'), $this);?>
 <?php echo smarty_function_t(array('c' => 'global.two'), $this);?>
</label>
							<div class="col-lg-9">
								<input name="friend_2" type="text" class="form-control" value="<?php echo $this->_tpl_vars['emails'][1]; ?>
" id="friend_2" placeholder="<?php echo smarty_function_t(array('c' => 'global.email'), $this);?>
" />
							</div>
						</div>

						<div class="form-group">
							<label for="friend_3" class="col-lg-3 control-label"><?php echo smarty_function_t(array('c' => 'global.friend'), $this);?>
 <?php echo smarty_function_t(array('c' => 'global.three'), $this);?>
</label>
							<div class="col-lg-9">
								<input name="friend_3" type="text" class="form-control" value="<?php echo $this->_tpl_vars['emails'][2]; ?>
" id="friend_3" placeholder="<?php echo smarty_function_t(array('c' => 'global.email'), $this);?>
" />
							</div>
						</div>

						<div class="form-group">
							<label for="friend_4" class="col-lg-3 control-label"><?php echo smarty_function_t(array('c' => 'global.friend'), $this);?>
 <?php echo smarty_function_t(array('c' => 'global.four'), $this);?>
</label>
							<div class="col-lg-9">
								<input name="friend_4" type="text" class="form-control" value="<?php echo $this->_tpl_vars['emails'][3]; ?>
" id="friend_4" placeholder="<?php echo smarty_function_t(array('c' => 'global.email'), $this);?>
" />
							</div>
						</div>

						<div class="form-group">
							<label for="friend_5" class="col-lg-3 control-label"><?php echo smarty_function_t(array('c' => 'global.friend'), $this);?>
 <?php echo smarty_function_t(array('c' => 'global.five'), $this);?>
</label>
							<div class="col-lg-9">
								<input name="friend_5" type="text" class="form-control" value="<?php echo $this->_tpl_vars['emails'][4]; ?>
" id="friend_5" placeholder="<?php echo smarty_function_t(array('c' => 'global.email'), $this);?>
" />
							</div>
						</div>						

						<div class="form-group <?php if ($this->_tpl_vars['err']['name']): ?>has-error<?php endif; ?>">
							<label for="invite_name" class="col-lg-3 control-label"><?php echo smarty_function_t(array('c' => 'global.name'), $this);?>
</label>
							<div class="col-lg-9">
								<input name="name" type="text" class="form-control" value="<?php echo $this->_tpl_vars['invite']['name']; ?>
" id="invite_name" placeholder="<?php echo smarty_function_t(array('c' => 'global.name'), $this);?>
" />
							</div>
						</div>	

						<div class="form-group <?php if ($this->_tpl_vars['err']['message']): ?>has-error<?php endif; ?>">
							<label for="invite_friends_message" class="col-lg-3 control-label"><?php echo smarty_function_t(array('c' => 'global.message'), $this);?>
</label>
							<div class="col-lg-9">
								<textarea name="message" class="form-control" id="invite_friends_message" rows="4" placeholder="<?php echo smarty_function_t(array('c' => 'global.message'), $this);?>
" ><?php echo $this->_tpl_vars['invite']['message']; ?>
</textarea>
							</div>
						</div>						

						<div class="form-group <?php if ($this->_tpl_vars['err']['captcha']): ?>has-error<?php endif; ?>">
							<label for="invite_verification" class="col-lg-3 control-label"><?php echo smarty_function_t(array('c' => 'global.verification'), $this);?>
</label>
							<div class="col-lg-9">
								<input name="verification" type="text" class="form-control" value="" id="invite_verification" placeholder="<?php echo smarty_function_t(array('c' => 'global.verif_expl'), $this);?>
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
							<div class="col-lg-9 col-lg-offset-3">
								<button name="submit_invite" type="submit" class="btn btn-primary"><?php echo smarty_function_t(array('c' => 'invite.send'), $this);?>
</button>
							</div>
						</div>
						
				  </fieldset>
				</form>		
			</div>
		</div>
		<div class="col-md-6">
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