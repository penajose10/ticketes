{extends file="base.tpl"}

{block name="content"}
  <div class="jumbotron">
      <div class="container">
        <h1>Compra</h1>
        <p>(Dispone solo de 5 minutos para realizar su compra)</p>
      </div>
    </div>
    <div class="container">
	<div class="row clearfix">
		<div class="col-md-4 column">
			<form role="form" action="InsertarEmpresa_Envio.php" method="post">
				<div class="form-group">
				  
                  
                  <p>Donacion</p>
				  <form role="form">
        <label class="checkbox-inline">
          <input type="checkbox" id="inlineCheckbox1" value="option1"> Si
        </label>
        <label class="checkbox-inline">
          <input type="checkbox" id="inlineCheckbox2" value="option2"> No
        </label>
        
      </form>
	        </div>
				
                
                <p>Ticket Protegido</p>
				  <form role="form">
        <label class="checkbox-inline">
          <input type="checkbox" id="inlineCheckbox1" value="option1"> Si
        </label>
        <label class="checkbox-inline">
          <input type="checkbox" id="inlineCheckbox2" value="option2"> No
        </label>
        
      </form>
	        </div>
            
            
            <p>Envio de Ticket</p>
				  <form role="form">
        <label class="checkbox-inline">
          <input type="checkbox" id="inlineCheckbox1" value="option1"> Si
        </label>
        <label class="checkbox-inline">
          <input type="checkbox" id="inlineCheckbox2" value="option2"> No
        </label>
        
      </form>
	        </div>
            <p>Cantidad Entradas (maximo 5)</p>
            <select class="form-control">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
        
        
            
                <div class="checkbox">
                  
                </div> <button type="submit" class="btn btn-default">Comprar</button>
			</form>
		</div>
	</div>
</div>

{/block}


