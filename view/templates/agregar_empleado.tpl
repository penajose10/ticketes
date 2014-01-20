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
					 <label for="ci">Cedula de Identidad</label><input type="text" class="form-control" id="ci" name="ci" /> </div>


					<div class="form-group">
					 <label for="nombre">Nombre</label><input type="text" class="form-control" id="nombre" name="nombre" /> </div>


					 <div class="form-group">
					 <label for="apellido">Apellido</label><input type="text" class="form-control" id="apellido" name="apellido"/> </div>



					 <div class="form-group">
					 <label for="calle">Calle</label><input type="text" class="form-control" id="calle" name="calle" /> </div>



					 <div class="form-group">
					 <label for="urb">Urbanizacion</label><input type="text" class="form-control" id="urb" name="urb" /> </div>



					 <div class="form-group">
					 <label for="edf">Edificion</label><input type="text" class="form-control" id="edf" name="edf" /> </div>

                    
					<label for="form-control">Sexo</label>
					<select class="form-control" name="sexo">
  					<option value="M">M</option>
  					<option value="F">F</option>
 				 	
 				 	</select>


 				 	
					  <div class="form-group">
					 <label for="fecha_nac">Fecha De Nacimiento</label><input type="date" class="form-control" id="fecha_nac" name="fecha_nac"/> </div>	



					 	  <div class="form-group">
					 <label for="fecha_trabajo">Fecha De Trabajo</label><input type="date" class="form-control" id="fecha_trabajo"  name="fecha_trabajo"/> </div>



					 	<label for="form-control">Tipo de Empleado</label>
					<select class="form-control" name="tipo">
  					<option>CALL CENTER</option>
  					<option>OFICINA</option>
  					<option>STAND</option>
 				 	
 				 	</select>

 				 	 {include file="ComboPaises.tpl"}


 				 	 <br>

 				 	 		<button type="submit" class="btn btn-default">Agregar</button>
			</form>
		</div>
	</div>




			
</div>
	    
	{/block}
