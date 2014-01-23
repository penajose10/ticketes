	{extends file="base.tpl"}

	{block name="content"}
	  
	<br/>
	<br/>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<h1>Agregar Evento</h1>
			<form role="form"   action="InsertarEvento.php" method="POST">
				<div class="form-group">
					 <label for="ci">Nombre Evento</label><input type="text" class="form-control" id="ne" name="ne" /> </div>

				<div class="form-group">
					<label for="form-control">Censura</label>
					<select class="form-control" name="cen">
  					<option value="A">A</option>
  					<option value="B">B</option>
                    <option value="B-15">B-15</option>
  					<option value="C">C</option>
 				 	
 				 	</select>
					</div>
                    
                    <div class="form-group">
					<label for="form-control">Categoria</label>
					<select class="form-control" name="cat">
  					<option value="TEATRO">TEATRO</option>
  					<option value="MUSICA">MUSICA</option>
                    <option value="ESPECIAL">ESPECIAL</option>
  					<option value="DEPORTE">DEPORTE</option>
 				 	
 				 	</select>
					</div>

						 <div class="form-group">
					<label for="form-control">Genero</label>
					<select class="form-control" name="g">
  					<option value="1">1</option>
  					<option value="2">2</option>
                    <option value="3">3</option>
  					<option value="4">4</option>
 				 	
 				 	</select>
					</div>

						<div class="form-group">
					<label for="">Descripcion</label> <textarea class="form-control" rows="3" name="desc"></textarea></div>



					 

					 	  

 				 	 {include file="ComboPaises.tpl"}


 				 	 <br>

 				 	 		<button type="submit" class="btn btn-default">Agregar</button>
			</form>
		</div>
	</div>




			
</div>
	    
	{/block}
