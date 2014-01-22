
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
            {foreach from=$empleadoD item=empleado}


            	<div class="form-group">
					 	<label align="center" for="exampleInputEmail1">Cedula de Identidad</label><input type="text" name="ci" class="form-control" id="ci" value="{if isset($empleado.EMP_CI)} {$empleado.EMP_CI} {/if}"/>
						</div>

				<div class="form-group">
					 <label align="center" for="exampleInputEmail1">Nombre Empleado</label><input type="text" name="nombre" class="form-control" id="nombre" value="{$empleado.EMP_NOMBRE}"/>
				</div>


				<div class="form-group">
						<label for="">Apellido</label><input type="text" class="form-control" name="apellido" id="apellido"  value="{$empleado.EMP_APELLIDO}" />
						</div>


				<div class="form-group">
					 <label for="">Calle</label><input type="text" class="form-control" name="calle" id="calle"  value="{$empleado.EMP_CALLE}"/>
				</div>


				 <div class="form-group">
					 <label for="">Urbanizaciion</label><input type="text" class="form-control" name= "urb" id="urb"  value="{$empleado.EMP_URB}" />
				</div>	


                <div class="form-group">
					 <label for="">Edificio</label><input type="text" class="form-control" name="edf" id="edf"  value="{$empleado.EMP_EDIFICIO}" />
				</div>
               


					<label for="form-control">Sexo</label>
						<select class="form-control" name="sexo">
  						<option value="M">M</option>
  						<option value="F">F</option>
 				 		</select>


 						<div class="form-group">
					 	<label for="">Fecha de Nacimiento</label><input type="date" class="form-control" name="fechanac" id="fechanac"  value="{$empleado.EMP_FECHA_NACIMIENTO}" />
						</div>
               

               			<div class="form-group">
					 	<label for="">Fecha de Trabajo</label><input type="date" class="form-control" name="fechatra" id="fechatra"  value="{$empleado.EMP_FECHA_TRABAJO}" />
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
					 <label for="">Nivel de Estudio</label><input type="text" class="form-control" name="nivel_est" id="nivel_est"  value="{$empleado.EMP_NIVEL_ESTUDIO}" />
				</div>


                <div>
                
               {include file="ComboPaises.tpl"}

				</div>
				

							<div class="form-group">
					 	<label align="center" for="exampleInputEmail1">Nickname</label><input type="text" name="nickname" class="form-control" id="nickname" value="{$empleado.EMP_NICKNAME}"/>
						</div>



					 	<div class="form-group">
					 	<label align="center" for="exampleInputEmail1">Correo</label><input type="mail" name="correo" class="form-control" id="correo" value="{$empleado.EMP_CORREO}"/>
						</div>

					 	<div class="form-group">
					 	<label align="center" for="exampleInputEmail1">Clave</label><input type="password" name="clave" class="form-control" id="clave" value="{$empleado.EMP_CLAVE}"/>
						</div>




                <input type="hidden" class="form-control" name= "codigo" id="codigo"  value="{$empleado.EMP_ID}" />
				<div class="checkbox">
					 
				</div> <button type="submit" class="btn btn-default">Actualizar</button>
                
                {/foreach}
			</form>
		</div>
	</div>
</div>





