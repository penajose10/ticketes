<?php /* Smarty version Smarty-3.1.14, created on 2014-01-21 18:53:00
         compiled from "view\templates\agregar_evento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1299452deaf108d1d67-38492773%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ba6c111d9b2893806e7f5c1830d5661f8421c6e' => 
    array (
      0 => 'view\\templates\\agregar_evento.tpl',
      1 => 1390326774,
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
    'abaa0c9ef9ab3c0865d3c824fe63b3bdf32d0ce2' => 
    array (
      0 => 'view\\templates\\footer.tpl',
      1 => 1390154952,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1299452deaf108d1d67-38492773',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52deaf109b41a0_84307726',
  'variables' => 
  array (
    'css' => 0,
    'js' => 0,
    'error_message' => 0,
    'info_message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52deaf109b41a0_84307726')) {function content_52deaf109b41a0_84307726($_smarty_tpl) {?><!DOCTYPE html>
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
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("top_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '1299452deaf108d1d67-38492773');
content_52deb3fc60bb68_80386977($_smarty_tpl);
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
        <h1>Evento</h1>
        <form role= "form" action="agregar_evento.php" method="post">
       
       <div class="form-group">
          <label for="">Nombre Evento</label><input type="text" class="form-control" name="ne" id="ne"  placeholder="Nombre del Evento"/>
        </div>
        
        <div class="form-group">
        <label for="">Censura</label>
        <select class="form-control" name ="c" id ="c">
          <option>A</option>
          <option>B</option>
          <option>B15</option>
          <option>C</option>
          
        </select>
         </div>
        
        <div class="form-group">
        <label for="exampleInputPassword1">Categoria</label>
        <select class="form-control" name="ca" id="ca">
          <option>Teatro</option>
          <option>Musica</option>
          <option>Especial</option>
          <option>Deporte</option>
          
        </select>
        </div>
        
        <div class="form-group">
        <label for="exampleInputPassword1">Genero</label>
        <select class="form-control" name="g" id="g">
          <option>Genero</option>
          <option>Genero</option>
          <option>Genero</option>
          <option>Genero</option>
          <option>Genero</option>
        </select>
         </div>
        
        <div class="form-group">
        <label for="exampleInputPassword1">Descripcion</label>
        <div class="bs-example">
      <form role="form">
        <textarea class="form-control" rows="3" name="d" id="d"></textarea>
      </form>
    
    
    <button type="button" class="btn btn-primary">Agregar Evento</button>
   </form> 
        
       
      </div>
    

    

        
                       
    </div>
                 
            <?php /*  Call merged included template "footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '1299452deaf108d1d67-38492773');
content_52deb3fc65f4c2_86179104($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "footer.tpl" */?>
        
</body>

</html><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2014-01-21 18:53:00
         compiled from "view\templates\top_menu.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52deb3fc60bb68_80386977')) {function content_52deb3fc60bb68_80386977($_smarty_tpl) {?><div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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
</div><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2014-01-21 18:53:00
         compiled from "view\templates\footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52deb3fc65f4c2_86179104')) {function content_52deb3fc65f4c2_86179104($_smarty_tpl) {?><footer style="" class="container">
        <p align="center">© Ticketes 2014</p>
</footer><?php }} ?>