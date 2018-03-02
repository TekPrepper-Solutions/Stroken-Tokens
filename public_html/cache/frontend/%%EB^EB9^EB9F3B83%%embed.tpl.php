<?php /* Smarty version 2.6.20, created on 2018-02-10 07:36:20
         compiled from embed.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'thumb_path', 'embed.tpl', 65, false),)), $this); ?>
<!DOCTYPE html>
<html>
<head>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'player_settings.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	
	<link href="<?php echo $this->_tpl_vars['base_url']; ?>
/media/player/videojs/video-js.css" rel="stylesheet">	
	<link href="<?php echo $this->_tpl_vars['base_url']; ?>
/media/player/videojs/plugins/videojs-resolution-switcher-master/lib/videojs-resolution-switcher.css" rel="stylesheet">		
	<link href="<?php echo $this->_tpl_vars['base_url']; ?>
/media/player/videojs/plugins/videojs-logobrand-master/src/videojs.logobrand.css" rel="stylesheet">
	<link href="<?php echo $this->_tpl_vars['base_url']; ?>
/media/player/videojs/plugins/videojs-thumbnails-master/videojs.thumbnails.css" rel="stylesheet">
	<link href="<?php echo $this->_tpl_vars['base_url']; ?>
/media/player/videojs/video-js-custom.css" rel="stylesheet">					

	<script src="<?php echo $this->_tpl_vars['base_url']; ?>
/media/player/videojs/ie8/videojs-ie8.min.js"></script>
	<script src="<?php echo $this->_tpl_vars['base_url']; ?>
/media/player/videojs/video.js"></script>
	<script src="<?php echo $this->_tpl_vars['base_url']; ?>
/media/player/videojs/plugins/videojs-resolution-switcher-master/lib/videojs-resolution-switcher.js"></script>
	<script src="<?php echo $this->_tpl_vars['base_url']; ?>
/media/player/videojs/plugins/videojs-logobrand-master/src/videojs.logobrand.js"></script>
	<script src="<?php echo $this->_tpl_vars['base_url']; ?>
/media/player/videojs/plugins/videojs-thumbnails-master/videojs.thumbnails.js"></script>
	<style>
	<?php echo '
	body {
		margin:0!important;
		padding:0!important;
		overflow:hidden;
		background-color: #000;
	}
	.text-error {  
		font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
		font-size: 14px;
		line-height: 1.42857143;
		color: red;
		padding: 10px;	
	}
	.text-message {  
		font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
		font-size: 16px;
		line-height: 1.42857143;
		color: #fff;
		padding: 10px;
	}
	.text-message a {
		color: #ccc;
	}
	.text-message a:visited {  
		color: #ccc;
	}
	.video-embedded {
		width: 100%;
		overflow: hidden;
	}
	.video-embedded iframe {
		width: 100%!important;
		height: 100%!important;
	}
	'; ?>

	</style>
</head>
<body>
<?php if ($this->_tpl_vars['video']['VID']): ?>
	<?php if ($this->_tpl_vars['video']['embed_code'] != ''): ?>
		<div class="video-embedded">
			<?php echo $this->_tpl_vars['video']['embed_code']; ?>

		</div>
	<?php else: ?>
	<div class="video-container">
			<video id="video" class="video-js vjs-16-9 vjs-big-play-centered vjs-sublime-skin" preload="auto" controls poster="<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'thumb_path', 'vid' => $this->_tpl_vars['video']['VID'])), $this); ?>
/default.jpg" <?php if ($this->_tpl_vars['player']['autoplay']): ?><?php echo 'data-setup=\'{"autoplay": true}\''; ?>
<?php else: ?><?php echo 'data-setup=\'{}\''; ?>
<?php endif; ?>>
			<?php if ($this->_tpl_vars['video']['iphone'] == 1): ?>
				<source src="<?php echo $this->_tpl_vars['video_root']; ?>
/iphone/<?php echo $this->_tpl_vars['video']['VID']; ?>
.mp4" type='video/mp4' label='SD' res='720'/>
				<?php if ($this->_tpl_vars['video']['hd'] == 1): ?>
					<source src="<?php echo $this->_tpl_vars['video_root']; ?>
/hd/<?php echo $this->_tpl_vars['video']['VID']; ?>
.mp4" type='video/mp4' label='HD' res ='1080'/>
				<?php endif; ?>
			<?php else: ?>
				<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['video']['files']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
					<source src="<?php echo $this->_tpl_vars['video_root']; ?>
/h264/<?php echo $this->_tpl_vars['video']['files'][$this->_sections['i']['index']]['file']; ?>
" type='video/<?php echo $this->_tpl_vars['video']['files'][$this->_sections['i']['index']]['format']; ?>
' label='<?php echo $this->_tpl_vars['video']['files'][$this->_sections['i']['index']]['label']; ?>
' res='<?php echo $this->_tpl_vars['video']['files'][$this->_sections['i']['index']]['height']; ?>
'/>
				<?php endfor; endif; ?>
			<?php endif; ?>
			<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
		</video>		
	</div>
	<?php endif; ?>
<?php endif; ?>
<script src="<?php echo $this->_tpl_vars['base_url']; ?>
/media/player/videojs/video-js-events.js"></script>
</body>
</html>