 {extends file="base.tpl"}

{block name="content"}
<br />
<br /><br />

 <label for="">Seleccione Centro Comercial a Eliminar</label>
               
               <form role="form" action="BorrarCC.php" method="post">
                <select class="form-control"  name="cc" id="cc">
                
                 <option value="">--------</option> 
  							{foreach from=$ccs item=cc}  
                            
                            
         <option value="{$cc.CC_CODIGO}"> {$cc.CC_NOMBRE}</option> 
     {/foreach}
				</select>
                <br/>
                
				<div class="checkbox">
					 
				</div> <button type="submit" class="btn btn-default">Borrar</button>
                
                {/block}