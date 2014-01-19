{extends file="base.tpl"}

{block name="content"}
  <div class="jumbotron">
      <div class="container">
        <h1>Evento</h1>
       
       <div class="form-group">
          <label for="exampleInputEmail1">Nombre del Evento</label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nombre del Evento">
        </div>
        
        <label for="exampleInputPassword1">Censura</label>
        <select class="form-control">
          <option>Censura</option>
          <option>Censura</option>
          <option>Censura</option>
          <option>Censura</option>
          <option>Censura</option>
        </select>
        
        <label for="exampleInputPassword1">Categoria</label>
        <select class="form-control">
          <option>Categoria</option>
          <option>Categoria</option>
          <option>Categoria</option>
          <option>Categoria</option>
          <option>Categoria</option>
        </select>
        
        <label for="exampleInputPassword1">Genero</label>
        <select class="form-control">
          <option>Genero</option>
          <option>Genero</option>
          <option>Genero</option>
          <option>Genero</option>
          <option>Genero</option>
        </select>
        
        <label for="exampleInputPassword1">Descripcion</label>
        <div class="bs-example">
      <form role="form">
        <textarea class="form-control" rows="3"></textarea>
      </form>
    </div>
    
    <button type="button" class="btn btn-primary">Agregar Evento</button>
        
       
      </div>
    </div>
{/block}



