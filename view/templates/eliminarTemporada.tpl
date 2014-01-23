{extends file="base.tpl"}

{block name="content"}
  <div class="jumbotron">
      <div class="container">
        <h1>Eliminar Una Temporada</h1>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
      </div>
    </div>
    <div class="container">
	<div class="row clearfix">
		<div class="col-md-4 column">
		  <form role="form" action="eliminarTemporada.php" method="post">
		  <p>Temporada</p>               
                <select class="form-control">
          <option>Boletos</option>
          <option>Comida</option>
              </select>
				<div class="checkbox">
					 
				</div> <button type="submit" class="btn btn-default">Eliminar</button>
		  </form>
	  </div>
	</div>
</div>

{/block}



