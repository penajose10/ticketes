{exends file="base.tpl"}

{block name = "content"} 
 <label for="">Seleccione Tipo de Stand</label>
 			
                
               <select class="form-control" name="stand" id="stand">
               
                 <option value="">--------</option> 
  							{foreach from=$stand item=stands}  
                            
                            
         <option value="{$stand.S_CODIGO}"> {$stand.S_NOMBRE}</option> 
     {/foreach}
				</select>
                <br/>
               