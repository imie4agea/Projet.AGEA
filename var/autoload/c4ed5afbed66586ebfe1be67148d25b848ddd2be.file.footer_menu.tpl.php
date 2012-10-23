<?php /* Smarty version Smarty-3.1.12, created on 2012-10-23 14:23:42
         compiled from "/home/soufian/www/agea/app/templates/public/footer_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:55321710450868c4ec18ea1-23296891%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4ed5afbed66586ebfe1be67148d25b848ddd2be' => 
    array (
      0 => '/home/soufian/www/agea/app/templates/public/footer_menu.tpl',
      1 => 1350975327,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '55321710450868c4ec18ea1-23296891',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_name' => 0,
    'email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50868c4ec50d94_97749967',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50868c4ec50d94_97749967')) {function content_50868c4ec50d94_97749967($_smarty_tpl) {?><div class="container">
	<div class="row-fluid">

		<div class="span2">
			<div id="footer-menu-logo">
				<a class="brand" href="#"><span><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['site_name']->value, 'UTF-8');?>
</span></a>
			</div>
		</div>

		<div class="span9">
			<div id="footer-menu-links">
				<ul id="footer-nav">
					<li>
						<a href="index.php?p=_mentions_legales">mentions légales</a>
					</li>
					<li>
						<a href="#login-admin" role="button" data-toggle="modal">administration</a>
					</li>
					<li>
						<a href="mailto:<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
">contact</a>
					</li>
				</ul>
			</div>
		</div>

		<div class="span1">
			<div id="footer-menu-back-to-top">
				<a href="#"></a>
			</div>
		</div>
	</div>
</div><?php }} ?>