<?php /* Smarty version 2.6.20, created on 2018-02-20 05:49:11
         compiled from user_avatar.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 't', 'user_avatar.tpl', 88, false),array('modifier', 'rand', 'user_avatar.tpl', 94, false),)), $this); ?>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/js/jquery.browser.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/css/imgareaselect/imgareaselect-default.css" />
<script type="text/javascript" src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/js/jquery.imgareaselect.js"></script>
<script type="text/javascript">
    var uploaded = "<?php echo $this->_tpl_vars['uploaded']; ?>
";
    <?php echo '
	function getFile(d){
	   document.getElementById(d).click();
	}
	 
	function sub(obj,dn,dn_none){
		var file = obj.value;
		var fileName = file.split("\\\\");
		var fileTr = fileName[fileName.length-1];
		if (fileTr != \'\')
			{document.getElementById(dn).innerHTML = fileTr;}
		else
			{document.getElementById(dn).innerHTML = document.getElementById(dn_none).value;}
	}	
	
    function selectChange(img, selection)
    {
        document.getElementById("x1").value = selection.x1;
        document.getElementById("y1").value = selection.y1;
        document.getElementById("x2").value = selection.x2;
        document.getElementById("y2").value = selection.y2;
        document.getElementById("width").value = selection.width;
        document.getElementById("height").value = selection.height;
    }

    
	
    $(window).load(function(){
		if ( uploaded != \'\' ) {
			var newImg = new Image();
			newImg.src = document.getElementById("user_avatar").src;
			var iw = newImg.width;
			var ih = newImg.height;
			var s_max = iw;
			var s_x = 0;
			var s_y = 0;
			
			
			if ( ih < iw ) {
				s_max = ih;
				
				s_x = Math.floor((iw - s_max)/2);
			}
			else {
			
			s_y = Math.floor((ih - s_max)/2);
				
			}
			
			var s_margin =  Math.floor(( 5 * s_max ) / 100);

			$(\'img#user_avatar\').imgAreaSelect({ selectionOpacity: 0.2, x1: s_x + s_margin, y1: s_y + s_margin, x2: s_x + s_max - s_margin, y2: s_y + s_max - s_margin, resizable: true, aspectRatio: \'1:1\', handles: true, persistent:true, minHeight: \'50\', minWidth: \'50\', maxHeight: \'500\', maxWidth: \'500\', onSelectChange: selectChange });
			
			$("#x1").val( s_x + s_margin );
			$("#y1").val( s_y + s_margin );
			$("#x2").val( s_x + s_max - s_margin );
			$("#y2").val( s_y + s_max - s_margin );
			$("#width").val( s_max - ( 2 * s_margin ) );
			$("#height").val( s_max - ( 2 * s_margin ) );
		}
    });

	$(document).ready(function(){	

		$("body").on(\'click\', "div[id=\'get_file\']", function(event) {  	    
			event.preventDefault();

		   $("div[id=\'upload_file\']").removeClass( "has-error" );

		});	
		
	});
	
    '; ?>

</script>
	
<div class="container">

	<div class="well bs-component">

		<div class="col-md-12">
			<div class="m-b-15">
				<legend><?php echo smarty_function_t(array('c' => 'user.AVATAR_TITLE'), $this);?>
</legend>
				<form class="form-horizontal" name="profile_avatar_form" id="profile_avatar_form" method="post" enctype="multipart/form-data" action="<?php echo $this->_tpl_vars['relative']; ?>
/user/avatar">	

					<div class="form-group">
						<?php if ($this->_tpl_vars['user']['photo'] != ''): ?>
							<div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4 col-md-2 col-md-offset-5">
								<img src="<?php echo $this->_tpl_vars['relative']; ?>
/media/users/<?php echo $this->_tpl_vars['user']['photo']; ?>
?<?php echo ((is_array($_tmp=0)) ? $this->_run_mod_handler('rand', true, $_tmp, 100) : rand($_tmp, 100)); ?>
" class="img-responsive">
							</div>
						<?php else: ?>
							<div class="col-xs-6 col-xs-offset-3">
								<center><span class="text-danger"><?php echo smarty_function_t(array('c' => 'user.avatar_none'), $this);?>
</span></center>
							</div>
						<?php endif; ?>
					
					</div>
							
					<div id="upload_file" class="form-group <?php if ($this->_tpl_vars['err']['file']): ?> has-error<?php endif; ?>">
						<div class="row">
							<div class="col-xs-12 col-sm-8 col-sm-offset-2">
								<label for="avatar" class="col-lg-2 control-label"><?php echo smarty_function_t(array('c' => 'global.file'), $this);?>
</label>
								<div class="col-lg-10">
								<div id="get_file" class="btn btn btn-primary no-radius-r pull-left" onclick="getFile('profile_avatar')"><?php echo smarty_function_t(array('c' => 'file.choose_file'), $this);?>
</div>
								<div class="file-box">
									<span id="upaname"><?php echo smarty_function_t(array('c' => 'file.no_file'), $this);?>
</span>
									<div style="height: 0px; width: 0px;overflow:hidden;">
										<input name="avatar" type="file" id="profile_avatar" onChange="sub(this,'upaname','nofile')" />								
									</div>
									<input type="hidden" id="nofile" value="<?php echo smarty_function_t(array('c' => 'file.no_file'), $this);?>
">
								</div>
								<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-xs-12 col-sm-8 col-sm-offset-2">					
								<div class="col-lg-10 col-lg-offset-2">
									<input name="avatar_submit" type="submit" class="btn btn-primary" value=" <?php echo smarty_function_t(array('c' => 'global.upload'), $this);?>
 " />
								</div>
							</div>
						</div>
					</div>
				</form>
				<div class="clearfix"></div>
					<?php if ($this->_tpl_vars['uploaded']): ?>
						<form class="form-horizontal" name="profile_avatar_crop_form" id="profile_avatar_crop_form" method="post" action="<?php echo $this->_tpl_vars['relative']; ?>
/user/avatar">
							<input name="x1" type="hidden" value="0" id="x1">
							<input name="y1" type="hidden" value="0" id="y1">
							<input name="x2" type="hidden" value="150" id="x2">
							<input name="y2" type="hidden" value="150" id="y2">
							<input name="width" type="hidden" value="150" id="width">
							<input name="height" type="hidden" value="150" id="height">
							<center>							
								<div class="hidden-xs m-b-15">
									<img src="<?php echo $this->_tpl_vars['relative']; ?>
/media/users/orig/<?php echo $this->_tpl_vars['user']['UID']; ?>
.jpg?<?php echo ((is_array($_tmp=0)) ? $this->_run_mod_handler('rand', true, $_tmp, 100) : rand($_tmp, 100)); ?>
" id="user_avatar" />
								</div>
							
								<div class="visible-xs m-b-15">
									<img src="<?php echo $this->_tpl_vars['relative']; ?>
/media/users/orig/<?php echo $this->_tpl_vars['user']['UID']; ?>
.jpg" class="img-responsive" />
								</div>
							</center>							
							<div class="form-group m-b-0">
								<div class="row">
									<div class="col-xs-12 col-sm-8 col-sm-offset-2">					
										<div class="col-lg-10 col-lg-offset-2">
											<button name="avatar_crop_submit" type="submit" class="btn btn-primary"><span class="visible-xs"><?php echo smarty_function_t(array('c' => 'global.auto_crop_save'), $this);?>
</span><span class="hidden-xs"><?php echo smarty_function_t(array('c' => 'global.crop_save'), $this);?>
</span></button>										
										</div>
									</div>
								</div>
							</div>							
						</form>
					<?php endif; ?>
			</div>
		</div>

		<div class="clearfix"></div>
	
	</div>

</div>