<?php /* Smarty version Smarty-3.1.12, created on 2012-10-23 14:24:43
         compiled from "/home/soufian/www/agea/app/templates/membre/membre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:175721381150868c8ba122f7-63447405%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f3062fa4860d22d7133420a283c1d361aa24e80' => 
    array (
      0 => '/home/soufian/www/agea/app/templates/membre/membre.tpl',
      1 => 1350994848,
      2 => 'file',
    ),
    '7995a75216c1bf71322d2e4329318f990b6a2558' => 
    array (
      0 => '/home/soufian/www/agea/app/templates/models/front_section.tpl',
      1 => 1350994828,
      2 => 'file',
    ),
    '558ed4c3e03b6603c57600a4ee5980a5309b99ed' => 
    array (
      0 => '/home/soufian/www/agea/app/templates/public/modal/modal_login_admin.tpl',
      1 => 1350975327,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '175721381150868c8ba122f7-63447405',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50868c8bb5b7d7_56254814',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50868c8bb5b7d7_56254814')) {function content_50868c8bb5b7d7_56254814($_smarty_tpl) {?>
	<?php /*  Call merged included template "public/modal/modal_login_admin.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("public/modal/modal_login_admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '175721381150868c8ba122f7-63447405');
content_50868c8ba7e2c8_08719153($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "public/modal/modal_login_admin.tpl" */?>


<?php echo $_smarty_tpl->getSubTemplate ("public/logo_agea.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<header>
    <?php echo $_smarty_tpl->getSubTemplate ("public/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</header>


<div id="wrapper">
	<div class="container">
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['page_template']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
</div>

<footer>
	<div id="footer">
	    <?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>

	<div id="footer-menu">
	    <?php echo $_smarty_tpl->getSubTemplate ("public/footer_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>

	<div id="footer-copyright">
	    <?php echo $_smarty_tpl->getSubTemplate ("public/footer_copyright.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
</footer><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2012-10-23 14:24:43
         compiled from "/home/soufian/www/agea/app/templates/public/modal/modal_login_admin.tpl" */ ?>
<?php if ($_valid && !is_callable('content_50868c8ba7e2c8_08719153')) {function content_50868c8ba7e2c8_08719153($_smarty_tpl) {?><div class="modal hide fade" id="login-admin">
    <div class="modal-header">
        <i class="icon-signin"></i> Connexion à l'espace d'administration
        <button class="close" data-dismiss="modal">x</button>
    </div>
    <div class="modal-body">
        <form id="login-admin-form" action="index.php?p=general" method="post" class="form-horizontal">
            <div class="control-group">
                <label class="control-label" for="login_username">Nom d'utilisateur :</label>
                <div class="controls">
                    <input class="input" id="login_username" name="login_username" type="text" placeholder="Nom d'utilisateur...">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="login_password">Mot de passe :</label>
                <div class="controls">
                    <input class="input" id="login_password" name="login_password" type="password" placeholder="Mot de passe...">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="login_remember">Se souvenir de moi :</label>
                <div class="controls">
                     <input id="login_remember" name="login_remember" type="checkbox">
                </div>
            </div>
            <div class="alert" id="login_remember_warning" class="hide">
                <button class="close" data-dismiss="alert">×</button>
                <strong>Attention :</strong> ne cochez pas cette case si vous vous connectez depuis un lieu public !
            </div>
        </form>
    </div>
    <div class="modal-footer">
        <input id="login-admin-submit" class="btn btn-primary" type="submit" value="Connexion">
    </div>
</div><?php }} ?>