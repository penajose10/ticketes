	{extends file="base.tpl"}

	{block name="content"}
	  
	<br/>
	<br/>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
        <form role="form" action="Insert.php" method="post">
			<h1>Agregar Empleado</h1>
			<form role="form">
				<div class="form-group">
					 <label for="ci">Cedula de Identidad</label><input type="text" class="form-control" id="ci" /> </div>


					<div class="form-group">
					 <label for="nombre">Nombre</label><input type="text" class="form-control" id="nombre" /> </div>


					 <div class="form-group">
					 <label for="apellido">Apellido</label><input type="text" class="form-control" id="apellido" /> </div>



					 <div class="form-group">
					 <label for="calle">Calle</label><input type="text" class="form-control" id="calle" /> </div>



					 <div class="form-group">
					 <label for="urb">Urbanizacion</label><input type="text" class="form-control" id="urb" /> </div>



					 <div class="form-group">
					 <label for="edf">Edificion</label><input type="text" class="form-control" id="edf" /> </div>

                    
					<label for="form-control">Sexo</label>
					<select class="form-control">
  					<option>M</option>
  					<option>F</option>
 				 	
 				 	</select>


 				 	
					  <div class="form-group">
					 <label for="fecha_nac">Fecha De Nacimiento</label><input type="date" class="form-control" id="fecha_nac" /> </div>	



					 	  <div class="form-group">
					 <label for="fecha_trabajo">Fecha De Trabajo</label><input type="date" class="form-control" id="fecha_trabajo" /> </div>



					 	<label for="form-control">Tipo de Empleado</label>
					<select class="form-control">
  					<option>CALL CENTER</option>
  					<option>OFICINA</option>
  					<option>STAND</option>
 				 	
 				 	</select>
                    

		  </form>
            <button type="button" class="btn btn-primary btn-lg">Agregar</button>
		</div>
	</div>




			
</div>
	    
	{/block}
