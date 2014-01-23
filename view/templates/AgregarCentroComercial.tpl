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
			<form role="form" action="InsertarCentroComercial.php" method="post">
				<div class="form-group">
					 <label align="center" for="">Nombre Centro Comercial</label><input type="text" name="ncc" class="form-control" id="ncc" />
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



