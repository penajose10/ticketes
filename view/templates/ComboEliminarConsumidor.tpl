 {extends file="base.tpl"}

{block name="content"}
<br />
<br /><br />

 <label for="">Seleccione Cliente a Eliminar</label>
               
               <form role="form" action="BorrarConsumidor.php" method="post">
                <select class="form-control"  name="con" id="con">
                
                 <option value="">--------</option> 
  							{foreach from=$Consumidores item=Consumidor}                            
                            
         <option value="{$Consumidor.CON_CODIGO}"> {$Consumidor.CON_NOMBRE},   {$Consumidor.CON_APELLIDO} </option> 
     {/foreach}
				</select>
                <br/>
                
				<div class="checkbox">
					 
				</div> <button type="submit" class="btn btn-default">Borrar</button>
                
                {/block}