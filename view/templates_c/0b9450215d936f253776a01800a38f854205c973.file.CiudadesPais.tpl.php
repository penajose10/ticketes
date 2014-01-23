<?php /* Smarty version Smarty-3.1.14, created on 2014-01-23 04:52:05
         compiled from "view\templates\CiudadesPais.tpl" */ ?>
<?php /*%%SmartyHeaderCode:646052dc2a8bce69a7-78298889%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b9450215d936f253776a01800a38f854205c973' => 
    array (
      0 => 'view\\templates\\CiudadesPais.tpl',
      1 => 1390447382,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '646052dc2a8bce69a7-78298889',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52dc2a8bd52b69_90727624',
  'variables' => 
  array (
    'ciudad' => 0,
    'Lugar' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dc2a8bd52b69_90727624')) {function content_52dc2a8bd52b69_90727624($_smarty_tpl) {?> 
 <label for="">Seleccione Ciudad</label>
 <select class="form-control" name="ciudad">
  							<?php  $_smarty_tpl->tpl_vars['Lugar'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Lugar']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ciudad']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Lugar']->key => $_smarty_tpl->tpl_vars['Lugar']->value){
$_smarty_tpl->tpl_vars['Lugar']->_loop = true;
?>  
                            
                            
         <option value="<?php echo $_smarty_tpl->tpl_vars['Lugar']->value['L_CODIGO'];?>
"> <?php echo $_smarty_tpl->tpl_vars['Lugar']->value['L_NOMBRE'];?>
</option> 
     <?php } ?>
				</select><?php }} ?>