<?php /* Smarty version Smarty-3.1.14, created on 2014-01-23 05:16:36
         compiled from "view\templates\AgregarEvento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:143952deb8ca6213d4-77378893%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '269775aeac46eb00745560109e4992ccace306d9' => 
    array (
      0 => 'view\\templates\\AgregarEvento.tpl',
      1 => 1390450512,
      2 => 'file',
    ),
    '66a8c2ff066aaf66c9998bd03de492a82f694cc6' => 
    array (
      0 => 'view\\templates\\base.tpl',
      1 => 1390166380,
      2 => 'file',
    ),
    '884f48beb8209f6d8de3a031ff4e96496a091e30' => 
    array (
      0 => 'view\\templates\\top_menu.tpl',
      1 => 1390152009,
      2 => 'file',
    ),
    '62c840c5022c96e13c53feb89868dd384cd84b6d' => 
    array (
      0 => 'view\\templates\\ComboPaises.tpl',
      1 => 1390166380,
      2 => 'file',
    ),
    '549767df24c439b736db165903a31811a7627f8c' => 
    array (
      0 => 'view\\templates\\ComboEmpleado.tpl',
      1 => 1390450594,
      2 => 'file',
    ),
    '13eb8d22aabe5218a7b44cceb086f85c56867e43' => 
    array (
      0 => 'view\\templates\\ComboRecinto.tpl',
      1 => 1390450534,
      2 => 'file',
    ),
    'abaa0c9ef9ab3c0865d3c824fe63b3bdf32d0ce2' => 
    array (
      0 => 'view\\templates\\footer.tpl',
      1 => 1390166380,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143952deb8ca6213d4-77378893',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52deb8ca786583_73701945',
  'variables' => 
  array (
    'css' => 0,
    'js' => 0,
    'error_message' => 0,
    'info_message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52deb8ca786583_73701945')) {function content_52deb8ca786583_73701945($_smarty_tpl) {?><!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->

<head>

    <meta charset="utf-8">
    <title> .:: Ticketes ::. </title> 


        <!-- For Mobiles  -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
bootstrap.css">



        <!-- Java Script  -->
        <script src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
jquery-1.10.2.min.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
bootstrap.min.js"></script>

</head>
<body>
   
    
            <?php /*  Call merged included template "top_menu.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("top_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '143952deb8ca6213d4-77378893');
content_52e097a4894d00_99552198($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "top_menu.tpl" */?>
    

    <?php if (isset($_smarty_tpl->tpl_vars['error_message']->value)){?>
    <div class="alert alert-error" >
        <button type="button" class="close" data-dismiss="alert">×</button>
       
        <strong><?php echo $_smarty_tpl->tpl_vars['error_message']->value;?>
</strong> 
    </div>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['info_message']->value)){?>
    <div class="alert alert-info" >
        <button type="button" class="close" data-dismiss="alert">×</button>
      
        <strong><?php echo $_smarty_tpl->tpl_vars['info_message']->value;?>
</strong> 
    </div>
    <?php }?>
    
    <div class="container">
        
	  
	<br/>
	<br/>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<h1>Agregar Evento</h1>
			<form role="form"   action="InsertarEvento.php" method="POST">
				<div class="form-group">
					 <label for="ci">Nombre Evento</label><input type="text" class="form-control" id="ne" name="ne" /> </div>

				<div class="form-group">
					<label for="form-control">Censura</label>
					<select class="form-control" name="cen">
  					<option value="A">A</option>
  					<option value="B">B</option>
                    <option value="B-15">B-15</option>
  					<option value="C">C</option>
 				 	
 				 	</select>
					</div>
                    
                    <div class="form-group">
					<label for="form-control">Categoria</label>
					<select class="form-control" name="cat">
  					<option value="TEATRO">TEATRO</option>
  					<option value="MUSICA">MUSICA</option>
                    <option value="ESPECIAL">ESPECIAL</option>
  					<option value="DEPORTE">DEPORTE</option>
 				 	
 				 	</select>
					</div>

						 <div class="form-group">
					<label for="form-control">Genero</label>
					<select class="form-control" name="g">
  					<option value="1">1</option>
  					<option value="2">2</option>
                    <option value="3">3</option>
  					<option value="4">4</option>
 				 	
 				 	</select>
					</div>

						<div class="form-group">
					<label for="">Descripcion</label> <textarea class="form-control" rows="3" name="desc"></textarea></div>



					 <div>
						<?php /*  Call merged included template "ComboPaises.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("ComboPaises.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '143952deb8ca6213d4-77378893');
content_52e097a48b4eb8_34926810($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "ComboPaises.tpl" */?>

					 	
					 </div>	
					 	  
					 	  <div>
					 	  		<?php /*  Call merged included template "ComboEmpleado.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("ComboEmpleado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '143952deb8ca6213d4-77378893');
content_52e097a48c9573_32178914($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "ComboEmpleado.tpl" */?>
					 	  </div>					 	
					 	  
							<div>
								<?php /*  Call merged included template "ComboRecinto.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("ComboRecinto.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '143952deb8ca6213d4-77378893');
content_52e097a48de038_13169209($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "ComboRecinto.tpl" */?>
							</div>
 				 	
							

 				 	 <br>

 				 	 		<button type="submit" class="btn btn-default">Agregar</button>
			</form>
		</div>
	</div>




			
