 {extends file="base.tpl"}
 <br>
<br>
{block name="content"}
<br />

<br>
<br /><br />



<br>
 <label for="">Seleccione Empleado a Eliminar</label>
               
               <form role="form" action="BorrarEmpleado.php" method="post">
                <select class="form-control"  name="empleado" id="empleado">
                
                 <option value="">--------</option> 
  							{foreach from=$empleados item=empleado}  
                            
                            
         <option value="{$empleado.EMP_ID}"> {$empleado.EMP_NOMBRE}</option> 
     {/foreach}
				</select>
                <br/>
                
				<div class="checkbox">
					 
				</div> <button type="submit" class="btn btn-default">Borrar</button>
                
                {/block}