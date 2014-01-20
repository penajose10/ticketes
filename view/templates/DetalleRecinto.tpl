
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
            {foreach from=$recintoD item=Recinto}
				<div class="form-group">
					 <label align="center" for="exampleInputEmail1">Nombre Recinto</label><input type="text" name="nr" class="form-control" id="nr" value="{$Recinto.REC_NOMBRE}"/>
				</div>
				<div class="form-group">
					 <label for="">Calle</label><input type="text" class="form-control" name="c" id="c"  value="{$Recinto.REC_CALLE}"/>
				</div>
                <div class="form-group">
					 <label for="">Edificio</label><input type="text" class="form-control" name="ed" id="ed"  value="{if isset($Recinto.REC_EDIFICIO)} {$Recinto.REC_EDIFICIO} {/if}" />
				</div>
                <div class="form-group">
					 <label for="">Urbanizaciion</label><input type="text" class="form-control" name= "urb" id="urb"  value="{$Recinto.REC_URBANIZACION}" />
				</div>
                <div>
                
                {include file="ComboPaises.tpl"}

				</div>
				
                <input type="hidden" class="form-control" name= "codigo" id="codigo"  value="{$Recinto.REC_CODIGO}" />
				<div class="checkbox">
					 
				</div> <button type="submit" class="btn btn-default">Actualizar</button>
                
                {/foreach}
			</form>
		</div>
	</div>
</div>





