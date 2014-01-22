{extends file="base.tpl"}

{block name="content"}
  <div class="jumbotron">
      <div class="container">
        <h1>Agregar Un Nuevo Proveedor</h1>
        <p>aqui para ingresar</p>
        <p><a class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>
      </div>
    </div>
    <div class="container">
	<div class="row clearfix">
		<div class="col-md-4 column">
			<form role="form" action="InsertarProveedor.php" method="post">
				<div class="form-group">
					 <label for="">Rif</label><input type="text" class="form-control" name="rif" id="rif" />
				</div>
                
                <div class="form-group">
					 <label for="">Nombre Proveedor</label><input type="text" class="form-control" name="np" id="np" />
				</div>


				<div class="form-group">
					 <label for="">Calle</label><input type="text" class="form-control" name="c" id="c" />
				</div>
                <div class="form-group">
					 <label for="">Edificio</label><input type="text" class="form-control" name="ed" id="ed" />
				</div>
                <div class="form-group">
					 <label for="">Urbanizaciion</label><input type="text" class="form-control" name= "urb" id="urb" />
				</div>
                
                <div class="form-group">
					 <label for="">Contacto</label><input type="text" class="form-control" name="contacto" id="contacto" />
				</div>
                
                <div class="form-group">
					 <label for="">Telefono</label><input type="text" class="form-control" name="tel" id="tel" />
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



