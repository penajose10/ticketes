<?php /* Smarty version Smarty-3.1.14, created on 2014-01-23 06:08:08
         compiled from "view\templates\DetalleProveedor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:187952e046bc918b86-16331747%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e81efffc5fb050251c5ce174252f64de57c837d9' => 
    array (
      0 => 'view\\templates\\DetalleProveedor.tpl',
      1 => 1390446399,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '187952e046bc918b86-16331747',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52e046bca3be79_22539187',
  'variables' => 
  array (
    'provD' => 0,
    'Proveedor' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e046bca3be79_22539187')) {function content_52e046bca3be79_22539187($_smarty_tpl) {?>
  <div class="jumbotron">
      <div class="container">
        <h1>Editar Proveedor</h1>
        <p>aqui para ingresar</p>
        <p><a class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>
      </div>
    </div>
    <div class="container">
	<div class="row clearfix">
		<div class="col-md-4 column">
			<form role="form" action="ActualizarProveedor.php" method="post">
            <?php  $_smarty_tpl->tpl_vars['prov'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['prov']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['provD']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['prov']->key => $_smarty_tpl->tpl_vars['prov']->value){
$_smarty_tpl->tpl_vars['prov']->_loop = true;
?>
            
            <div class="form-group">
					 <label align="center" for="">Rif Proveedor</label><input type="text" name="rif" class="form-control" id="rif" value="<?php echo $_smarty_tpl->tpl_vars['Proveedor']->value['PROV_RIF'];?>
"/>
				</div>
				<div class="form-group">
					 <label align="center" for="">Nombre Proveedor</label><input type="text" name="np" class="form-control" id="np" value="<?php echo $_smarty_tpl->tpl_vars['Proveedor']->value['PROV_NOMBRE'];?>
"/>
				</div>
				<div class="form-group">
					 <label for="">Calle</label><input type="text" class="form-control" name="c" id="c"  value="<?php echo $_smarty_tpl->tpl_vars['Proveedor']->value['PROV_CALLE'];?>
"/>
				</div>
                <div class="form-group">
					 <label for="">Urbanizaciion</label><input type="text" class="form-control" name= "urb" id="urb"  value="<?php echo $_smarty_tpl->tpl_vars['Proveedor']->value['PROV_URBANIZACION'];?>
" />
				</div>
                 <div class="form-group">
					 <label for="">Edificio</label><input type="text" class="form-control" name="ed" id="ed"  value="<?php if (isset($_smarty_tpl->tpl_vars['Proveedor']->value['PROV_EDIFICIO'])){?> <?php echo $_smarty_tpl->tpl_vars['Proveedor']->value['PROV_EDIFICIO'];?>
 <?php }?>" />
				</div>
                
                <div class="form-group">
					 <label for="">Persona Contacto</label><input type="text" class="form-control" name="pc" id="pc"  value="<?php echo $_smarty_tpl->tpl_vars['Proveedor']->value['PROV_CONTACTO'];?>
"/>
				</div>
                
                <div class="form-group">
					 <label for="">Telefono</label><input type="text" class="form-control" name="tel" id="tel"  value="<?php echo $_smarty_tpl->tpl_vars['Proveedor']->value['PROV_Telefono'];?>
"/>
				</div>
                <div>
                
                <?php echo $_smarty_tpl->getSubTemplate ("ComboPaises.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


				</div>
				
                <input type="hidden" class="form-control" name= "codigo" id="codigo"  value="<?php echo $_smarty_tpl->tpl_vars['Proveedor']->value['PROV_CODIGO'];?>
" />
				<div class="checkbox">
					 
				</div> <button type="submit" class="btn btn-default">Actualizar</button>
                
                <?php } ?>
			</form>
		</div>
	</div>
</div>





<?php }} ?>