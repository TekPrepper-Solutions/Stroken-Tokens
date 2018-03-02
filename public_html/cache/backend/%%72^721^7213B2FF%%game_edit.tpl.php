<?php /* Smarty version 2.6.20, created on 2018-02-19 00:15:24
         compiled from game_edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'game_edit.tpl', 25, false),)), $this); ?>
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true" style="display: none;">
<div id="editModalDialog" class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h4 id="editModalLabel" class="semi-bold">Game <span id="edit-id-span"></span>: Edit</h4>
		</div>
		<div class="modal-body">		
			<div class="row form-row">									
				<input id="edit-id" name="edit-id" type="hidden" value=""/>
				<label class="col-lg-3 control-label">Title</label>
				<div class="col-lg-9">
					<input id="edit-title" name="edit-title" type="text" value="" class="form-control">
				</div>
				<div class="clearfix"></div>
				<label class="col-lg-3 control-label">Tags</label>
				<div class="col-lg-9">
					<textarea id="edit-tags" name="edit-tags" rows="2" class="form-control" style="resize: vertical"></textarea>
				</div>
				<div class="clearfix"></div>
				<label class="col-lg-3 control-label">Category</label>
				<div class="col-lg-9">
					<select id="edit-category" name="edit-category" style="width:100%">
						<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['categories']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
						<option value="<?php echo $this->_tpl_vars['categories'][$this->_sections['i']['index']]['category_id']; ?>
"<?php if ($this->_tpl_vars['game'][0]['category'] == $this->_tpl_vars['categories'][$this->_sections['i']['index']]['category_id']): ?> selected="selected"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['categories'][$this->_sections['i']['index']]['category_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</option>
						<?php endfor; endif; ?>
					</select>
				</div>
				<div class="clearfix"></div>
				<div class="m-t-10"></div>				
				<label class="col-lg-3 control-label">Type</label>
				<div class="col-lg-9">
					<div class="radio p-t-9">
						<input id="edit-type_public" type="radio" name="edit-type" value="public" class="radio-enabled">
						<label for="edit-type_public">Public</label>
						<input id="edit-type_private" type="radio" name="edit-type" value="private" class="radio-disabled">
						<label for="edit-type_private">Private</label>												
					</div>
				</div>
				<div class="clearfix"></div>
				<label class="col-lg-3 control-label">Status</label>
				<div class="col-lg-9">
					<div class="radio p-t-9">
						<input id="edit-status_a" type="radio" name="edit-status" value="1" class="radio-enabled">
						<label for="edit-status_a">Active</label>
						<input id="edit-status_i" type="radio" name="edit-status" value="0" class="radio-disabled">
						<label for="edit-status_i">Inactive</label>												
					</div>
				</div>					
				<div class="clearfix"></div>
				<label class="col-lg-3 control-label">Can be commented?</label>
				<div class="col-lg-9">
					<div class="radio p-t-9">
						<input id="edit-be_commented_y" type="radio" name="edit-be_commented" value="yes" class="radio-enabled">
						<label for="edit-be_commented_y">Yes</label>
						<input id="edit-be_commented_n" type="radio" name="edit-be_commented" value="no" class="radio-disabled">
						<label for="edit-be_commented_n">No</label>												
					</div>
				</div>
				<div class="clearfix"></div>
				<label class="col-lg-3 control-label">Can be rated?</label>
				<div class="col-lg-9">
					<div class="radio p-t-9">
						<input id="edit-be-rated-y" type="radio" name="edit-be_rated" value="yes" class="radio-enabled">
						<label for="edit-be-rated-y">Yes</label>
						<input id="edit-be-rated-n" type="radio" name="edit-be_rated" value="no" class="radio-disabled">
						<label for="edit-be-rated-n">No</label>												
					</div>
				</div>
				<div class="clearfix"></div>				
				<label class="col-lg-3 control-label">Likes</label>
				<div class="col-lg-9">
					<input id="edit-likes" name="edit-likes" type="text" value="" class="form-control">
				</div>
				<div class="clearfix"></div>

				<label class="col-lg-3 control-label">Dislikes</label>
				<div class="col-lg-9">
					<input id="edit-dislikes" name="edit-dislikes" type="text" value="" class="form-control">
				</div>
				<div class="clearfix"></div>

				<label class="col-lg-3 control-label">Plays</label>
				<div class="col-lg-9">
					<input id="edit-viewnumber" name="edit-viewnumber" type="text" value="" class="form-control">
				</div>
				<div class="clearfix"></div>
			
			</div>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
			<button type="button" id="edit-reset" class="btn btn-white btn-icon">Reset</button>
			<button type="button" id="edit-save" class="btn btn-success">Save</button>
		</div>
	</div>
 
</div>
 
</div>	