<?php /* Smarty version Smarty-3.1.12, created on 2012-10-23 14:19:44
         compiled from "/home/soufian/www/agea/app/templates/dev/modal/modal_debug.tpl" */ ?>
<?php /*%%SmartyHeaderCode:197322848450868b606c49a2-43113401%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba8654e019823075d1bfb3d0e218e100e187d344' => 
    array (
      0 => '/home/soufian/www/agea/app/templates/dev/modal/modal_debug.tpl',
      1 => 1350994782,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197322848450868b606c49a2-43113401',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'key' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50868b60bdce90_51310348',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50868b60bdce90_51310348')) {function content_50868b60bdce90_51310348($_smarty_tpl) {?><div class="modal hide fade" id="modal-debug">
    <div class="modal-header">
        <i class="icon-debug"></i> Debug
        <button class="close" data-dismiss="modal">x</button>
    </div> <!-- /modal-header -->
    <div class="modal-body">
        <ul id="debug-tabs" class="nav nav-tabs">
            <li><a href="#debug-globals" data-toggle="tab">Globals</a></li>
            <li><a href="#debug-krumo" data-toggle="tab">Krumo</a></li>
            <li><a href="#debug-smarty" data-toggle="tab">Smarty</a></li>
        </ul>

        <div class="tab-content">
            <div id="debug-globals" class="tab-pane fade">
                
                <div class="subnav subnav-fixed">
                    <ul class="nav nav-pills">
                        <li>
                            <a style="color: orange;" href="#globals-session">Session</a>
                        </li>
                        <li>
                            <a style="color: green;" href="#globals-post">Post</a>
                        </li>
                        <li>
                            <a style="color: blue;" href="#globals-get">Get</a>
                        </li>
                        <li>
                            <a style="color: purple;" href="#globals-cookies">Cookies</a>
                        </li>
                        <li>
                            <a style="color: brown;" href="#globals-env">Env</a>
                        </li>
                        <li>
                            <a style="color: red;" href="#globals-server">Server</a>
                        </li>
                    </ul>
                </div>
                
                <table class="table table-striped table-bordered" id="globals-session">
                    <thead>
                        <tr>
                            <th style="color: orange;" colspan="3">SESSION</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php if (sizeof($_SESSION)>0){?>
                            <tr>
                                <th>#</th>
                                <th>KEY</th>
                                <th>ITEM</th>
                            </tr>
                            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_SESSION; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['session']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['session']['iteration']++;
?>
                                <tr>
                                    <td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['session']['iteration'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</td>
                                </tr>
                            <?php } ?>
                        <?php }else{ ?>
                            <tr>
                                <td colspan="3">Empty</td>
                            </tr>
                        <?php }?>
                    </tbody>
                </table> <!-- /globals-session -->
                
                <table class="table table-striped table-bordered" id="globals-post">
                    <thead>
                        <tr>
                            <th style="color: green;" colspan="3">POST</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php if (sizeof($_POST)>0){?>
                            <tr>
                                <th>#</th>
                                <th>KEY</th>
                                <th>ITEM</th>
                            </tr>
                            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_POST; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['post']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['post']['iteration']++;
?>
                                <tr>
                                    <td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['post']['iteration'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</td>
                                </tr>
                            <?php } ?>
                        <?php }else{ ?>
                            <tr>
                                <td colspan="3">Empty</td>
                            </tr>
                        <?php }?>
                    </tbody>
                </table> <!-- /globals-post -->
                
                <table class="table table-striped table-bordered" id="globals-get">
                    <thead>
                        <tr>
                            <th style="color: blue;" colspan="3">GET</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php if (sizeof($_GET)>0){?>
                            <tr>
                                <th>#</th>
                                <th>KEY</th>
                                <th>ITEM</th>
                            </tr>
                            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_GET; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['get']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['get']['iteration']++;
?>
                                <tr>
                                    <td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['get']['iteration'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</td>
                                </tr>
                            <?php } ?>
                        <?php }else{ ?>
                            <tr>
                                <td colspan="3">Empty</td>
                            </tr>
                        <?php }?>
                    </tbody>
                </table>
                
                <table class="table table-striped table-bordered" id="globals-cookies">
                    <thead>
                        <tr>
                            <th style="color: purple;" colspan="3">COOKIES</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php if (sizeof($_COOKIE)>0){?>
                            <tr>
                                <th>#</th>
                                <th>KEY</th>
                                <th>ITEM</th>
                            </tr>
                            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_COOKIE; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['cookies']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['cookies']['iteration']++;
?>
                                <tr>
                                    <td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['cookies']['iteration'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</td>
                                </tr>
                            <?php } ?>
                        <?php }else{ ?>
                            <tr>
                                <td colspan="3">Empty</td>
                            </tr>
                        <?php }?>
                    </tbody>
                </table>
                
                <table class="table table-striped table-bordered" id="globals-env">
                    <thead>
                        <tr>
                            <th style="color: brown;" colspan="3">ENV</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php if (sizeof($_ENV)>0){?>
                            <tr>
                                <th>#</th>
                                <th>KEY</th>
                                <th>ITEM</th>
                            </tr>
                            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_ENV; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['env']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['env']['iteration']++;
?>
                                <tr>
                                    <td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['env']['iteration'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</td>
                                </tr>
                            <?php } ?>
                        <?php }else{ ?>
                            <tr>
                                <td colspan="3">Empty</td>
                            </tr>
                        <?php }?>
                    </tbody>
                </table>
                
                <table class="table table-striped table-bordered" id="globals-server">
                    <thead>
                        <tr>
                            <th style="color: red;" colspan="3">SERVER</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php if (sizeof($_SERVER)>0){?>
                            <tr>
                                <th>KEY</th>
                                <th>ITEM</th>
                            </tr>
                            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_SERVER; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['server']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['server']['iteration']++;
?>
                                <tr>
                                    <td><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['server']['iteration'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</td>
                                </tr>
                            <?php } ?>
                        <?php }else{ ?>
                            <tr>
                                <td colspan="3">Empty</td>
                            </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div><?php }} ?>