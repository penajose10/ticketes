<?php /* Smarty version Smarty-3.1.14, created on 2014-01-22 22:48:26
         compiled from "view\templates\DetalleCC.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2558252e03caabc8e18-36716073%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2a4a3d1dcdedae7dedd81df1f656016770fa382' => 
    array (
      0 => 'view\\templates\\DetalleCC.tpl',
      1 => 1390427016,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2558252e03caabc8e18-36716073',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ccD' => 0,
    'cc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52e03caac2bed6_40297226',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e03caac2bed6_40297226')) {function content_52e03caac2bed6_40297226($_smarty_tpl) {?>
  <div class="jumbotron">
      <div class="container">
        <h1>Editar Centro Comercial</h1>
        <p>aqui para ingresar</p>
        <p><a class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>
      </div>
    </div>
    <div class="container">
	<div class="row clearfix">
		<div class="col-md-4 column">
			<form role="form" action="ActualizarCC.php" method="post">
            <?php  $_smarty_tpl->tpl_vars['cc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cc']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ccD']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cc']->key => $_smarty_tpl->tpl_vars['cc']->value){
$_smarty_tpl->tpl_vars['cc']->_loop = true;
?>
				<div class="form-group">
					 <label align="center" for="">Nombre Centro Comercial</label><input type="text" name="nr" class="form-control" id="nr" value="<?php echo $_smarty_tpl->tpl_vars['cc']->value['CC_NOMBRE'];?>
"/>
				</div>
				
                <div>
                
                <?php echo $_smarty_tpl->getSubTemplate ("ComboPaises.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


				</div>
				
                <input type="hidden" class="form-control" name= "codigo" id="codigo"  value="<?php echo $_smarty_tpl->tpl_vars['cc']->value['CC_CODIGO'];?>
" />
				<div class="checkbox">
					 
				</div> <button type="submit" class="btn btn-default">Actualizar</button>
                
                <?php } ?>
			</form>
		</div>
	</div>
</div>





<?php }} ?>