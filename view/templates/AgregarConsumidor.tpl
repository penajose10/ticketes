{extends file="base.tpl"}

{block name="content"}
  <div class="jumbotron">
      <div class="container">
        <h1>Nuevo Cliente</h1>
        <p>aqui para ingresar</p>
        <p><a class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>
      </div>
    </div>
    <div class="container">
	<div class="row clearfix">
		<div class="col-md-4 column">
			<form role="form" action="Insertarconsumidor.php" method="post">
				<div class="form-group">
					 <label align="center" for="">Nombre</label><input type="text" name="nom" class="form-control" id="nom" />
				</div>
				<div class="form-group">
					 <label for="">Apellido</label><input type="text" class="form-control" name="ap" id="ap" />
				</div>
                
                <div class="form-group">
					<label for="form-control">Genero</label>
					<select class="form-control" name="g">
  					<option value="F">F</option>
  					<option value="M">M</option>
                    </select>
					</div>
                    
                    <div class="form-group">
					 <label align="center" for="">Telefono Oficina</label><input type="text" name="telo" class="form-control" id="telp" />
				</div>
				<div class="form-group">
					 <label for="">Telefono Casa</label><input type="text" class="form-control" name="telc" id="telc" />
				</div>
                
                <div class="form-group">
					 <label for="">Telefono Celular</label><input type="text" class="form-control" name="telcel" id="telcel" />
				</div>
               
                <div class="form-group">
					 <label for="">Correo Electronico</label><input type="text" class="form-control" name="correo" id="correo" />
				</div>
                
                <label for="">Fecha Nacimiento</label><input type="date" class="form-control" name="fn" id="fn" />
				</div>
                
                <div class="form-group">
					 <label for="">Edificio</label><input type="text" class="form-control" name="ed" id="ed" />
				</div>
                <div class="form-group">
					 <label for="">Urbanizaciion</label><input type="text" class="form-control" name= "urb" id="urb" />
				</div>
                <div>
                
                {include file="ComboPaises.tpl"}

				</div>
				
				<div class="checkbox">
					 
				</div> <button type="submit" class="btn btn-default">Agregar</button>
			</form>
		</div>
	</div>
</div>

{/block}



