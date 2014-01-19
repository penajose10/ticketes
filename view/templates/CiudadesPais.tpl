 
 <label for="">Seleccione Ciudad</label>
 <select class="form-control" name="ciudad">
  							{foreach from=$ciudad item=Lugar}  
                            
                            
         <option value="{$Lugar.L_CODIGO}"> {$Lugar.L_NOMBRE}</option> 
     {/foreach}
				</select>