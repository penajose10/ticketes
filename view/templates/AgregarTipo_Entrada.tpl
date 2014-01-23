{extends file="base.tpl"}

{block name="content"}
  <div class="jumbotron">
      <div class="container">
        <h1>Agregar Un Nuevo Tipo Entrada       </h1>
        <p>&nbsp;</p>
      </div>
    </div>
    <div class="container">
	<div class="row clearfix">
		<div class="col-md-4 column">
			<form role="form" action="InsertarTipo_Entrada.php" method="post">
				<div class="form-group">Tipo Entrada 
				  <input type="text" name="te" class="form-control" id="te" />
				</div>
				<div class="form-group">
					 <label for="">Costo Entrada</label>
					 <input type="text" class="form-control" name="ce" id="ce" />
				</div>
                <div class="form-group"></div>
                <div class="form-group"></div>
                
				
				<div class="checkbox">
					 
				</div> <button type="submit" class="btn btn-default">Agregar</button>
			</form>
		</div>
	</div>
</div>

{/block}



