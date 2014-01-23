
  <div class="jumbotron">
      <div class="container">
        <h1>Editar Cliente</h1>
        <p>aqui para ingresar</p>
        <p><a class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>
      </div>
    </div>
    <div class="container">
	<div class="row clearfix">
		<div class="col-md-4 column">
			<form role="form" action="ActualizarCliente.php" method="post">
            {foreach from=$clienteD item=Cliente}
				<div class="form-group">
					 <label align="center" for="">Rif</label><input type="text" name="rif" class="form-control" id="rif" value="{$Cliente.CLI_RIF}"/>
				</div>
                
                <div class="form-group">
					 <label align="center" for="">Nombre Fiscal</label><input type="text" name="nf" class="form-control" id="nf" value="{$Cliente.CLI_NOMBRE_FISCAL}"/>
				</div>
                <div class="form-group">
					 <label align="center" for="">Denominacion Fiscal</label><input type="text" name="df" class="form-control" id="df" value="{$Cliente.CLI_DENOMINACION_FISCAL}"/>
				</div>
                <div class="form-group">
					 <label align="center" for="">Fecha Creacion</label><input type="date" name="fc" class="form-control" id="fc" value="{$Cliente.CLI_FECHA_CREACION}"/>
				</div>
                
                <div class="form-group">
					<label for="form-control">Tipo Cliente</label>
					<select class="form-control" name="tipo" value="{$Cliente.CLI_TIPO_CLI}"/>
  					<option value="PRODUCTORA">PRODUCTORA</option>
  					<option value="CORPORATIVO">CORPORATIVO</option>
                    </select>
					</div>
                
				<div class="form-group">
					 <label for="">Calle</label><input type="text" class="form-control" name="c" id="c"  value="{$Cliente.CLI_CALLE}"/>
				</div>
                <div class="form-group">
					 <label for="">Edificio</label><input type="text" class="form-control" name="ed" id="ed"  value="{$Cliente.CLI_EDIFICIO} }" />
				</div>
                <div class="form-group">
					 <label for="">Urbanizaciion</label><input type="text" class="form-control" name= "urb" id="urb"  value="{$Cliente.CLI_URBANIZACION}" />
				</div>
                <div>
                
                <div class="form-group">
					 <label for="">Correo</label><input type="text" class="form-control" name="correo" id="correo"  value="{$Cliente.CLI_Correo} }" />
				</div>
                <div class="form-group">
					 <label for="">Clave</label><input type="password" class="form-control" name= "urb" id="urb"  value="{$Cliente.CLI_Clave}" />
				</div>
                <div>
                
                {include file="ComboPaises.tpl"}

				</div>
				
                <input type="hidden" class="form-control" name= "codigo" id="codigo"  value="{$Cliente.CLI_CODIGO}" />
				<div class="checkbox">
					 
				</div> <button type="submit" class="btn btn-default">Actualizar</button>
                
                {/foreach}
			</form>
		</div>
	</div>
</div>





