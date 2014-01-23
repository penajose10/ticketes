{extends file="base.tpl"}

{block name="content"}
  <div class="jumbotron">
      <div class="container">
        <h1>Agregar Una Nueva Temporada</h1>
<p>&nbsp;</p>
      </div>
    </div>
    <div class="container">
	<div class="row clearfix">
		<div class="col-md-4 column">
			<form role="form" action="InsertarTemporada.php" method="post">
				<div class="form-group">
					 <label align="center" for="exampleInputEmail1">Nombre Temporada</label><input type="text" name="nt" class="form-control" id="nt" />
				</div>
				<div class="form-group"></div>
                <div class="form-group"></div>
                <div class="form-group"></div>
               
			  <div class="checkbox">
					 
				</div> <button type="submit" class="btn btn-default">Agregar</button>
			</form>
		</div>
	</div>
</div>

{/block}



