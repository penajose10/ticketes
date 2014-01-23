{extends file="base.tpl"}

{block name="content"}
  <div class="jumbotron">
      <div class="container">
        <h1>Agregar Una Nueva Empresa Envio</h1>
        <p>&nbsp;</p>
      </div>
    </div>
    <div class="container">
	<div class="row clearfix">
		<div class="col-md-4 column">
			<form role="form" action="InsertarEmpresa_Envio.php" method="post">
				<div class="form-group">Nombre Empresa
				  <input type="text" name="ne" class="form-control" id="ne" />
				</div>
				<div class="form-group"></div>
                <div class="form-group"></div>
                <div class="form-group"></div>
                
				<img src="C:\Users\Usuario\Desktop\descarga" alt="C:\Users\Usuario\Desktop\descarga" width="52" class="img-circle">
				<div class="checkbox">
					 
				</div> <button type="submit" class="btn btn-default">Agregar</button>
			</form>
		</div>
	</div>
</div>

{/block}



