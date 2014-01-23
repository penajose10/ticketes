{extends file="base.tpl"}

{block name="content"}
  <div class="jumbotron">
      <div class="container">
        <h1>Agregar Un Horario</h1>
<p>&nbsp;</p>
      </div>
    </div>
    <div class="container">
	<div class="row clearfix">
		<div class="col-md-4 column">
			<form role="form" action="Insertarhorario.php" method="post">
				<div class="form-group">
				  <p>Dia</p>
				  <p> <input type="date" name="d" class="form-control" id="d" />
			      </p>
                  
                  
            </div>
				 <p>Hora</p>
				  <p> <input type="text" name="h" class="form-control" id="h" />
			      </p>
                 
                
			  <div class="checkbox">
					 
				</div> <button type="submit" class="btn btn-default">Agregar</button>
			</form>
		</div>
	</div>
</div>

{/block}



