 {extends file="base.tpl"}

{block name="content"}
<br />
<br /><br />
 <label for="">Seleccione Cliente a Modificar</label>
                {literal}
                <select class="form-control"  name="cli" id="cli"onchange="$.post( 'ClienteDetalle.php', { cliente: $('#cliente').val()}, function( data ) {$('#cliente_d').html( data );} ); "> {/literal}
                
                 <option value="">--------</option> 
  							{foreach from=$Clientes item=Cliente}  
                            
                            
         <option value="{$Cliente.CLI_CODIGO}"> {$Cliente.CLI_NOMBRE}</option> 
     {/foreach}
				</select>
                <br/>
                <div id="cliente_d">
				</div>
                
                {/block}