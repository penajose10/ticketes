	{extends file="base.tpl"}

	{block name="content"}
	  
	<br/>
	<br/>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<h1>Agregar Empleado</h1>
			<form role="form"   action="insertar_empleado_recibe.php" method="POST">
				<div class="form-group">
					 <label for="form-control">Cedula de Identidad</label><input type="text" class="form-control" id="ci" name="ci" /> </div>


					<div class="form-group">
					 <label for="form-control">Nombre</label><input type="text" class="form-control" id="nombre" name="nombre" /> </div>


					 <div class="form-group">
					 <label for="form-control">Apellido</label><input type="text" class="form-control" id="apellido" name="apellido"/> </div>



					 <div class="form-group">
					 <label for="form-control">Calle</label><input type="text" class="form-control" id="calle" name="calle" /> </div>



					 <div class="form-group">
					 <label for="form-control">Urbanizacion</label><input type="text" class="form-control" id="urb" name="urb" /> </div>



					 <div class="form-group">
					 <label for="form-control">Edificion</label><input type="text" class="form-control" id="edf" name="edf" /> </div>

                    
					<label for="form-control">Sexo</label>
					<select class="form-control" name="sexo">
  					<option value="M">M</option>
  					<option value="F">F</option>
 				 	
 				 	</select>


 				 	
					  <div class="form-group">
					 <label for="form-control">Fecha De Nacimiento</label><input type="date" class="form-control" id="fecha_nac" name="fecha_nac"/> </div>	



					 	  <div class="form-group">
					 <label for="form-control">Fecha De Trabajo</label><input type="date" class="form-control" id="fecha_trabajo"  name="fecha_trabajo"/> </div>



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
					 <label for="form-control">Nivel De Estudio</label><input type="text" class="form-control" id="nivel_est" name="nivel_est" /> </div>



 				 	 {include file="ComboPaises.tpl"}
 				 	 {include file="ComboEmpleado.tpl"}


 				 	 	<div class="form-group">
					 <label for="form-control">Nickname</label><input type="text" class="form-control" id="nickname" name="nickname" /> </div>



					 <div class="form-group">
					 <label for="form-control">Correo Electronico</label><input type="text" class="form-control" id="correo" name="correo" /> </div>


					 <div class="form-group">
					 <label for="form-control">Clave</label><input type="password" class="form-control" id="clave" name="clave" /> </div>


 				 	 <br>

 				 	 		<button type="submit" class="btn btn-default">Agregar</button>
			</form>
		</div>
	</div>




			
</div>
	    
	{/block}
