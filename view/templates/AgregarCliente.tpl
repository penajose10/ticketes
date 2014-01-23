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
			<form role="form" action="InsertarCliente.php" method="post">
            
            <div class="form-group">
					 <label align="center" for="">Rif</label><input type="text" name="rif" class="form-control" id="rif" />
				</div>
                
				<div class="form-group">
					 <label align="center" for="">Nombre Fiscal</label><input type="text" name="nf" class="form-control" id="nf" />
				</div>
				<div class="form-group">
					 <label for="">Denominacion Fiscal</label><input type="text" class="form-control" name="df" id="df" />
				</div>
                
                <div class="form-group">
                <div>
                <label for="">Fecha Creacion</label><input type="date" class="form-control" name="fc" id="fc" />
				</div>
                
                <div class="form-group">
                <div>
                <label for="">Calle</label><input type="text" class="form-control" name="calle" id="calle" />
				</div>
                
                <div class="form-group">
					 <label for="">Edificio</label><input type="text" class="form-control" name="ed" id="ed" />
				</div>
                <div class="form-group">
					 <label for="">Urbanizaciion</label><input type="text" class="form-control" name= "urb" id="urb" />
				</div>
                
                <div class="form-group">
					<label for="form-control">Tipo Cliente</label>
					<select class="form-control" name="tipo">
  					<option value="PRODUCTORA">PRODUCTORA</option>
  					<option value="CORPORATIVO">CORPORATIVO</option>
                    </select>
					</div>
                    
                    <div class="form-group">
					 <label for="">Correo Electronico</label><input type="text" class="form-control" name="correo" id="correo" />
				</div>
                
                <div class="form-group">
					 <label for="">Clave</label><input type="password" class="form-control" name="clave" id="clave" />
				</div>
                
                
                <div>
                
                {include file="ComboPaises.tpl"}

				</div>
                <div class="form-group">
					 <label for="">Puntos Acumulados</label><input type="text" class="form-control" name="ptos" id="ptos" />
				</div>
				
				<div class="checkbox">
					 
				</div> <button type="submit" class="btn btn-default">Agregar</button>
			</form>
		</div>
	</div>
</div>

{/block}



