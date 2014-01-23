 {extends file="base.tpl"}

{block name="content"}
<br />
<br /><br />
 <label for="">Seleccione Proveedor a Modificar</label>
                {literal}
                <select class="form-control"  name"prov" id="prov"onchange="$.post( 'ProveedorDetalle.php', { proveedor: $('#proveedor').val()}, function( data ) {$('#prov_d').html( data );} ); "> {/literal}
                
                 <option value="">--------</option> 
  							{foreach from=$Proveedores item=proveedor}  
                            
                            
         <option value="{$proveedor.PROV_CODIGO}"> {$proveedor.PROV_NOMBRE}</option> 
     {/foreach}
				</select>
                <br/>
                <div id="prov_d">
				</div>
                
                {/block}