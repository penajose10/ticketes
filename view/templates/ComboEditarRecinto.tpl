 {extends file="base.tpl"}

{block name="content"}
<br />
<br /><br />
 <label for="">Seleccione Recinto a Modificar</label>
                {literal}
                <select class="form-control"  name="recinto" id="recinto"onchange="$.post( 'RecintoDetalle.php', { recinto: $('#recinto').val()}, function( data ) {$('#recinto_d').html( data );} ); "> {/literal}
                
                 <option value="">--------</option> 
  							{foreach from=$Recintos item=Recinto}  
                            
                            
         <option value="{$Recinto.REC_CODIGO}"> {$Recinto.REC_NOMBRE}</option> 
     {/foreach}
				</select>
                <br/>
                <div id="recinto_d">
				</div>
                
                {/block}