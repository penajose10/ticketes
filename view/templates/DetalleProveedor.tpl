
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
            {foreach from=$provD item=prov}
            
            <div class="form-group">
					 <label align="center" for="">Rif Proveedor</label><input type="text" name="rif" class="form-control" id="rif" value="{$Proveedor.PROV_RIF}"/>
				</div>
				<div class="form-group">
					 <label align="center" for="">Nombre Proveedor</label><input type="text" name="np" class="form-control" id="np" value="{$Proveedor.PROV_NOMBRE}"/>
				</div>
				<div class="form-group">
					 <label for="">Calle</label><input type="text" class="form-control" name="c" id="c"  value="{$Proveedor.PROV_CALLE}"/>
				</div>
                <div class="form-group">
					 <label for="">Urbanizaciion</label><input type="text" class="form-control" name= "urb" id="urb"  value="{$Proveedor.PROV_URBANIZACION}" />
				</div>
                 <div class="form-group">
					 <label for="">Edificio</label><input type="text" class="form-control" name="ed" id="ed"  value="{if isset($Proveedor.PROV_EDIFICIO)} {$Proveedor.PROV_EDIFICIO} {/if}" />
				</div>
                
                <div class="form-group">
					 <label for="">Persona Contacto</label><input type="text" class="form-control" name="pc" id="pc"  value="{$Proveedor.PROV_CONTACTO}"/>
				</div>
                
                <div class="form-group">
					 <label for="">Telefono</label><input type="text" class="form-control" name="tel" id="tel"  value="{$Proveedor.PROV_Telefono}"/>
				</div>
                <div>
                
                {include file="ComboPaises.tpl"}

				</div>
				
                <input type="hidden" class="form-control" name= "codigo" id="codigo"  value="{$Proveedor.PROV_CODIGO}" />
				<div class="checkbox">
					 
				</div> <button type="submit" class="btn btn-default">Actualizar</button>
                
                {/foreach}
			</form>
		</div>
	</div>
</div>





