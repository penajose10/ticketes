<?php /* Smarty version Smarty-3.1.14, created on 2014-01-22 18:15:51
         compiled from "view\templates\AgregarConsumidor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1504052dff5c83c9492-03731491%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '069938d5d17d207d108f651e84e598f1f0c385df' => 
    array (
      0 => 'view\\templates\\AgregarConsumidor.tpl',
      1 => 1390410935,
      2 => 'file',
    ),
    '66a8c2ff066aaf66c9998bd03de492a82f694cc6' => 
    array (
      0 => 'view\\templates\\base.tpl',
      1 => 1390154903,
      2 => 'file',
    ),
    '884f48beb8209f6d8de3a031ff4e96496a091e30' => 
    array (
      0 => 'view\\templates\\top_menu.tpl',
      1 => 1390151983,
      2 => 'file',
    ),
    '62c840c5022c96e13c53feb89868dd384cd84b6d' => 
    array (
      0 => 'view\\templates\\ComboPaises.tpl',
      1 => 1390162942,
      2 => 'file',
    ),
    'abaa0c9ef9ab3c0865d3c824fe63b3bdf32d0ce2' => 
    array (
      0 => 'view\\templates\\footer.tpl',
      1 => 1390154952,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1504052dff5c83c9492-03731491',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52dff5c851d666_39840795',
  'variables' => 
  array (
    'css' => 0,
    'js' => 0,
    'error_message' => 0,
    'info_message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dff5c851d666_39840795')) {function content_52dff5c851d666_39840795($_smarty_tpl) {?><!DOCTYPE html>
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
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("top_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '1504052dff5c83c9492-03731491');
content_52dffcc7156849_65745325($_smarty_tpl);
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
        
  <div class="jumbotron">
      <div class="container">
        <h1>Nuevo Cliente</h1>
        <p>aqui para ingresar</p>
        <p><a class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>
      </div>
    </div>
    <div class="container">
	<div class="row clearfix">
		<div class="col-md-4 column">
			<form role="form" action="InsertarConsumidor.php" method="post">
            
            <div class="form-group">
					 <label align="center" for="">Cedula</label><input type="text" name="ci" class="form-control" id="ci" />
				</div>
                
				<div class="form-group">
					 <label align="center" for="">Nombre</label><input type="text" name="nom" class="form-control" id="nom" />
				</div>
				<div class="form-group">
					 <label for="">Apellido</label><input type="text" class="form-control" name="ap" id="ap" />
				</div>
                
                <div class="form-group">
					<label for="form-control">Genero</label>
					<select class="form-control" name="g">
  					<option value="F">F</option>
  					<option value="M">M</option>
                    </select>
					</div>
                    
                    <div class="form-group">
					 <label align="center" for="">Telefono Oficina</label><input type="text" name="telo" class="form-control" id="telp" />
				</div>
				<div class="form-group">
					 <label for="">Telefono Casa</label><input type="text" class="form-control" name="telc" id="telc" />
				</div>
                
                <div class="form-group">
					 <label for="">Telefono Celular</label><input type="text" class="form-control" name="telcel" id="telcel" />
				</div>
               
                <div class="form-group">
					 <label for="">Correo Electronico</label><input type="text" class="form-control" name="correo" id="correo" />
				</div>
                
                <div class="form-group">
					 <label for="">Clave</label><input type="text" class="form-control" name="clave" id="clave" />
				</div>
                
                <div class="form-group">
                <div>
                <label for="">Fecha Nacimiento</label><input type="date" class="form-control" name="fn" id="fn" />
				</div>
                
                
                <div class="form-group">
                <div>
                <label for="">Nacionalidad</label><input type="text" class="form-control" name="nac" id="nac" />
				</div>
                
                <div class="form-group">
                <div>
                <label for="">Calle</label><input type="text" class="form-control" name="calle" id="calle" />
				</div>
                
                <div class="form-group">
					 <label for="">Edificio</label><input type="text" class="form-control" name="ed" id="ed" />
				</div>
                <div class="form-group">
					 <label for="">Urbanizaciion</label><input type="text" class="form-control" name= "urb" id="urb" />
				</div>
                <div>
                
                <?php /*  Call merged included template "ComboPaises.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("ComboPaises.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '1504052dff5c83c9492-03731491');
content_52dffcc718aed9_93286604($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "ComboPaises.tpl" */?>

				</div>
				
				<div class="checkbox">
					 
				</div> <button type="submit" class="btn btn-default">Agregar</button>
			</form>
		</div>
	</div>
</div>


    

        
                       
    </div>
                 
            <?php /*  Call merged included template "footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '1504052dff5c83c9492-03731491');
content_52dffcc71b6673_66256217($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "footer.tpl" */?>
        
</body>

</html><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2014-01-22 18:15:51
         compiled from "view\templates\top_menu.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52dffcc7156849_65745325')) {function content_52dffcc7156849_65745325($_smarty_tpl) {?><div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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
</div><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2014-01-22 18:15:51
         compiled from "view\templates\ComboPaises.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52dffcc718aed9_93286604')) {function content_52dffcc718aed9_93286604($_smarty_tpl) {?> 
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
				</div><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2014-01-22 18:15:51
         compiled from "view\templates\footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52dffcc71b6673_66256217')) {function content_52dffcc71b6673_66256217($_smarty_tpl) {?><footer style="" class="container">
        <p align="center">© Ticketes 2014</p>
</footer><?php }} ?>