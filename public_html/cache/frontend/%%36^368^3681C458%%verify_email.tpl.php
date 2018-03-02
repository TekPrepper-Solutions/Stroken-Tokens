<?php /* Smarty version 2.6.20, created on 2017-12-11 14:48:14
         compiled from /home/admin/web/stroken.com/public_html/templates/emails/verify_email.tpl */ ?>
Dear <?php echo $this->_tpl_vars['username']; ?>
,

You recently registered to <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
"><?php echo $this->_tpl_vars['site_name']; ?>
</a> using this email address. To complete your registration, follow the link below:
<a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/confirm?id=<?php echo $this->_tpl_vars['uid']; ?>
&code=<?php echo $this->_tpl_vars['code']; ?>
"><?php echo $this->_tpl_vars['baseurl']; ?>
/confirm?id=<?php echo $this->_tpl_vars['uid']; ?>
&code=<?php echo $this->_tpl_vars['code']; ?>
</a> (If clicking on the link doesn't work, try copying and pasting it into your browser.)

Thanks,
The <?php echo $this->_tpl_vars['site_name']; ?>
 Team

___
To control which emails you receive from <?php echo $this->_tpl_vars['site_name']; ?>
? Go to: <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/user/prefs"><?php echo $this->_tpl_vars['baseurl']; ?>
/user/prefs</a>