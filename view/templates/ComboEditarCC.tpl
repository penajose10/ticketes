 {extends file="base.tpl"}

{block name="content"}
<br />
<br /><br />
 <label for="">Seleccione Centro Comercial a Modificar</label>
                {literal}
                <select class="form-control"  name="cc" id="cc"onchange="$.post( 'CCDetalle.php', { cc: $('#cc').val()}, function( data ) {$('#cc_d').html( data );} ); "> {/literal}
                
                 <option value="">--------</option> 
  							{foreach from=$ccs item=cc}  
                            
                            
         <option value="{$cc.CC_CODIGO}"> {$cc.CC_NOMBRE}</option> 
     {/foreach}
				</select>
                <br/>
                <div id="cc_d">
				</div>
                
                {/block}