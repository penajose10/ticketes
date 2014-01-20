 {extends file="base.tpl"}

{block name="content"}
<br />
<br /><br />

 <label for="">Seleccione Recinto a Eliminar</label>
               
               <form role="form" action="BorrarRecinto.php" method="post">
                <select class="form-control"  name="recinto" id="recinto">
                
                 <option value="">--------</option> 
  							{foreach from=$Recintos item=Recinto}  
                            
                            
         <option value="{$Recinto.REC_CODIGO}"> {$Recinto.REC_NOMBRE}</option> 
     {/foreach}
				</select>
                <br/>
                
				<div class="checkbox">
					 
				</div> <button type="submit" class="btn btn-default">Borrar</button>
                
                {/block}