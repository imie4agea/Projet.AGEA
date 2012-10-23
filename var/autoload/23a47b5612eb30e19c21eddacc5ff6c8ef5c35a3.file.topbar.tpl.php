<?php /* Smarty version Smarty-3.1.12, created on 2012-10-23 14:24:54
         compiled from "/home/soufian/www/agea/app/templates/administration/topbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:137923773350868c967f4ac5-22937363%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23a47b5612eb30e19c21eddacc5ff6c8ef5c35a3' => 
    array (
      0 => '/home/soufian/www/agea/app/templates/administration/topbar.tpl',
      1 => 1350975327,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137923773350868c967f4ac5-22937363',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50868c96813f51_36983553',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50868c96813f51_36983553')) {function content_50868c96813f51_36983553($_smarty_tpl) {?><div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<a class="brand" href="index.php?p=general">
				<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['site_name']->value, 'UTF-8');?>
 - Administration			
			</a>		
			<ul class="nav pull-right">
				<li>
					<a href="index.php" style="color: white; font-size: 14px;">
						<i class="icon-circle-arrow-right"></i>
						Retour au site
					</a>
				</li>
			</ul>
		</div>
	</div>
</div><?php }} ?>