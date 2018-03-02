<?php /* Smarty version 2.6.20, created on 2017-12-11 01:37:56
         compiled from multiserversystem.tpl */ ?>
											<tr>
												<td class="v-align-middle no-border" style="width:70%;">
													Multi Server System
												</td>
												<td class="v-align-middle no-border" style="width:15%;">
													<div class="radio radio-success">
														 <input type="radio" <?php if ($this->_tpl_vars['multi_server'] == '1'): ?>checked="checked"<?php endif; ?> value="1" name="multi_server" id="multi_server_e">
														 <label class="m-0" for="multi_server_e">Enabled</label>
													</div>												
												</td>
												<td class="v-align-middle no-border" style="width:15%;">
													<div class="radio radio-danger">
														<input type="radio" <?php if ($this->_tpl_vars['multi_server'] == '0'): ?>checked="checked"<?php endif; ?> value="0" name="multi_server" id="multi_server_d">
														<label class="m-0" for="multi_server_d">Disabled</label>
													</div>
												</td>
											</tr>