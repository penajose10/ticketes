{exends file="base.tpl"}

{block name = "content"} 
 <label for="">Seleccione Temporada</label>
 			
                
               <select class="form-control" name="temp" id="temp">
               
                 <option value="">--------</option> 
  							{foreach from=$stand item=stands}  
                            
                            
         <option value="{$Temporada.temp_codigo}"> {$Temporada.temp_nombre}</option> 
     {/foreach}
				</select>
                <br/>
               