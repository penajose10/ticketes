{extends file="base.tpl"}

{block name="content"}
  <div class="jumbotron">
      <div class="container">
        <h1>Agregar Un Nuevo Recinto</h1>
        <p>aqui para ingresar</p>
        <p><a class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>
      </div>
    </div>
    <div class="container">
	<div class="row clearfix">
		<div class="col-md-4 column">
			<form role="form" action="InsertarRecinto.php" method="post">
				<div class="form-group">
					 <label align="center" for="exampleInputEmail1">Nombre Recinto</label><input type="text" name="nr" class="form-control" id="nr" />
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



