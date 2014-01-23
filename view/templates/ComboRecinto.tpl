 
 <label for="">Seleccione Recinto</label>
 <select class="form-control" name="recinto">
  							{foreach from=$Recintos item=Recinto}  
                            
                            
         <option value="{$Recinto.REC_CODIGO}"> {$Recinto.REC_NOMBRE}</option> 
     {/foreach}
				</select>