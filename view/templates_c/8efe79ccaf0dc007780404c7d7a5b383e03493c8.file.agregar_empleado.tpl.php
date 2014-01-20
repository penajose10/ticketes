<?php /* Smarty version Smarty-3.1.14, created on 2014-01-19 23:25:26
         compiled from "view\templates\agregar_empleado.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2638852dc13b50f4716-65247706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8efe79ccaf0dc007780404c7d7a5b383e03493c8' => 
    array (
      0 => 'view\\templates\\agregar_empleado.tpl',
      1 => 1390170317,
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
    'abaa0c9ef9ab3c0865d3c824fe63b3bdf32d0ce2' => 
    array (
      0 => 'view\\templates\\footer.tpl',
      1 => 1390166380,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2638852dc13b50f4716-65247706',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52dc13b51815a0_60019786',
  'variables' => 
  array (
    'css' => 0,
    'js' => 0,
    'error_message' => 0,
    'info_message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dc13b51815a0_60019786')) {function content_52dc13b51815a0_60019786($_smarty_tpl) {?><!DOCTYPE html>
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
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("top_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '2638852dc13b50f4716-65247706');
content_52dc50d6bf4f88_51935937($_smarty_tpl);
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
			<h1>Agregar Empleado</h1>
			<form role="form"   action="insertar_empleado_recibe.php" method="POST">
				<div class="form-group">
					 <label for="ci">Cedula de Identidad</label><input type="text" class="form-control" id="ci" name="ci" /> </div>


					<div class="form-group">
					 <label for="nombre">Nombre</label><input type="text" class="form-control" id="nombre" name="nombre" /> </div>


					 <div class="form-group">
					 <label for="apellido">Apellido</label><input type="text" class="form-control" id="apellido" name="apellido"/> </div>



					 <div class="form-group">
					 <label for="calle">Calle</label><input type="text" class="form-control" id="calle" name="calle" /> </div>



					 <div class="form-group">
					 <label for="urb">Urbanizacion</label><input type="text" class="form-control" id="urb" name="urb" /> </div>



					 <div class="form-group">
					 <label for="edf">Edificion</label><input type="text" class="form-control" id="edf" name="edf" /> </div>

                    
					<label for="form-control">Sexo</label>
					<select class="form-control" name="sexo">
  					<option value="M">M</option>
  					<option value="F">F</option>
 				 	
 				 	</select>


 				 	
					  <div class="form-group">
					 <label for="fecha_nac">Fecha De Nacimiento</label><input type="date" class="form-control" id="fecha_nac" name="fecha_nac"/> </div>	



					 	  <div class="form-group">
					 <label for="fecha_trabajo">Fecha De Trabajo</label><input type="date" class="form-control" id="fecha_trabajo"  name="fecha_trabajo"/> </div>



					 	<label for="form-control">Tipo de Empleado</label>
					<select class="form-control" name="tipo">
  					<option>CALL CENTER</option>
  					<option>OFICINA</option>
  					<option>STAND</option>
 				 	
 				 	</select>

 				 	 <?php /*  Call merged included template "ComboPaises.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("ComboPaises.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '2638852dc13b50f4716-65247706');
content_52dc50d6c223c9_42326441($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "ComboPaises.tpl" */?>


 				 	 <br>

 				 	 		<button type="submit" class="btn btn-default">Agregar</button>
			</form>
		</div>
	</div>




			
</div>
	    
	
    

        
                       
    </div>
                 
            <?php /*  Call merged included template "footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '2638852dc13b50f4716-65247706');
content_52dc50d6c40445_47734517($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "footer.tpl" */?>
        
</body>

</html><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2014-01-19 23:25:26
         compiled from "view\templates\top_menu.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52dc50d6bf4f88_51935937')) {function content_52dc50d6bf4f88_51935937($_smarty_tpl) {?><div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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
</div><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2014-01-19 23:25:26
         compiled from "view\templates\ComboPaises.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52dc50d6c223c9_42326441')) {function content_52dc50d6c223c9_42326441($_smarty_tpl) {?> 
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
				</div><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2014-01-19 23:25:26
         compiled from "view\templates\footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52dc50d6c40445_47734517')) {function content_52dc50d6c40445_47734517($_smarty_tpl) {?><footer style="" class="container">
        <p align="center">© Ticketes 2014</p>
</footer><?php }} ?>