<?php /* Smarty version 2.6.20, created on 2018-02-20 05:53:03
         compiled from user_prefs.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 't', 'user_prefs.tpl', 7, false),)), $this); ?>
<div class="container">

		<div class="well bs-component">
			<form class="form-horizontal" name="user_prefs_form" id="user_prefs_form" method="post" action="<?php echo $this->_tpl_vars['relative']; ?>
/user/prefs">
				<div class="col-md-6">
					<fieldset class="m-b-15">
						<legend><?php echo smarty_function_t(array('c' => 'user.PREFS_TITLE'), $this);?>
</legend>
						<div class="form-group">
							<div class="col-sm-9 col-sm-offset-3">
								<div class="col-xs-4">
									<center>
										<?php echo smarty_function_t(array('c' => 'global.public'), $this);?>

									</center>
								</div>
								<div class="col-xs-4">
									<center>
										<?php echo smarty_function_t(array('c' => 'user.only_friends'), $this);?>

									</center>
								</div>
								<div class="col-xs-4">
									<center>
										<?php echo smarty_function_t(array('c' => 'user.only_me'), $this);?>

									</center>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-3 control-label no-wrap"><?php echo smarty_function_t(array('c' => 'user.playlist'), $this);?>
</label>
							<div class="col-sm-9">
								<div class="col-xs-4">
									<center>
										<label class="control-label">
											<input name="show_playlist" type="radio" value="2" <?php if ($this->_tpl_vars['prefs']['show_playlist'] == '2'): ?> checked="checked"<?php endif; ?> />
										</label>
									</center>
								</div>
								<div class="col-xs-4">
									<center>
										<label class="control-label">
											<input name="show_playlist" type="radio" value="1" <?php if ($this->_tpl_vars['prefs']['show_playlist'] == '1'): ?> checked="checked"<?php endif; ?> />
										</label>
									</center>
								</div>
								<div class="col-xs-4">
									<center>
										<label class="control-label">
											<input name="show_playlist" type="radio" value="0" <?php if ($this->_tpl_vars['prefs']['show_playlist'] == '0'): ?> checked="checked"<?php endif; ?> />
										</label>
									</center>
								</div>								
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-3 control-label no-wrap"><?php echo smarty_function_t(array('c' => 'user.favorites'), $this);?>
</label>
							<div class="col-sm-9">
								<div class="col-xs-4">
									<center>
										<label class="control-label">
											<input name="show_favorites" type="radio" value="2" <?php if ($this->_tpl_vars['prefs']['show_favorites'] == '2'): ?> checked="checked"<?php endif; ?> />
										</label>
									</center>
								</div>
								<div class="col-xs-4">
									<center>
										<label class="control-label">
											<input name="show_favorites" type="radio" value="1" <?php if ($this->_tpl_vars['prefs']['show_favorites'] == '1'): ?> checked="checked"<?php endif; ?> />
										</label>
									</center>
								</div>
								<div class="col-xs-4">
									<center>
										<label class="control-label">
											<input name="show_favorites" type="radio" value="0" <?php if ($this->_tpl_vars['prefs']['show_favorites'] == '0'): ?> checked="checked"<?php endif; ?> />
										</label>
									</center>
								</div>								
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-3 control-label no-wrap"><?php echo smarty_function_t(array('c' => 'user.friend'), $this);?>
 <?php echo smarty_function_t(array('c' => 'global.list'), $this);?>
</label>
							<div class="col-sm-9">
								<div class="col-xs-4">
									<center>
										<label class="control-label">
											<input name="show_friends" type="radio" value="2" <?php if ($this->_tpl_vars['prefs']['show_friends'] == '2'): ?> checked="checked"<?php endif; ?> />
										</label>
									</center>
								</div>
								<div class="col-xs-4">
									<center>
										<label class="control-label">
											<input name="show_friends" type="radio" value="1" <?php if ($this->_tpl_vars['prefs']['show_friends'] == '1'): ?> checked="checked"<?php endif; ?> />
										</label>
									</center>
								</div>
								<div class="col-xs-4">
									<center>
										<label class="control-label">
											<input name="show_friends" type="radio" value="0" <?php if ($this->_tpl_vars['prefs']['show_friends'] == '0'): ?> checked="checked"<?php endif; ?> />
										</label>
									</center>
								</div>								
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-3 control-label no-wrap"><?php echo smarty_function_t(array('c' => 'user.subscriptions'), $this);?>
</label>
							<div class="col-sm-9">
								<div class="col-xs-4">
									<center>
										<label class="control-label">
											<input name="show_subscriptions" type="radio" value="2" <?php if ($this->_tpl_vars['prefs']['show_subscriptions'] == '2'): ?> checked="checked"<?php endif; ?> />
										</label>
									</center>
								</div>
								<div class="col-xs-4">
									<center>
										<label class="control-label">
											<input name="show_subscriptions" type="radio" value="1" <?php if ($this->_tpl_vars['prefs']['show_subscriptions'] == '1'): ?> checked="checked"<?php endif; ?> />
										</label>
									</center>
								</div>
								<div class="col-xs-4">
									<center>
										<label class="control-label">
											<input name="show_subscriptions" type="radio" value="0" <?php if ($this->_tpl_vars['prefs']['show_subscriptions'] == '0'): ?> checked="checked"<?php endif; ?> />
										</label>
									</center>
								</div>								
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-3 control-label no-wrap"><?php echo smarty_function_t(array('c' => 'user.subscribers'), $this);?>
</label>
							<div class="col-sm-9">
								<div class="col-xs-4">
									<center>
										<label class="control-label">
											<input name="show_subscribers" type="radio" value="2" <?php if ($this->_tpl_vars['prefs']['show_subscribers'] == '2'): ?> checked="checked"<?php endif; ?> />
										</label>
									</center>
								</div>
								<div class="col-xs-4">
									<center>
										<label class="control-label">
											<input name="show_subscribers" type="radio" value="1" <?php if ($this->_tpl_vars['prefs']['show_subscribers'] == '1'): ?> checked="checked"<?php endif; ?> />
										</label>
									</center>
								</div>
								<div class="col-xs-4">
									<center>
										<label class="control-label">
											<input name="show_subscribers" type="radio" value="0" <?php if ($this->_tpl_vars['prefs']['show_subscribers'] == '0'): ?> checked="checked"<?php endif; ?> />
										</label>
									</center>
								</div>								
							</div>
						</div>
						
					</fieldset>
					
					

					<fieldset class="m-b-15">
						<legend><?php echo smarty_function_t(array('c' => 'user.ACCOUNT_PREF'), $this);?>
</legend>
						
						<div class="form-group">
							<div class="col-xs-12">
								<div class="checkbox">
									<label>
										<input name="friends_requests" type="checkbox" id="profile_friend_requests" <?php if ($this->_tpl_vars['prefs']['friends_requests'] == '1'): ?> checked="checked"<?php endif; ?> /> <?php echo smarty_function_t(array('c' => 'user.friends_auto'), $this);?>

									</label>
								</div>								
							</div>
						</div>
						<div class="form-group">						
							<div class="col-xs-12">
								<div class="checkbox">
									<label>
										<input name="wall_public" type="checkbox" id="profile_wall_public" <?php if ($this->_tpl_vars['prefs']['wall_public'] == '1'): ?> checked="checked"<?php endif; ?> /> <?php echo smarty_function_t(array('c' => 'user.wall_public'), $this);?>

									</label>
								</div>								
							</div>						
						</div>				
						
					</fieldset>	
					
				</div>

				<div class="col-md-6">
				
					<fieldset>
						<legend><?php echo smarty_function_t(array('c' => 'user.EMAIL_NOTIF'), $this);?>
</legend>
						<div class="form-group">
							<div class="col-xs-12">
								<div class="checkbox">
									<label>
										<input name="video_approve" type="checkbox" id="profile_vapprove" <?php if ($this->_tpl_vars['prefs']['video_approve'] == '1'): ?> checked="checked"<?php endif; ?> /> <?php echo smarty_function_t(array('c' => 'user.notif_video_approve'), $this);?>

									</label>
								</div>								
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-12">
								<div class="checkbox">
									<label>
										<input name="album_approve" type="checkbox" id="profile_aapprove" <?php if ($this->_tpl_vars['prefs']['album_approve'] == '1'): ?> checked="checked"<?php endif; ?> /> <?php echo smarty_function_t(array('c' => 'user.notif_album_approve'), $this);?>

									</label>
								</div>								
							</div>
						</div>
						<div class="form-group">							
							<div class="col-xs-12">
								<div class="checkbox">
									<label>
										<input name="video_subscribe" type="checkbox" id="profile_vsubscribe" <?php if ($this->_tpl_vars['prefs']['video_subscribe'] == '1'): ?> checked="checked"<?php endif; ?> /> <?php echo smarty_function_t(array('c' => 'user.notif_subscribe'), $this);?>

									</label>
								</div>								
							</div>
						</div>
						<div class="form-group">							
							<div class="col-xs-12">
								<div class="checkbox">
									<label>
										<input name="friend_request" type="checkbox" id="profile_frequest" <?php if ($this->_tpl_vars['prefs']['friend_request'] == '1'): ?> checked="checked"<?php endif; ?> /> <?php echo smarty_function_t(array('c' => 'user.notif_friend'), $this);?>

									</label>
								</div>								
							</div>
						</div>
						<div class="form-group">							
							<div class="col-xs-12">
								<div class="checkbox">
									<label>
										<input name="wall_write" type="checkbox" id="profile_wwrite" <?php if ($this->_tpl_vars['prefs']['wall_write'] == '1'): ?> checked="checked"<?php endif; ?> /> <?php echo smarty_function_t(array('c' => 'user.notif_wall'), $this);?>

									</label>
								</div>								
							</div>
						</div>
						<div class="form-group">							
							<div class="col-xs-12">
								<div class="checkbox">
									<label>
										<input name="video_comment" type="checkbox" id="profile_vcomment" <?php if ($this->_tpl_vars['prefs']['video_comment'] == '1'): ?> checked="checked"<?php endif; ?> /> <?php echo smarty_function_t(array('c' => 'user.notif_video_comment'), $this);?>

									</label>
								</div>								
							</div>
						</div>
						<div class="form-group">							
							<div class="col-xs-12">
								<div class="checkbox">
									<label>
										<input name="photo_comment" type="checkbox" id="profile_pcomment" <?php if ($this->_tpl_vars['prefs']['photo_comment'] == '1'): ?> checked="checked"<?php endif; ?> /> <?php echo smarty_function_t(array('c' => 'user.notif_photo_comment'), $this);?>

									</label>
								</div>								
							</div>
						</div>
						<div class="form-group">							
							<div class="col-xs-12">
								<div class="checkbox">
									<label>
										<input name="blog_comment" type="checkbox" id="profile_bcomment" <?php if ($this->_tpl_vars['prefs']['blog_comment'] == '1'): ?> checked="checked"<?php endif; ?> /> <?php echo smarty_function_t(array('c' => 'user.notif_blog_comment'), $this);?>

									</label>
								</div>								
							</div>
						</div>
						<div class="form-group">							
							<div class="col-xs-12">
								<div class="checkbox">
									<label>
										<input name="game_comment" type="checkbox" id="profile_gcomment" <?php if ($this->_tpl_vars['prefs']['game_comment'] == '1'): ?> checked="checked"<?php endif; ?> /> <?php echo smarty_function_t(array('c' => 'user.notif_game_comment'), $this);?>

									</label>
								</div>								
							</div>
						</div>
						<div class="form-group">							
							<div class="col-xs-12">
								<div class="checkbox">
									<label>
										<input name="send_message" type="checkbox" id="profile_message" <?php if ($this->_tpl_vars['prefs']['send_message'] == '1'): ?> checked="checked"<?php endif; ?> /> <?php echo smarty_function_t(array('c' => 'user.notif_send_msg'), $this);?>

									</label>
								</div>								
							</div>						
						</div>
					
					</fieldset>
				</div>

				<div class="clearfix"></div>

				<div class="form-group m-t-15">
					<center>
						<input name="prefs_submit" type="submit" value=" <?php echo smarty_function_t(array('c' => 'user.save'), $this);?>
 " id="profile_submit" class="btn btn-primary">
					</center>
				</div>
				
			</form>
		
		</div>

</div>