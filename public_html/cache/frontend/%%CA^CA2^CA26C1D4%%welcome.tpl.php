<?php /* Smarty version 2.6.20, created on 2017-12-11 14:48:14
         compiled from /home/admin/web/stroken.com/public_html/templates/emails/welcome.tpl */ ?>
Welcome to <?php echo $this->_tpl_vars['site_title']; ?>


To login use the following credentials:
Username: <?php echo $this->_tpl_vars['username']; ?>

Password: <?php echo $this->_tpl_vars['password']; ?>


To change your avatar, follow the link below: 
<a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/user/avatar"><?php echo $this->_tpl_vars['baseurl']; ?>
/user/avatar</a>

Thanks,
The <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
"><?php echo $this->_tpl_vars['site_name']; ?>
</a> Team

___
To control which emails you receive from <?php echo $this->_tpl_vars['site_name']; ?>
? Go to: <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
/user/prefs"><?php echo $this->_tpl_vars['baseurl']; ?>
/user/prefs</a>
