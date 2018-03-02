<?php /* Smarty version 2.6.20, created on 2017-12-11 09:54:06
         compiled from user_games.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 't', 'user_games.tpl', 15, false),array('modifier', 'clean', 'user_games.tpl', 33, false),array('modifier', 'escape', 'user_games.tpl', 35, false),array('insert', 'time_range', 'user_games.tpl', 51, false),)), $this); ?>
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
					<div class="pull-left">
						<?php echo $this->_tpl_vars['user']['username']; ?>
<?php if ($_SESSION['language'] == 'en_US'): ?>&#39;s<?php endif; ?> <?php echo smarty_function_t(array('c' => 'global.games'), $this);?>

					</div>
					<?php if (isset ( $_SESSION['uid'] ) && $_SESSION['uid'] == $this->_tpl_vars['user']['UID']): ?>
						<div class="pull-right">
							<a href="<?php echo $this->_tpl_vars['relative']; ?>
/upload/game"><?php echo smarty_function_t(array('c' => 'game.upload_game'), $this);?>
</a>
						</div>
					<?php endif; ?>					
					<div class="clearfix"></div>
				</div>
			
            <?php if ($this->_tpl_vars['games']): ?>
				<div class="panel-body">
					<div id="delete_game_message" style="display:none"></div>
					<?php echo smarty_function_t(array('c' => 'global.showing'), $this);?>
 <span class="text-white"><?php echo $this->_tpl_vars['start_num']; ?>
</span> <?php echo smarty_function_t(array('c' => 'global.to'), $this);?>
 <span class="text-white"><?php echo $this->_tpl_vars['end_num']; ?>
</span> <?php echo smarty_function_t(array('c' => 'global.of'), $this);?>
 <span class="text-white"><?php echo $this->_tpl_vars['games_total']; ?>
</span> <?php echo smarty_function_t(array('c' => 'game.games'), $this);?>
.
					<div class="row">
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
							<div id="game_<?php echo $this->_tpl_vars['games'][$this->_sections['i']['index']]['GID']; ?>
" class="col-sm-4 m-t-15">
								<div class="thumb-overlay">
									<a href="<?php echo $this->_tpl_vars['relative']; ?>
/game/<?php echo $this->_tpl_vars['games'][$this->_sections['i']['index']]['GID']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['games'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('clean', true, $_tmp) : smarty_modifier_clean($_tmp)); ?>
">
										<div class="thumb-overlay">
											<img src="<?php echo $this->_tpl_vars['relative']; ?>
/media/games/tmb/<?php echo $this->_tpl_vars['games'][$this->_sections['i']['index']]['GID']; ?>
.jpg" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['games'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" class="img-responsive <?php if ($this->_tpl_vars['games'][$this->_sections['i']['index']]['type'] == 'private'): ?>img-private<?php endif; ?>" />
											<?php if ($this->_tpl_vars['games'][$this->_sections['i']['index']]['type'] == 'private'): ?><div class="label-private"><?php echo smarty_function_t(array('c' => 'global.PRIVATE'), $this);?>
</div><?php endif; ?>
										</div>
										<div class="video-title title-truncate"><?php echo ((is_array($_tmp=$this->_tpl_vars['games'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</div>
									</a>
									<?php if (isset ( $_SESSION['uid'] ) && $_SESSION['uid'] == $this->_tpl_vars['user']['UID']): ?>
										<div class="actions">
											<a href="<?php echo $this->_tpl_vars['relative']; ?>
/game/edit/<?php echo $this->_tpl_vars['games'][$this->_sections['i']['index']]['GID']; ?>
" class="btn btn-primary btn-xs edit-btn hidden-xs"><?php echo smarty_function_t(array('c' => 'global.edit'), $this);?>
</a>
											<a href="<?php echo $this->_tpl_vars['relative']; ?>
/game/edit/<?php echo $this->_tpl_vars['games'][$this->_sections['i']['index']]['GID']; ?>
" class="btn btn-primary edit-btn visible-xs"><i class="glyphicon glyphicon-edit"></i> <?php echo smarty_function_t(array('c' => 'global.edit'), $this);?>
</a>
											
											<a href="#delete_game" id="delete_game_<?php echo $this->_tpl_vars['games'][$this->_sections['i']['index']]['GID']; ?>
" class="btn btn-danger btn-xs delete-btn hidden-xs"><?php echo smarty_function_t(array('c' => 'global.delete'), $this);?>
</a>
											<a href="#delete_game" id="delete_game_<?php echo $this->_tpl_vars['games'][$this->_sections['i']['index']]['GID']; ?>
" class="btn btn-danger delete-btn visible-xs"><i class="glyphicon glyphicon-remove"></i> <?php echo smarty_function_t(array('c' => 'global.delete'), $this);?>
</a>
										</div>
									<?php endif; ?>
								</div>
								<div class="video-added">
									<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'time_range', 'assign' => 'addtime', 'time' => $this->_tpl_vars['games'][$this->_sections['i']['index']]['addtime'])), $this); ?>

									<?php echo $this->_tpl_vars['addtime']; ?>
								
								</div>
								<div class="video-views pull-left">
									<?php echo $this->_tpl_vars['games'][$this->_sections['i']['index']]['total_plays']; ?>
 <?php if ($this->_tpl_vars['games'][$this->_sections['i']['index']]['total_plays'] == '1'): ?><?php echo smarty_function_t(array('c' => 'global.play'), $this);?>
<?php else: ?><?php echo smarty_function_t(array('c' => 'global.plays'), $this);?>
<?php endif; ?>
								</div>
								<div class="video-rating pull-right <?php if ($this->_tpl_vars['games'][$this->_sections['i']['index']]['rate'] == 0 && $this->_tpl_vars['games'][$this->_sections['i']['index']]['dislikes'] == 0): ?>no-rating<?php endif; ?>">
									<i class="fa fa-heart video-rating-heart <?php if ($this->_tpl_vars['games'][$this->_sections['i']['index']]['rate'] == 0 && $this->_tpl_vars['games'][$this->_sections['i']['index']]['dislikes'] == 0): ?>no-rating<?php endif; ?>"></i> <b><?php if ($this->_tpl_vars['games'][$this->_sections['i']['index']]['rate'] == 0 && $this->_tpl_vars['games'][$this->_sections['i']['index']]['dislikes'] == 0): ?>-<?php else: ?><?php echo $this->_tpl_vars['games'][$this->_sections['i']['index']]['rate']; ?>
%<?php endif; ?></b>
								</div>
								<div class="clearfix"></div>										
							</div>                                                    
						<?php endfor; endif; ?>
					</div>
					<?php if ($this->_tpl_vars['page_link']): ?>
						<div style="text-align: center;" class="visible-xs">
							<ul class="pagination pagination-lg"><?php echo $this->_tpl_vars['page_link']; ?>
</ul>
						</div>
						<div style="text-align: center;" class="hidden-xs">
							<ul class="pagination"><?php echo $this->_tpl_vars['page_link']; ?>
</ul>
						</div>
					<?php endif; ?>
				</div>
			<?php else: ?>
				<div class="panel-body">
					<span class="text-danger"><?php echo smarty_function_t(array('c' => 'games.none'), $this);?>
.</span>
				</div>
			<?php endif; ?>	
			</div>	
		</div>
	</div>
</div>