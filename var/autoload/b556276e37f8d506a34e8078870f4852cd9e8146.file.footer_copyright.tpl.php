<?php /* Smarty version Smarty-3.1.12, created on 2012-10-23 14:23:42
         compiled from "/home/soufian/www/agea/app/templates/public/footer_copyright.tpl" */ ?>
<?php /*%%SmartyHeaderCode:154274059150868c4ecb48b7-33749403%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b556276e37f8d506a34e8078870f4852cd9e8146' => 
    array (
      0 => '/home/soufian/www/agea/app/templates/public/footer_copyright.tpl',
      1 => 1350975327,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '154274059150868c4ecb48b7-33749403',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_name' => 0,
    'address' => 0,
    'phone' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50868c4ed3df78_41476699',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50868c4ed3df78_41476699')) {function content_50868c4ed3df78_41476699($_smarty_tpl) {?><div class="container">
	<div class="sixteen columns">
		<p>&copy; <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['site_name']->value, 'UTF-8');?>
</p>
		<p><?php echo $_smarty_tpl->tpl_vars['address']->value;?>
</p>
		<p><i class="icon-phone"></i> <?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
</p>
	</div>
</div><?php }} ?>