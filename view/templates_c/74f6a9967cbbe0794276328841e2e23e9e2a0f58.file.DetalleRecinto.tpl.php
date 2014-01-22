<?php /* Smarty version Smarty-3.1.14, created on 2014-01-22 04:05:56
         compiled from "view\templates\DetalleRecinto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:254652dc46f418f893-08595608%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74f6a9967cbbe0794276328841e2e23e9e2a0f58' => 
    array (
      0 => 'view\\templates\\DetalleRecinto.tpl',
      1 => 1390356548,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '254652dc46f418f893-08595608',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52dc46f42e5a11_95032921',
  'variables' => 
  array (
    'recintoD' => 0,
    'Recinto' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dc46f42e5a11_95032921')) {function content_52dc46f42e5a11_95032921($_smarty_tpl) {?>
  <div class="jumbotron">
      <div class="container">
        <h1>Editar Recinto</h1>
        <p>aqui para ingresar</p>
        <p><a class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>
      </div>
    </div>
    <div class="container">
	<div class="row clearfix">
		<div class="col-md-4 column">
			<form role="form" action="ActualizarRecinto.php" method="post">
            <?php  $_smarty_tpl->tpl_vars['Recinto'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Recinto']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recintoD']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Recinto']->key => $_smarty_tpl->tpl_vars['Recinto']->value){
$_smarty_tpl->tpl_vars['Recinto']->_loop = true;
?>
				<div class="form-group">
					 <label align="center" for="exampleInputEmail1">Nombre Recinto</label><input type="text" name="nr" class="form-control" id="nr" value="<?php echo $_smarty_tpl->tpl_vars['Recinto']->value['REC_NOMBRE'];?>
"/>
				</div>
				<div class="form-group">
					 <label for="">Calle</label><input type="text" class="form-control" name="c" id="c"  value="<?php echo $_smarty_tpl->tpl_vars['Recinto']->value['REC_CALLE'];?>
"/>
				</div>
                <div class="form-group">
					 <label for="">Edificio</label><input type="text" class="form-control" name="ed" id="ed"  value="<?php if (isset($_smarty_tpl->tpl_vars['Recinto']->value['REC_EDIFICIO'])){?> <?php echo $_smarty_tpl->tpl_vars['Recinto']->value['REC_EDIFICIO'];?>
 <?php }?>" />
				</div>
                <div class="form-group">
					 <label for="">Urbanizaciion</label><input type="text" class="form-control" name= "urb" id="urb"  value="<?php echo $_smarty_tpl->tpl_vars['Recinto']->value['REC_URBANIZACION'];?>
" />
				</div>
                <div>
                
                <?php echo $_smarty_tpl->getSubTemplate ("ComboPaises.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


				</div>
				
                <input type="hidden" class="form-control" name= "codigo" id="codigo"  value="<?php echo $_smarty_tpl->tpl_vars['Recinto']->value['REC_CODIGO'];?>
" />
				<div class="checkbox">
					 
				</div> <button type="submit" class="btn btn-default">Actualizar</button>
                
                <?php } ?>
			</form>
		</div>
	</div>
</div>





<?php }} ?>