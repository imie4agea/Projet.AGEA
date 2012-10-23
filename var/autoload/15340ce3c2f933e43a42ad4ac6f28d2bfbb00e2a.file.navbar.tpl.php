<?php /* Smarty version Smarty-3.1.12, created on 2012-10-23 14:24:54
         compiled from "/home/soufian/www/agea/app/templates/administration/navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:111581051050868c968282d6-28136651%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15340ce3c2f933e43a42ad4ac6f28d2bfbb00e2a' => 
    array (
      0 => '/home/soufian/www/agea/app/templates/administration/navbar.tpl',
      1 => 1350975327,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111581051050868c968282d6-28136651',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pages' => 0,
    '_page' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50868c96947602_24704385',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50868c96947602_24704385')) {function content_50868c96947602_24704385($_smarty_tpl) {?><div class="subnavbar">
	<div class="subnavbar-inner">
		<div class="container">
			<ul class="mainnav">
	            <?php  $_smarty_tpl->tpl_vars['_page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_page']->key => $_smarty_tpl->tpl_vars['_page']->value){
$_smarty_tpl->tpl_vars['_page']->_loop = true;
?>
    				<?php if (strpos($_smarty_tpl->tpl_vars['_page']->value['name'],'_')!==0&&$_smarty_tpl->tpl_vars['_page']->value['section']['name']==$_smarty_tpl->tpl_vars['page']->value['section']['name']){?>
	                    <li <?php if ($_smarty_tpl->tpl_vars['page']->value['name']==$_smarty_tpl->tpl_vars['_page']->value['name']){?> class="active" <?php }?>>
	                    	<a href="index.php?p=<?php echo $_smarty_tpl->tpl_vars['_page']->value['name'];?>
">
								<i class="<?php echo $_smarty_tpl->tpl_vars['_page']->value['icon'];?>
"></i>
	                    		<span><?php echo $_smarty_tpl->tpl_vars['_page']->value['title'];?>
</span>
	                    	</a>
	                    </li>
	                <?php }?>
	            <?php } ?>
			</ul>
		</div>
	</div>
</div><?php }} ?>