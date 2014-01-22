 {extends file="base.tpl"}

{block name="content"}
<br />
<br /><br />
 <label for="">Seleccione Empleado a Modificar</label>
                {literal}
                <select class="form-control"  name="empleado" id="empleado"onchange="$.post( 'EmpleadoDetalle.php', { empleado: $('#empleado').val()}, function( data ) {$('#empleado_d').html( data );} ); "> {/literal}
                
                 <option value="">--------</option> 
  							{foreach from=$empleados item=empleado}  
                            
                            
         <option value="{$empleado.EMP_ID}"> {$empleado.EMP_NOMBRE}</option> 
     {/foreach}
				</select>
                <br/>
                <div id="empleado_d">
				</div>
                
                {/block}