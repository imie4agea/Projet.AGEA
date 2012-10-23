<?php /* Smarty version Smarty-3.1.12, created on 2012-10-23 14:25:35
         compiled from "/home/soufian/www/agea/app/templates/administration/pages/contenus/list_widget.tpl" */ ?>
<?php /*%%SmartyHeaderCode:107620528350868cbf67c102-75851651%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '530535bea8ba939daab173e0e79b90ed7116973d' => 
    array (
      0 => '/home/soufian/www/agea/app/templates/administration/pages/contenus/list_widget.tpl',
      1 => 1350975327,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '107620528350868cbf67c102-75851651',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'contents' => 0,
    'content' => 0,
    'id' => 0,
    'content_types' => 0,
    'content_type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50868cbf762a63_12291848',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50868cbf762a63_12291848')) {function content_50868cbf762a63_12291848($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/home/soufian/www/agea/lib/smarty/libs/plugins/modifier.capitalize.php';
?><div class="widget-header">
	<i class="icon-list-ul"></i>
	<h3>Liste des contenus :</h3>
</div>

<div class="widget-content">
	<table class="table">
		<?php  $_smarty_tpl->tpl_vars['content'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['content']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['contents']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['content']->key => $_smarty_tpl->tpl_vars['content']->value){
$_smarty_tpl->tpl_vars['content']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['content']->key;
?>
			<tr>
				<td>
					<strong><?php echo $_smarty_tpl->tpl_vars['content']->value['title'];?>
</strong>
				</td>
				<td>
					<?php echo $_smarty_tpl->tpl_vars['content']->value['content_type'];?>

				</td>
				<td>
					<a href="index.php?p=contenus&amp;edit_content=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    					<i class="icon-pencil"></i>
    					Modifier
					</a>
				</td>
				<td>
					<a href="index.php?p=contenus&amp;delete_content=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    					<i class="icon-trash"></i>
    					Supprimer
					</a>
				</td>
			</tr>
		<?php } ?>
		<tr>
			<form method="post" action="index.php?p=contenus&amp;add_content=true">
				<td colspan="3">
					<select name="content_type_id" id="content_type_id">
						<?php  $_smarty_tpl->tpl_vars['content_type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['content_type']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['content_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['content_type']->key => $_smarty_tpl->tpl_vars['content_type']->value){
$_smarty_tpl->tpl_vars['content_type']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['content_type']->key;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['content_type']->value['label']);?>
</option>
						<?php } ?>
					</select>
				</td>
				<td>
					<button type="submit" class="btn btn-danger">
    					<i class="icon-plus-sign"></i>
    					Ajouter
					</button>
				</td>
			</form>
		</tr>
	</table>
</div><?php }} ?>