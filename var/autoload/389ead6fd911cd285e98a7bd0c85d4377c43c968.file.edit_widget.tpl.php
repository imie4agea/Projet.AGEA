<?php /* Smarty version Smarty-3.1.12, created on 2012-10-23 14:25:38
         compiled from "/home/soufian/www/agea/app/templates/administration/pages/contenus/edit_widget.tpl" */ ?>
<?php /*%%SmartyHeaderCode:187476090950868cc28cfe57-37950430%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '389ead6fd911cd285e98a7bd0c85d4377c43c968' => 
    array (
      0 => '/home/soufian/www/agea/app/templates/administration/pages/contenus/edit_widget.tpl',
      1 => 1350975327,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '187476090950868cc28cfe57-37950430',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_type' => 0,
    'content' => 0,
    'resources' => 0,
    'id' => 0,
    'resource' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50868cc29f17e5_78015285',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50868cc29f17e5_78015285')) {function content_50868cc29f17e5_78015285($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/home/soufian/www/agea/lib/smarty/libs/plugins/modifier.capitalize.php';
?><div class="widget-header">
	<i class="icon-pencil"></i>
	<h3>Modifier un contenu (<?php echo $_smarty_tpl->tpl_vars['content_type']->value['label'];?>
) :</h3>
</div>

<div class="widget-content">
	<form id="meta-infos-form" action="index.php?p=informations_generales" method="post" class="form-horizontal">
        <div class="control-group">
            <label class="control-label" for="content_title">Titre :</label>
            <div class="controls">
                <input class="input" id="content_title" name="content_title" type="text" value="<?php echo $_smarty_tpl->tpl_vars['content']->value['title'];?>
" placeholder="Titre...">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="content_body">Corps de texte :</label>
            <div class="controls">
                <textarea id="content_body" name="content_body" rows="10" placeholder="Corps de texte..."><?php echo $_smarty_tpl->tpl_vars['content']->value['body'];?>
</textarea>
            </div>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['content_type']->value['picture']==true){?>
            <div class="control-group">
                <label class="control-label" for="content_resource_id">Image :</label>
				<div class="controls">
					<select name="content_resource_id" id="content_resource_id">
						<?php  $_smarty_tpl->tpl_vars['resource'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['resource']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['resources']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['resource']->key => $_smarty_tpl->tpl_vars['resource']->value){
$_smarty_tpl->tpl_vars['resource']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['resource']->key;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['content']->value['resource']['id']==$_smarty_tpl->tpl_vars['id']->value){?>selected="selected"<?php }?>><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['resource']->value['title']);?>
</option>
						<?php } ?>
					</select>
				</div>
            </div>
        <?php }?>
    </form>

    <div class="control-group" style="text-align: center;">
        <div class="controls">
			<button class="btn btn-danger">Modifier</button>
        </div>
    </div>
</div><?php }} ?>