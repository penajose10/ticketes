{extends file="base.tpl"}

{block name="content"}
  <div class="jumbotron">
      <div class="container">
        <h1>Evento</h1>
        <form role= "form" action="agregar_evento_recibe.php" method="post">
       
       <div class="form-group">
          <label for="exampleInputEmail1">Nombre del Evento</label> 
          <input type="text" class="form-control" name="en" id="en" placeholder="Nombre del Evento">
        </div>
        
        <label for="exampleInputPassword1">Censura</label>
        <select class="form-control" name ="c" id ="c">
          <option values="A">A</option>
          <option values="B">B</option>
          <option values="B15">B15</option>
          <option values="C">C</option>
          
        </select>
        
        <label for="exampleInputPassword1">Categoria</label>
        <select class="form-control" name="ca" id="ca">
          <option values="TEATRO">Teatro</option>
          <option values="MUSICA">Musica</option>
          <option values="ESPECIAL">Especial</option>
          <option values="DEPORTE">Deporte</option>
          
        </select>
        
        
        
        <label for="exampleInputPassword1">GENERO</label>
        <div class="bs-example">
      <form role="form">
        <textarea class="form-control" rows="3" name="genero" id="genero"></textarea>
      </form>
       
        
        <label for="exampleInputPassword1">Descripcion</label>
        <div class="bs-example">
      <form role="form">
        <textarea class="form-control" rows="3" name="d" id="d"></textarea>
      </form>
    </div>
    
    <button type="button" class="btn btn-primary">Agregar Evento</button>
   </form> 
        
       
      </div>
    </div>
{/block}