</div>
	    
	
    

        
                       
    </div>
                 
            <?php /*  Call merged included template "footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '143952deb8ca6213d4-77378893');
content_52e097a48f4330_61154442($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "footer.tpl" */?>
        
</body>

</html><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2014-01-23 05:16:36
         compiled from "view\templates\top_menu.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52e097a4894d00_99552198')) {function content_52e097a4894d00_99552198($_smarty_tpl) {?><div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Project name</a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
      </ul>
      <form class="navbar-form navbar-right" role="form">
        <div class="form-group">
          <input type="text" placeholder="Email" class="form-control">
        </div>
        <div class="form-group">
          <input type="password" placeholder="Password" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Sign in</button>
      </form>
    </div><!--/.navbar-collapse -->
  </div>
</div><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2014-01-23 05:16:36
         compiled from "view\templates\ComboPaises.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52e097a48b4eb8_34926810')) {function content_52e097a48b4eb8_34926810($_smarty_tpl) {?> 
 <label for="">Seleccione Pais</label>
                
                <select class="form-control"  name="pais" id="pais"onchange="$.post( 'CiudadesPais.php', { pais: $('#pais').val()}, function( data ) {$('#ciudades').html( data );} ); "> 
                
                 <option value="">--------</option> 
  							<?php  $_smarty_tpl->tpl_vars['Lugar'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Lugar']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pais']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Lugar']->key => $_smarty_tpl->tpl_vars['Lugar']->value){
$_smarty_tpl->tpl_vars['Lugar']->_loop = true;
?>  
                            
                            
         <option value="<?php echo $_smarty_tpl->tpl_vars['Lugar']->value['L_CODIGO'];?>
"> <?php echo $_smarty_tpl->tpl_vars['Lugar']->value['L_NOMBRE'];?>
</option> 
     <?php } ?>
				</select>
                <br/>
                <div id="ciudades">
				</div><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2014-01-23 05:16:36
         compiled from "view\templates\ComboEmpleado.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52e097a48c9573_32178914')) {function content_52e097a48c9573_32178914($_smarty_tpl) {?> 
 <label for="">Seleccione Empleado</label>
 <select class="form-control" name="empleado">
  							<?php  $_smarty_tpl->tpl_vars['empleado'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['empleado']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['empleados']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['empleado']->key => $_smarty_tpl->tpl_vars['empleado']->value){
$_smarty_tpl->tpl_vars['empleado']->_loop = true;
?>  
                            
                            
         <option value="<?php echo $_smarty_tpl->tpl_vars['empleado']->value['EMP_ID'];?>
"> <?php echo $_smarty_tpl->tpl_vars['empleado']->value['EMP_NOMBRE'];?>
,<?php echo $_smarty_tpl->tpl_vars['empleado']->value['EMP_APELLIDO'];?>
 </option>
		

     <?php } ?>
				</select><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2014-01-23 05:16:36
         compiled from "view\templates\ComboRecinto.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52e097a48de038_13169209')) {function content_52e097a48de038_13169209($_smarty_tpl) {?> 
 <label for="">Seleccione Recinto</label>
 <select class="form-control" name="recinto">
  							<?php  $_smarty_tpl->tpl_vars['Recinto'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Recinto']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Recintos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Recinto']->key => $_smarty_tpl->tpl_vars['Recinto']->value){
$_smarty_tpl->tpl_vars['Recinto']->_loop = true;
?>  
                            
                            
         <option value="<?php echo $_smarty_tpl->tpl_vars['Recinto']->value['REC_CODIGO'];?>
"> <?php echo $_smarty_tpl->tpl_vars['Recinto']->value['REC_NOMBRE'];?>
</option> 
     <?php } ?>
				</select><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2014-01-23 05:16:36
         compiled from "view\templates\footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52e097a48f4330_61154442')) {function content_52e097a48f4330_61154442($_smarty_tpl) {?><footer style="" class="container">
        <p align="center">© Ticketes 2014</p>
</footer><?php }} ?>