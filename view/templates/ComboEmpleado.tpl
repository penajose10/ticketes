 
 <label for="">Seleccione Empleado</label>
 <select class="form-control" name="empleado">
  							{foreach from=$empleados item=empleado}  
                            
                            
         <option value="{$empleado.EMP_ID}"> {$empleado.EMP_NOMBRE},{$empleado.EMP_APELLIDO} </option>
		

     {/foreach}
				</select>