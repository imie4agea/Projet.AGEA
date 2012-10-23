<?php /* Smarty version Smarty-3.1.12, created on 2012-10-23 14:24:54
         compiled from "/home/soufian/www/agea/app/templates/administration/pages/general.tpl" */ ?>
<?php /*%%SmartyHeaderCode:194152703950868c96953c56-41259201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8795f75198e69881229cb38785ac9b4e36893976' => 
    array (
      0 => '/home/soufian/www/agea/app/templates/administration/pages/general.tpl',
      1 => 1350975327,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194152703950868c96953c56-41259201',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50868c969753d9_63810928',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50868c969753d9_63810928')) {function content_50868c969753d9_63810928($_smarty_tpl) {?><div class="row-fluid">
	<div class="span6">
		<div class="widget">
			<?php echo $_smarty_tpl->getSubTemplate ("administration/pages/general/edit_info_widget.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		</div>
	</div>
	<div class="span6">
		<div class="widget">
			<?php echo $_smarty_tpl->getSubTemplate ("administration/pages/general/edit_metadata_widget.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		</div>
  </div>
</div><?php }} ?>