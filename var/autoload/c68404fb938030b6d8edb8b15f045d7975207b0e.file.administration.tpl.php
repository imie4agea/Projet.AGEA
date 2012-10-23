<?php /* Smarty version Smarty-3.1.12, created on 2012-10-23 14:24:54
         compiled from "/home/soufian/www/agea/app/templates/administration/administration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:55153270750868c967166d9-53467016%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c68404fb938030b6d8edb8b15f045d7975207b0e' => 
    array (
      0 => '/home/soufian/www/agea/app/templates/administration/administration.tpl',
      1 => 1350975327,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '55153270750868c967166d9-53467016',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_template' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50868c967ed513_69965283',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50868c967ed513_69965283')) {function content_50868c967ed513_69965283($_smarty_tpl) {?><div class="wrapper">
	<?php echo $_smarty_tpl->getSubTemplate ("administration/topbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


	<?php echo $_smarty_tpl->getSubTemplate ("administration/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


	<div class="main">
		<div class="main-inner">
		    <div class="container">
		    	<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['page_template']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		    </div>
		</div>
	</div>

	<div class="push"></div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("administration/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>