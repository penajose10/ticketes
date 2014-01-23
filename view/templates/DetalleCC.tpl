
  <div class="jumbotron">
      <div class="container">
        <h1>Editar Centro Comercial</h1>
        <p>aqui para ingresar</p>
        <p><a class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>
      </div>
    </div>
    <div class="container">
	<div class="row clearfix">
		<div class="col-md-4 column">
			<form role="form" action="ActualizarCC.php" method="post">
            {foreach from=$ccD item=cc}
				<div class="form-group">
					 <label align="center" for="">Nombre Centro Comercial</label><input type="text" name="nr" class="form-control" id="nr" value="{$cc.CC_NOMBRE}"/>
				</div>
				
                <div>
                
                {include file="ComboPaises.tpl"}

				</div>
				
                <input type="hidden" class="form-control" name= "codigo" id="codigo"  value="{$cc.CC_CODIGO}" />
				<div class="checkbox">
					 
				</div> <button type="submit" class="btn btn-default">Actualizar</button>
                
                {/foreach}
			</form>
		</div>
	</div>
</div>





