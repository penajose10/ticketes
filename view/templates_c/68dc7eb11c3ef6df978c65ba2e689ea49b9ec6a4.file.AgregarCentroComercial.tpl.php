<?php /* Smarty version Smarty-3.1.14, created on 2014-01-22 19:26:08
         compiled from "view\templates\AgregarCentroComercial.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2067552e00d40698c79-39283761%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68dc7eb11c3ef6df978c65ba2e689ea49b9ec6a4' => 
    array (
      0 => 'view\\templates\\AgregarCentroComercial.tpl',
      1 => 1390414951,
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
  'nocache_hash' => '2067552e00d40698c79-39283761',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'css' => 0,
    'js' => 0,
    'error_message' => 0,
    'info_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52e00d40860a37_46129158',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e00d40860a37_46129158')) {function content_52e00d40860a37_46129158($_smarty_tpl) {?><!DOCTYPE html>
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
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("top_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '2067552e00d40698c79-39283761');
content_52e00d407a6c76_38994431($_smarty_tpl);
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
        <h1>Agregar Un Nuevo Recinto</h1>
        <p>aqui para ingresar</p>
        <p><a class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>
      </div>
    </div>
    <div class="container">
	<div class="row clearfix">
		<div class="col-md-4 column">
			<form role="form" action="InsertarCentroComercial.php" method="post">
				<div class="form-group">
					 <label align="center" for="">Nombre Centro Comercial</label><input type="text" name="ncc" class="form-control" id="ncc" />
				</div>
				
                <div>
                
                <?php /*  Call merged included template "ComboPaises.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("ComboPaises.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '2067552e00d40698c79-39283761');
content_52e00d40803df6_05956283($_smarty_tpl);
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
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '2067552e00d40698c79-39283761');
content_52e00d4084b168_22296175($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "footer.tpl" */?>
        
</body>

</html><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2014-01-22 19:26:08
         compiled from "view\templates\top_menu.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52e00d407a6c76_38994431')) {function content_52e00d407a6c76_38994431($_smarty_tpl) {?><div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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
</div><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2014-01-22 19:26:08
         compiled from "view\templates\ComboPaises.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52e00d40803df6_05956283')) {function content_52e00d40803df6_05956283($_smarty_tpl) {?> 
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
				</div><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2014-01-22 19:26:08
         compiled from "view\templates\footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52e00d4084b168_22296175')) {function content_52e00d4084b168_22296175($_smarty_tpl) {?><footer style="" class="container">
        <p align="center">© Ticketes 2014</p>
</footer><?php }} ?>