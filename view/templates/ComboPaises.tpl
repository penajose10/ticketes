 
 <label for="">Seleccione Pais</label>
                {literal}
                <select class="form-control"  name="pais" id="pais"onchange="$.post( 'CiudadesPais.php', { pais: $('#pais').val()}, function( data ) {$('#ciudades').html( data );} ); "> {/literal}
                
                 <option value="">--------</option> 
  							{foreach from=$pais item=Lugar}  
                            
                            
         <option value="{$Lugar.L_CODIGO}"> {$Lugar.L_NOMBRE}</option> 
     {/foreach}
				</select>
                <br/>
                <div id="ciudades">
				</div>