<?php /* Smarty version Smarty-3.1.12, created on 2012-10-23 14:25:35
         compiled from "/home/soufian/www/agea/app/templates/administration/pages/contenus.tpl" */ ?>
<?php /*%%SmartyHeaderCode:64692919350868cbf5d5cc9-29229195%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0e1d2fc8626b8bd38f2c5de1f32af2b41165959' => 
    array (
      0 => '/home/soufian/www/agea/app/templates/administration/pages/contenus.tpl',
      1 => 1350995126,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64692919350868cbf5d5cc9-29229195',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'add_content' => 0,
    'edit_content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50868cbf674f48_43609641',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50868cbf674f48_43609641')) {function content_50868cbf674f48_43609641($_smarty_tpl) {?><div class="row-fluid">
	<div class="span6">
		<?php if ($_smarty_tpl->tpl_vars['add_content']->value==true){?>
			<div class="widget">
				<?php echo $_smarty_tpl->getSubTemplate ("administration/pages/contenus/add_widget.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>
		<?php }elseif($_smarty_tpl->tpl_vars['edit_content']->value==true){?>
			<div class="widget">
				<?php echo $_smarty_tpl->getSubTemplate ("administration/pages/contenus/edit_widget.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>
		<?php }?>
	</div>
	<div class="span6">
		<div class="widget">
			<?php echo $_smarty_tpl->getSubTemplate ("administration/pages/contenus/list_widget.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		</div>
	</div>
  </div>
</div><?php }} ?>