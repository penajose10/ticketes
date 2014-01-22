<?php /* Smarty version Smarty-3.1.14, created on 2014-01-22 06:09:26
         compiled from "view\templates\DetalleEmpleado.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2852352df3be56e81e7-54912750%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee41844511cf10310cabb1415627a5842ae0305b' => 
    array (
      0 => 'view\\templates\\DetalleEmpleado.tpl',
      1 => 1390367228,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2852352df3be56e81e7-54912750',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52df3be5754247_43418729',
  'variables' => 
  array (
    'empleadoD' => 0,
    'empleado' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52df3be5754247_43418729')) {function content_52df3be5754247_43418729($_smarty_tpl) {?>
  <div class="jumbotron">
      <div class="container">
        <h1>Editar Empleado</h1>
        <p>aqui para ingresar</p>
        <p><a class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>
      </div>
    </div>
    <div class="container">
	<div class="row clearfix">
		<div class="col-md-4 column">
			<form role="form" action="ActualizarEmpleado.php" method="post">
            <?php  $_smarty_tpl->tpl_vars['empleado'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['empleado']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['empleadoD']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['empleado']->key => $_smarty_tpl->tpl_vars['empleado']->value){
$_smarty_tpl->tpl_vars['empleado']->_loop = true;
?>


            	<div class="form-group">
					 	<label align="center" for="exampleInputEmail1">Cedula de Identidad</label><input type="text" name="ci" class="form-control" id="ci" value="<?php if (isset($_smarty_tpl->tpl_vars['empleado']->value['EMP_CI'])){?> <?php echo $_smarty_tpl->tpl_vars['empleado']->value['EMP_CI'];?>
 <?php }?>"/>
						</div>

				<div class="form-group">
					 <label align="center" for="exampleInputEmail1">Nombre Empleado</label><input type="text" name="nombre" class="form-control" id="nombre" value="<?php echo $_smarty_tpl->tpl_vars['empleado']->value['EMP_NOMBRE'];?>
"/>
				</div>


				<div class="form-group">
						<label for="">Apellido</label><input type="text" class="form-control" name="apellido" id="apellido"  value="<?php echo $_smarty_tpl->tpl_vars['empleado']->value['EMP_APELLIDO'];?>
" />
						</div>


				<div class="form-group">
					 <label for="">Calle</label><input type="text" class="form-control" name="calle" id="calle"  value="<?php echo $_smarty_tpl->tpl_vars['empleado']->value['EMP_CALLE'];?>
"/>
				</div>


				 <div class="form-group">
					 <label for="">Urbanizaciion</label><input type="text" class="form-control" name= "urb" id="urb"  value="<?php echo $_smarty_tpl->tpl_vars['empleado']->value['EMP_URB'];?>
" />
				</div>	


                <div class="form-group">
					 <label for="">Edificio</label><input type="text" class="form-control" name="edf" id="edf"  value="<?php echo $_smarty_tpl->tpl_vars['empleado']->value['EMP_EDIFICIO'];?>
" />
				</div>
               


					<label for="form-control">Sexo</label>
						<select class="form-control" name="sexo">
  						<option value="M">M</option>
  						<option value="F">F</option>
 				 		</select>


 						<div class="form-group">
					 	<label for="">Fecha de Nacimiento</label><input type="date" class="form-control" name="fechanac" id="fechanac"  value="<?php echo $_smarty_tpl->tpl_vars['empleado']->value['EMP_FECHA_NACIMIENTO'];?>
" />
						</div>
               

               			<div class="form-group">
					 	<label for="">Fecha de Trabajo</label><input type="date" class="form-control" name="fechatra" id="fechatra"  value="<?php echo $_smarty_tpl->tpl_vars['empleado']->value['EMP_FECHA_TRABAJO'];?>
" />
						</div>



 				 		<label for="form-control">Jefe?</label>
						<select class="form-control" name="jefe">
  						<option values="SI">SI</option>
  						<option values="NO">NO</option>
  						</select>




					 	<label for="form-control">Tipo de Empleado</label>
						<select class="form-control" name="tipo">
  						<option values="CALL CENTER">CALL CENTER</option>
  						<option values="OFICINA">OFICINA</option>
  						<option values="STAND">STAND</option>
 				 		</select> 


 				 		   <div class="form-group">
					 <label for="">Nivel de Estudio</label><input type="text" class="form-control" name="nivel_est" id="nivel_est"  value="<?php echo $_smarty_tpl->tpl_vars['empleado']->value['EMP_NIVEL_ESTUDIO'];?>
" />
				</div>


                <div>
                
               <?php echo $_smarty_tpl->getSubTemplate ("ComboPaises.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


				</div>
				

							<div class="form-group">
					 	<label align="center" for="exampleInputEmail1">Nickname</label><input type="text" name="nickname" class="form-control" id="nickname" value="<?php echo $_smarty_tpl->tpl_vars['empleado']->value['EMP_NICKNAME'];?>
"/>
						</div>



					 	<div class="form-group">
					 	<label align="center" for="exampleInputEmail1">Correo</label><input type="mail" name="correo" class="form-control" id="correo" value="<?php echo $_smarty_tpl->tpl_vars['empleado']->value['EMP_CORREO'];?>
"/>
						</div>

					 	<div class="form-group">
					 	<label align="center" for="exampleInputEmail1">Clave</label><input type="password" name="clave" class="form-control" id="clave" value="<?php echo $_smarty_tpl->tpl_vars['empleado']->value['EMP_CLAVE'];?>
"/>
						</div>




                <input type="hidden" class="form-control" name= "codigo" id="codigo"  value="<?php echo $_smarty_tpl->tpl_vars['empleado']->value['EMP_ID'];?>
" />
				<div class="checkbox">
					 
				</div> <button type="submit" class="btn btn-default">Actualizar</button>
                
                <?php } ?>
			</form>
		</div>
	</div>
</div>





<?php }} ?>