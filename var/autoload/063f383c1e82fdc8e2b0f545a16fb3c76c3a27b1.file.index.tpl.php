<?php /* Smarty version Smarty-3.1.12, created on 2012-10-23 17:53:49
         compiled from "/home/soufian/www/agea/app/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:194231260550868b19e57063-11415405%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '063f383c1e82fdc8e2b0f545a16fb3c76c3a27b1' => 
    array (
      0 => '/home/soufian/www/agea/app/templates/index.tpl',
      1 => 1351007626,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194231260550868b19e57063-11415405',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50868b1a1a4304_52559381',
  'variables' => 
  array (
    'title' => 0,
    'css' => 0,
    'file' => 0,
    'media' => 0,
    'ie_css' => 0,
    'version' => 0,
    'ie_js' => 0,
    'env_mode' => 0,
    'section_template' => 0,
    'js' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50868b1a1a4304_52559381')) {function content_50868b1a1a4304_52559381($_smarty_tpl) {?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="apple-mobile-web-app-capable" content="yes">

        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>

        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <!--[if IE 7]><link rel="stylesheet" href="css/font-awesome-ie7.css"><![endif]-->

        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">

        <script src="js/modernizr.min.js"></script>

        <?php if (isset($_smarty_tpl->tpl_vars['css']->value)&&$_smarty_tpl->tpl_vars['css']->value){?>
        <!-- CSS -->
            <?php  $_smarty_tpl->tpl_vars['media'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['media']->_loop = false;
 $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['css']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['media']->key => $_smarty_tpl->tpl_vars['media']->value){
$_smarty_tpl->tpl_vars['media']->_loop = true;
 $_smarty_tpl->tpl_vars['file']->value = $_smarty_tpl->tpl_vars['media']->key;
?>
                <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
" media="<?php echo $_smarty_tpl->tpl_vars['media']->value;?>
" />
            <?php } ?>
        <?php }?>

        <?php if (isset($_smarty_tpl->tpl_vars['ie_css']->value)&&$_smarty_tpl->tpl_vars['ie_css']->value){?>
            <?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['file']->_loop = false;
 $_smarty_tpl->tpl_vars['version'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ie_css']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value){
$_smarty_tpl->tpl_vars['file']->_loop = true;
 $_smarty_tpl->tpl_vars['version']->value = $_smarty_tpl->tpl_vars['file']->key;
?>
                <!--[if <?php echo $_smarty_tpl->tpl_vars['version']->value;?>
]>
                    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
" />
                <![endif]-->
            <?php } ?>
        <!-- /CSS -->
        <?php }?>

        <?php if (isset($_smarty_tpl->tpl_vars['ie_js']->value)&&$_smarty_tpl->tpl_vars['ie_js']->value){?>
        <!-- JS -->
            <?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['file']->_loop = false;
 $_smarty_tpl->tpl_vars['version'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ie_js']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value){
$_smarty_tpl->tpl_vars['file']->_loop = true;
 $_smarty_tpl->tpl_vars['version']->value = $_smarty_tpl->tpl_vars['file']->key;
?>
                <!--[if <?php echo $_smarty_tpl->tpl_vars['version']->value;?>
]>
                    <script src="<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
"></script>
                <![endif]-->
            <?php } ?>
        <!-- /JS -->
        <?php }?>
    </head>

    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">Votre navigateur est obsolète. <a href="http://browsehappy.com/">Mettez le à jour</a> ou <a href="http://www.google.com/chromeframe/?redirect=true">installez Google Chrome Frame</a> pour pouvoir profiter de ce site.</p>
        <![endif]-->

        <?php if ($_smarty_tpl->tpl_vars['env_mode']->value=='dev'){?>
            <?php echo $_smarty_tpl->getSubTemplate ("dev/modal/modal_debug.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <?php }?>

        <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['section_template']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>

        <?php if (isset($_smarty_tpl->tpl_vars['js']->value)&&$_smarty_tpl->tpl_vars['js']->value){?>
        <!-- JS -->
            <?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['file']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['js']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value){
$_smarty_tpl->tpl_vars['file']->_loop = true;
?>
                <script src="<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
"></script>
            <?php } ?>
        <!-- /JS -->
        <?php }?>
        
        <script src="js/main.js"></script>
    </body>
</html>
<?php }} ?>