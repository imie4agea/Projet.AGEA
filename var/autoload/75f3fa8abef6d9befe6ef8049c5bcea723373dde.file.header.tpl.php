<?php /* Smarty version Smarty-3.1.12, created on 2012-10-23 14:20:30
         compiled from "/home/soufian/www/agea/app/templates/public/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:164555079450868b8e1d6de1-67658995%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75f3fa8abef6d9befe6ef8049c5bcea723373dde' => 
    array (
      0 => '/home/soufian/www/agea/app/templates/public/header.tpl',
      1 => 1350975327,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164555079450868b8e1d6de1-67658995',
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
  'unifunc' => 'content_50868b8e303ab2_69759152',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50868b8e303ab2_69759152')) {function content_50868b8e303ab2_69759152($_smarty_tpl) {?><div class="container">
	<div class="row-fluid">
		<div class="span12">
			<div class="navbar navbar-inverse">
	    		<div class="navbar-inner">
            		<ul class="nav">
			            <?php  $_smarty_tpl->tpl_vars['_page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_page']->key => $_smarty_tpl->tpl_vars['_page']->value){
$_smarty_tpl->tpl_vars['_page']->_loop = true;
?>
		    				<?php if (strpos($_smarty_tpl->tpl_vars['_page']->value['name'],'_')!==0&&$_smarty_tpl->tpl_vars['_page']->value['section']['name']==$_smarty_tpl->tpl_vars['page']->value['section']['name']){?>
			                    <li <?php if ($_smarty_tpl->tpl_vars['page']->value['name']==$_smarty_tpl->tpl_vars['_page']->value['name']){?> class="active" <?php }?>>
			                    	<a href="index.php?p=<?php echo $_smarty_tpl->tpl_vars['_page']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['_page']->value['title'];?>
</a>
			                    </li>
			                <?php }?>
			            <?php } ?>
			            <?php if ($_smarty_tpl->tpl_vars['page']->value['section']['name']=='membre'){?>
				            <li>
				            	<a href="index.php?p=accueil">Retour à l'accueil</a>
			            	</li>
		            	<?php }?>
            		</ul>
	        	</div>
	      	</div>
		</div>
	</div>
</div><?php }} ?>