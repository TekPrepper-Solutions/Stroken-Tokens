<?php /* Smarty version 2.6.20, created on 2018-01-04 21:23:03
         compiled from user_edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 't', 'user_edit.tpl', 7, false),)), $this); ?>
<div class="container">

		<div class="well bs-component">
			<form class="form-horizontal" name="user_profile_form" id="user_profile_form" method="post" action="<?php echo $this->_tpl_vars['relative']; ?>
/user/edit">
				<div class="col-md-6">
					<fieldset class="m-b-15">
						<legend><?php echo smarty_function_t(array('c' => 'user.ACCOUNT_INF'), $this);?>
</legend>
						
						<div class="form-group">
							<label for="profile_username" class="col-lg-4 control-label"><?php echo smarty_function_t(array('c' => 'global.username'), $this);?>
</label>
							<div class="col-lg-8">
								<input name="username" type="text" class="form-control" value="<?php echo $this->_tpl_vars['username']; ?>
" id="profile_username" readonly />
							</div>
						</div>

						<div class="form-group">
							<label for="profile_email" class="col-lg-4 control-label"><?php echo smarty_function_t(array('c' => 'global.email'), $this);?>
</label>
							<div class="col-lg-8">
								<input name="email" type="text" class="form-control" value="<?php echo $this->_tpl_vars['user']['email']; ?>
" readonly />
							</div>
						</div>
						
						<div class="form-group <?php if ($this->_tpl_vars['err']['password']): ?>has-error<?php endif; ?>">
							<label for="profile_password" class="col-lg-4 control-label"><?php echo smarty_function_t(array('c' => 'global.password'), $this);?>
</label>
							<div class="col-lg-8">
								<input name="password" type="password" class="form-control" value="" id="profile_password" />
							</div>
						</div>
						
						<div class="form-group <?php if ($this->_tpl_vars['err']['password']): ?>has-error<?php endif; ?>">
							<label for="profile_password_confirm" class="col-lg-4 control-label"><?php echo smarty_function_t(array('c' => 'global.password_confirm'), $this);?>
</label>
							<div class="col-lg-8">
								<input name="password_confirm" type="password" class="form-control" value="" id="profile_password_confirm"/>
							</div>
						</div>
						
					</fieldset>
					
					<fieldset class="m-b-15">
						<legend><?php echo smarty_function_t(array('c' => 'user.PERSONAL_INF'), $this);?>
</legend>
						
						<div class="form-group">
							<label for="profile_fname" class="col-lg-4 control-label"><?php echo smarty_function_t(array('c' => 'user.first_name'), $this);?>
</label>
							<div class="col-lg-8">
								<input name="fname" type="text" class="form-control" value="<?php echo $this->_tpl_vars['user']['fname']; ?>
" id="profile_fname" />
							</div>
						</div>
						
						<div class="form-group">
							<label for="profile_lname" class="col-lg-4 control-label"><?php echo smarty_function_t(array('c' => 'user.last_name'), $this);?>
</label>
							<div class="col-lg-8">
								<input name="lname" type="text" class="form-control" value="<?php echo $this->_tpl_vars['user']['lname']; ?>
" id="profile_lname" />
							</div>
						</div>
						
						<div class="form-group">
							<label for="profile_gender" class="col-lg-4 control-label"><?php echo smarty_function_t(array('c' => 'global.gender'), $this);?>
</label>
							<div class="col-lg-8">
								<select name="gender" id="profile_gender" class="form-control">
									<option value="Male"<?php if ($this->_tpl_vars['user']['gender'] == 'Male'): ?> selected="selected"<?php endif; ?>><?php echo smarty_function_t(array('c' => 'global.male'), $this);?>
</option>
									<option value="Female"<?php if ($this->_tpl_vars['user']['gender'] == 'Female'): ?> selected="selected"<?php endif; ?>><?php echo smarty_function_t(array('c' => 'global.female'), $this);?>
</option>
								</select>
							</div>
						</div>

						<div class="form-group <?php if ($this->_tpl_vars['err']['bday']): ?>has-error<?php endif; ?>">
							<label for="profile_bdate" class="col-lg-4 control-label"><?php echo smarty_function_t(array('c' => 'user.birthday'), $this);?>
</label>
							<div class="col-lg-8">
								<input name="bday" id="profile_bdate" type="date" value="<?php echo $this->_tpl_vars['user']['bdate']; ?>
" class="form-control">
							</div>
						</div>

						<div class="form-group">
							<label for="profile_relation" class="col-lg-4 control-label"><?php echo smarty_function_t(array('c' => 'user.relationship'), $this);?>
</label>
							<div class="col-lg-8">
								<select name="relation" id="profile_relation" class="form-control">
									<option value="">---</option>
									<option value="Single"<?php if ($this->_tpl_vars['user']['relation'] == 'Single'): ?> selected="selected"<?php endif; ?>><?php echo smarty_function_t(array('c' => 'user.single'), $this);?>
</option>
									<option value="Taken"<?php if ($this->_tpl_vars['user']['relation'] == 'Taken'): ?> selected="selected"<?php endif; ?>><?php echo smarty_function_t(array('c' => 'user.take'), $this);?>
</option>
									<option value="Open"<?php if ($this->_tpl_vars['user']['relation'] == 'Open'): ?> selected="selected"<?php endif; ?>><?php echo smarty_function_t(array('c' => 'user.open'), $this);?>
</option>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label for="profile_interested" class="col-lg-4 control-label"><?php echo smarty_function_t(array('c' => 'global.interested'), $this);?>
</label>
							<div class="col-lg-8">
								<select name="interested" id="profile_interested" class="form-control">
									<option value="">---</option>
									<option value="Guys"<?php if ($this->_tpl_vars['user']['interested'] == 'Guys'): ?> selected="selected"<?php endif; ?>><?php echo smarty_function_t(array('c' => 'global.guys'), $this);?>
</option>
									<option value="Girls"<?php if ($this->_tpl_vars['user']['interested'] == 'Girls'): ?> selected="selected"<?php endif; ?>><?php echo smarty_function_t(array('c' => 'global.girls'), $this);?>
</option>
									<option value="Guys + Girls"<?php if ($this->_tpl_vars['user']['interested'] == 'Guys + Girls'): ?> selected="selected"<?php endif; ?>><?php echo smarty_function_t(array('c' => 'global.guys_girls'), $this);?>
</option>
								</select>
							</div>
						</div>						

						<div class="form-group">
							<label for="profile_website" class="col-lg-4 control-label"><?php echo smarty_function_t(array('c' => 'global.website'), $this);?>
</label>
							<div class="col-lg-8">
								<input name="website" type="text" class="form-control" value="<?php echo $this->_tpl_vars['user']['website']; ?>
" id="profile_website" />
							</div>
						</div>
						
					</fieldset>					

					<fieldset class="m-b-15">
						<legend><?php echo smarty_function_t(array('c' => 'user.LOCATION_INF'), $this);?>
</legend>
						
						<div class="form-group">
							<label for="profile_hometown" class="col-lg-4 control-label"><?php echo smarty_function_t(array('c' => 'global.hometown'), $this);?>
</label>
							<div class="col-lg-8">
								<input name="town" type="text" class="form-control" value="<?php echo $this->_tpl_vars['user']['town']; ?>
" id="profile_town" />
							</div>
						</div>
						
						<div class="form-group">
							<label for="profile_city" class="col-lg-4 control-label"><?php echo smarty_function_t(array('c' => 'global.city'), $this);?>
</label>
							<div class="col-lg-8">							
								<input name="city" type="text" class="form-control" value="<?php echo $this->_tpl_vars['user']['city']; ?>
" id="profile_city" />
							</div>
						</div>
						
						<div class="form-group">
							<label for="profile_country" class="col-lg-4 control-label"><?php echo smarty_function_t(array('c' => 'global.country'), $this);?>
</label>
							<div class="col-lg-8">
									
								<select name="country" id="profile_country" class="form-control">
									<option value="">Select Country</option>
									<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['countries']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
									<option value="<?php echo $this->_tpl_vars['countries'][$this->_sections['i']['index']]; ?>
"<?php if ($this->_tpl_vars['user']['country'] == $this->_tpl_vars['countries'][$this->_sections['i']['index']]): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['countries'][$this->_sections['i']['index']]; ?>
</option>
									<?php endfor; endif; ?>
								</select>								
							</div>
						</div>
						
						<div class="form-group">
							<label for="profile_occupation" class="col-lg-4 control-label"><?php echo smarty_function_t(array('c' => 'global.occupation'), $this);?>
</label>
							<div class="col-lg-8">
								<input name="occupation" type="text" class="form-control" value="<?php echo $this->_tpl_vars['user']['occupation']; ?>
" id="profile_occupation" />
							</div>
						</div>
						
						<div class="form-group">
							<label for="profile_company" class="col-lg-4 control-label"><?php echo smarty_function_t(array('c' => 'global.company'), $this);?>
</label>
							<div class="col-lg-8">
								<input name="company" type="text" class="form-control" value="<?php echo $this->_tpl_vars['user']['company']; ?>
" id="profile_company" />
							</div>
						</div>
						
						<div class="form-group">
							<label for="profile_school" class="col-lg-4 control-label"><?php echo smarty_function_t(array('c' => 'global.school'), $this);?>
</label>
							<div class="col-lg-8">
								<input name="school" type="text" class="form-control" value="<?php echo $this->_tpl_vars['user']['school']; ?>
" id="profile_school" />
							</div>
						</div>						
						
					</fieldset>	
					
				</div>

				<div class="col-md-6">
				
					<fieldset>
						<legend><?php echo smarty_function_t(array('c' => 'user.RANDOM_INF'), $this);?>
</legend>

						<div class="form-group">
							<label for="profile_about" class="col-lg-4 control-label"><?php echo smarty_function_t(array('c' => 'global.about_me'), $this);?>
</label>
							<div class="col-lg-8">
								<textarea name="aboutme" id="profile_about" class="form-control" rows="5"><?php echo $this->_tpl_vars['user']['aboutme']; ?>
</textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="profile_interests" class="col-lg-4 control-label"><?php echo smarty_function_t(array('c' => 'global.here_for'), $this);?>
</label>
							<div class="col-lg-8">
								<textarea name="interest_hobby" id="profile_interests" class="form-control" rows="5"><?php echo $this->_tpl_vars['user']['interest_hobby']; ?>
</textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="profile_movie" class="col-lg-4 control-label"><?php echo smarty_function_t(array('c' => 'user.favorite_sex'), $this);?>
</label>
							<div class="col-lg-8">
								<textarea name="fav_movie_show" id="profile_movie" class="form-control" rows="5"><?php echo $this->_tpl_vars['user']['fav_movie_show']; ?>
</textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="profile_music" class="col-lg-4 control-label"><?php echo smarty_function_t(array('c' => 'user.favorite_sex_partner'), $this);?>
</label>
							<div class="col-lg-8">
								<textarea name="fav_music" id="profile_music" class="form-control" rows="5"><?php echo $this->_tpl_vars['user']['fav_music']; ?>
</textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="profile_book" class="col-lg-4 control-label"><?php echo smarty_function_t(array('c' => 'user.my_erogenic_zones'), $this);?>
</label>
							<div class="col-lg-8">
								<textarea name="fav_book" id="profile_book" class="form-control" rows="5"><?php echo $this->_tpl_vars['user']['fav_book']; ?>
</textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="profile_turnon" class="col-lg-4 control-label"><?php echo smarty_function_t(array('c' => 'user.turn_on'), $this);?>
</label>
							<div class="col-lg-8">
								<textarea name="turnon" id="profile_turnon" class="form-control" rows="5"><?php echo $this->_tpl_vars['user']['turnon']; ?>
</textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="profile_turnoff" class="col-lg-4 control-label" rows="5"><?php echo smarty_function_t(array('c' => 'user.turn_off'), $this);?>
</label>
							<div class="col-lg-8">
								<textarea name="turnoff" id="profile_turnoff}" class="form-control" rows="5"><?php echo $this->_tpl_vars['user']['turnoff']; ?>
</textarea>
							</div>
						</div>
					</fieldset>
				</div>
				
				<div class="clearfix"></div>
				
				<div class="form-group m-t-15">
					<center>
						<input name="profile_submit" type="submit" value=" <?php echo smarty_function_t(array('c' => 'user.save'), $this);?>
 " id="profile_submit" class="btn btn-primary">
					</center>
				</div>
				
			</form>
		
		</div>

</div>