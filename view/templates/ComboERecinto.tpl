 {extends file="base.tpl"}

{block name="content"}
<br />
<br /><br />

 <label for="">Seleccione Recinto</label>
               
               
                <select class="form-control"  name="recinto" id="recinto">
                
                 <option value="">--------</option> 
  							{foreach from=$Recintos item=Recinto}  
                            
                            
         <option value="{$Recinto.REC_CODIGO}"> {$Recinto.REC_NOMBRE}</option> 
     {/foreach}
				</select>
                <br/>
                
				<div class="checkbox">
					 
				
                
                {/block}