<?php /* Smarty version Smarty-3.1.12, created on 2012-10-23 14:24:54
         compiled from "/home/soufian/www/agea/app/templates/administration/pages/general/edit_info_widget.tpl" */ ?>
<?php /*%%SmartyHeaderCode:47748419250868c9697ddc7-91169866%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8508412884d8f2e616c5eca0fcdf72acf29e812e' => 
    array (
      0 => '/home/soufian/www/agea/app/templates/administration/pages/general/edit_info_widget.tpl',
      1 => 1350975327,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '47748419250868c9697ddc7-91169866',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'metadata' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50868c96a5eab8_11115350',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50868c96a5eab8_11115350')) {function content_50868c96a5eab8_11115350($_smarty_tpl) {?><div class="widget-header">
	<i class="icon-question-sign"></i>
	<h3>Informations générales :</h3>
</div>

<div class="widget-content">
	<form id="meta-infos-form" action="index.php?p=informations_generales" method="post" class="form-horizontal">
    	<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['metadata']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['data']->value['metadata']==false){?>
                <div class="control-group">
                    <label class="control-label" for="<?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['label'];?>
 :</label>
                    <div class="controls">
                        <input class="input" id="<?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
" type="text" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['value'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['data']->value['label'];?>
...">
                    </div>
                </div>
            <?php }?>
        <?php } ?>
    </form>

    <div class="control-group" style="text-align: center;">
        <div class="controls">
            <button class="btn btn-danger">Modifier</button>
        </div>
    </div>
</div><?php }} ?>