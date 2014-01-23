 {extends file="base.tpl"}

{block name="content"}
<br />
<br /><br />

 <label for="">Seleccione Proveedor a Eliminar</label>
               
               <form role="form" action="BorrarProveedor.php" method="post">
                <select class="form-control"  name="prov" id="prov">
                
                 <option value="">--------</option> 
  							{foreach from=$Proveedores item=Proveedor}  
                            
                            
         <option value="{$Proveedor.PROV_CODIGO}"> {$Proveedor.PROV_NOMBRE}</option> 
     {/foreach}
				</select>
                <br/>
                
				<div class="checkbox">
					 
				</div> <button type="submit" class="btn btn-default">Borrar</button>
                
                {/block}