<?php /* Smarty version Smarty-3.1.14, created on 2014-01-17 03:58:45
         compiled from "..\view\templates\admin\jardines_gallery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1033152d8aa7566f8f6-38544520%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '234697000abdb6786e9bc837c867c8805b4ea4f2' => 
    array (
      0 => '..\\view\\templates\\admin\\jardines_gallery.tpl',
      1 => 1387333929,
      2 => 'file',
    ),
    'e05fe94494c7dcf56fa17b13ddd6b0b460b74352' => 
    array (
      0 => 'C:\\wamp\\www\\jardines_altamar\\view\\templates\\base_admin.tpl',
      1 => 1389447073,
      2 => 'file',
    ),
    '064147bbb0ac607e38bce053ec6287f4ea0493bc' => 
    array (
      0 => '..\\view\\templates\\top_menu_admin.tpl',
      1 => 1389414481,
      2 => 'file',
    ),
    'f0ec42122ba6eb20b5472cb899083b201ce4b3b0' => 
    array (
      0 => '..\\view\\templates\\admin\\content_gallery.tpl',
      1 => 1387333929,
      2 => 'file',
    ),
    '1999ef54d929ec494d4354e63dec316211d50653' => 
    array (
      0 => '..\\view\\templates\\footer.tpl',
      1 => 1380507693,
      2 => 'file',
    ),
    'f232d89c44199399373f7d6140613e291040785a' => 
    array (
      0 => '..\\view\\templates\\last_footer.tpl',
      1 => 1380507356,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1033152d8aa7566f8f6-38544520',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'css' => 0,
    'js' => 0,
    'error_message' => 0,
    'success_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52d8aa75c43d51_45446184',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d8aa75c43d51_45446184')) {function content_52d8aa75c43d51_45446184($_smarty_tpl) {?><!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->

<head>

    <meta charset="utf-8">
    <title> .:: Jardines Altamar ::. </title> 


        <!-- For Mobiles  -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href='<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
mobiles_css.css' rel='stylesheet' type='text/css'>
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
bootstrap.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
wide.css" id="layout">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
colors/default.css" id="colors">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
css.css" id="colors">
        
        



        <!-- Java Script  -->
        <script src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
jquery.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
custom.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
selectnav.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
flexslider.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
twitter.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
fancybox.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
isotope.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
bootstrap.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
jardin_altamar.js"></script>
        
        


        

<!-- Styles Switcher -->
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
switcher.css">
<script src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
switcher.js"></script>

</head>
<body>

<div id="wrapper" class="container">
    <div class="ie-dropdown-fix" >
       
        

                <?php /*  Call merged included template "top_menu_admin.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("top_menu_admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '1033152d8aa7566f8f6-38544520');
content_52d8aa758f0382_04545546($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "top_menu_admin.tpl" */?>

        

    </div>                     
     <?php if (isset($_smarty_tpl->tpl_vars['error_message']->value)){?>
        <div class="alert alert-error" contenteditable="true">
            <button type="button" class="close" data-dismiss="alert">×</button>
           
            <strong><?php echo $_smarty_tpl->tpl_vars['error_message']->value;?>
</strong> 
        </div>
        <?php }?>
        
        <?php if (isset($_smarty_tpl->tpl_vars['success_message']->value)){?>
        <div class="alert alert-info" contenteditable="true">
            <button type="button" class="close" data-dismiss="alert">×</button>
          
            <strong><?php echo $_smarty_tpl->tpl_vars['success_message']->value;?>
</strong> 
        </div>
        <?php }?>
    

        <?php /*  Call merged included template "admin/content_gallery.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('admin/content_gallery.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '1033152d8aa7566f8f6-38544520');
content_52d8aa75b4db92_33707554($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "admin/content_gallery.tpl" */?>



<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Confirmar eliminaciòn</h3>
      </div>
      <div class="modal-body">
        <p>Esta seguro que desea eliminar el archivo ?</p>
      </div>
      <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
        <button class="btn btn-danger" id="delete">Eliminar</button>
        <form method="post" action="delete_slider_file.php" id="delete_form">
            <input type="hidden" class="input-medium search-query" value="" id="file_name" name="file_name"/>
            
        </form>
      </div>
</div>

                
    <?php /*  Call merged included template "footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '1033152d8aa7566f8f6-38544520');
content_52d8aa75bd6732_81675153($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "footer.tpl" */?>
    

           
       
                

    <?php /*  Call merged included template "last_footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("last_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '1033152d8aa7566f8f6-38544520');
content_52d8aa75c14f49_44155549($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "last_footer.tpl" */?>
                

            
</div>

        


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-40566302-4', 'uexel.us');
  ga('send', 'pageview');
      
      
      $(window).load(function() {
        var $container = $('#portfolio-wrapper');
        $select = $('#filters select');
       	
        // initialize Isotope
        $container.isotope({
            // options...
            resizable: false, // disable normal resizing
            // set columnWidth to a percentage of container width
            
            masonry: {
                columnWidth: $container.width() / 12
            }
        });
 $container.isotope({
            itemSelector : '.portfolio-item'
        
        });
        // update columnWidth on window resize
        $(window).smartresize(function(){
            $container.isotope({
                // update columnWidth to a percentage of container width
                masonry: {
                    columnWidth: $container.width() / 12
                }
            });
        });
		
		
	
	  
        $select.change(function() {
            var filters = $(this).val();
	
            $container.isotope({
                filter: filters
            });
        });
	  
        var $optionSets = $('#filters .option-set'),
        $optionLinks = $optionSets.find('a');

        $optionLinks.click(function(){
            var $this = $(this);
            // don't proceed if already selected
            if ( $this.hasClass('selected') ) {
                return false;
            }
            var $optionSet = $this.parents('.option-set');
            $optionSet.find('.selected').removeClass('selected');
            $this.addClass('selected');
  
            // make option object dynamically, i.e. { filter: '.my-filter-class' }
            var options = {},
            key = $optionSet.attr('data-option-key'),
            value = $this.attr('data-option-value');
            // parse 'false' as false boolean
            value = value === 'false' ? false : value;
            options[ key ] = value;
            if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
                // changes in layout modes need extra logic
                changeLayoutMode( $this, options )
            } else {
                // otherwise, apply new options
                $container.isotope( options );
            }
		
            return false;
        });
    });

</script>

    </body>

</html><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2014-01-17 03:58:45
         compiled from "..\view\templates\top_menu_admin.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52d8aa758f0382_04545546')) {function content_52d8aa758f0382_04545546($_smarty_tpl) {?><div class="span1" style="margin-top: -14px; width: 90px;">
     
    <a href="controller.php" ><img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
portada/logo_jardines.png" width="100px" height="100px" class="logo"/></a>   
     
</div>

<div class="span9">
    <div id="navigation" class="margintop" style="background-color: rgb(114, 182, 38); background-image: none;">               
        <ul id="nav">
            <li><a href="index.php" <?php if (isset($_smarty_tpl->tpl_vars['home']->value)&&$_smarty_tpl->tpl_vars['home']->value==true){?>class="active"<?php }?>>Inicio</a></li>

            <li><a href="jardines_about_admin.php" <?php if (isset($_smarty_tpl->tpl_vars['about']->value)&&$_smarty_tpl->tpl_vars['about']->value==true){?>class="active"<?php }?>>Nosotros</a></li>

            <li><a href="jardines_products_admin.php" <?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value==true){?>class="active"<?php }?>>Productos</a></li>

            <li><a href="jardines_gallery_admin.php" <?php if (isset($_smarty_tpl->tpl_vars['gallery']->value)&&$_smarty_tpl->tpl_vars['gallery']->value==true){?>class="active"<?php }?>>Galeria</a></li>

            <li><a href="jardines_contact_admin.php" <?php if (isset($_smarty_tpl->tpl_vars['contact']->value)&&$_smarty_tpl->tpl_vars['contact']->value==true){?>class="active"<?php }?>>Contacto</a></li>
        </ul>
       
       
    </div> 
    
</div>
 
<div class="span1 pull-left" id="header">
    <ul class="social-icons">

        <li class="facebook"><a href="#">Facebook</a></li>
        <li class="twitter"><a href="#">Twitter</a></li>
      
    </ul>

</div>
        
 <div class="nav-shadow span7"></div>
<div class="clear"></div>

<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2014-01-17 03:58:45
         compiled from "..\view\templates\admin\content_gallery.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52d8aa75b4db92_33707554')) {function content_52d8aa75b4db92_33707554($_smarty_tpl) {?><div class="row-fluid">
    <div id="page-title">
        
        <h2>Editar Galería</h2>
               
    </div>
                <div class="three-tables">

                    <div class="pricing-table span4">
                        <div class="color-1">
                            <h3>Jardinería
                            <button type="button" class="btn btn-inverse" style="padding: 3px; font-size: 12px; line-height: 8px;">Editar</button>
                            
                            </h3>
                            
                            <ul>
                                <li><button type="button" class="btn btn-inverse" style="padding: 3px; font-size: 12px; line-height: 8px;">Agregar</button></li>
                                <li>Título/Nombre Foto <button type="button" class="btn btn-inverse" style="padding: 3px; font-size: 12px; line-height: 8px;">Eliminar</button></li>
                                <li>Título/Nombre Foto <button type="button" class="btn btn-inverse" style="padding: 3px; font-size: 12px; line-height: 8px;">Eliminar</button></li>
                                <li>Título/Nombre Foto <button type="button" class="btn btn-inverse" style="padding: 3px; font-size: 12px; line-height: 8px;">Eliminar</button></li>
                                <li>Título/Nombre Foto <button type="button" class="btn btn-inverse" style="padding: 3px; font-size: 12px; line-height: 8px;">Eliminar</button></li>
                                <li>Título/Nombre Foto <button type="button" class="btn btn-inverse" style="padding: 3px; font-size: 12px; line-height: 8px;">Eliminar</button></li>
                            </ul>
                           
                        </div>
                    </div>

                    <div class="pricing-table span4">
                        <div class="color-1 ">
                            <h3>Flores <button type="button" class="btn btn-inverse" style="padding: 3px; font-size: 12px; line-height: 8px;">Editar</button></h3>
                            
                           
                            <ul>
                                <li><button type="button" class="btn btn-inverse" style="padding: 3px; font-size: 12px; line-height: 8px;">Agregar</button></li>
                                <li>Título/Nombre Foto <button type="button" class="btn btn-inverse" style="padding: 3px; font-size: 12px; line-height: 8px;">Eliminar</button></li>
                                <li>Título/Nombre Foto <button type="button" class="btn btn-inverse" style="padding: 3px; font-size: 12px; line-height: 8px;">Eliminar</button></li>
                                <li>Título/Nombre Foto <button type="button" class="btn btn-inverse" style="padding: 3px; font-size: 12px; line-height: 8px;">Eliminar</button></li>
                                <li>Título/Nombre Foto <button type="button" class="btn btn-inverse" style="padding: 3px; font-size: 12px; line-height: 8px;">Eliminar</button></li>
                                <li>Título/Nombre Foto <button type="button" class="btn btn-inverse" style="padding: 3px; font-size: 12px; line-height: 8px;">Eliminar</button></li>
                            </ul>
                            
                        </div>
                    </div>

                    <div class="pricing-table span4">
                        <div class="color-1 ">
                            <h3>Exteriores <button type="button" class="btn btn-inverse" style="padding: 3px; font-size: 12px; line-height: 8px;">Editar</button></h3>
                            
                           
                            <ul>
                                <li><button type="button" class="btn btn-inverse" style="padding: 3px; font-size: 12px; line-height: 8px;">Agregar</button></li>
                                <li>Título/Nombre Foto <button type="button" class="btn btn-inverse" style="padding: 3px; font-size: 12px; line-height: 8px;">Eliminar</button></li>
                                <li>Título/Nombre Foto <button type="button" class="btn btn-inverse" style="padding: 3px; font-size: 12px; line-height: 8px;">Eliminar</button></li>
                                <li>Título/Nombre Foto <button type="button" class="btn btn-inverse" style="padding: 3px; font-size: 12px; line-height: 8px;">Eliminar</button></li>
                                <li>Título/Nombre Foto <button type="button" class="btn btn-inverse" style="padding: 3px; font-size: 12px; line-height: 8px;">Eliminar</button></li>
                                <li>Título/Nombre Foto <button type="button" class="btn btn-inverse" style="padding: 3px; font-size: 12px; line-height: 8px;">Eliminar</button></li>
                            </ul>
                           
                        </div>
                    </div>


                </div>

            </div><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2014-01-17 03:58:45
         compiled from "..\view\templates\footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52d8aa75bd6732_81675153')) {function content_52d8aa75bd6732_81675153($_smarty_tpl) {?>
<div id="footer" class="container-fluid paddingbottom" >
    <div class="row-fluid">
        <div class="span4">
            <div class="footer-headline" style="border-bottom: solid #fff 2px;"><h4>Suscribete</h4></div>
            <p>Recibe nuestras promociones</p><p>Escribe tu E-mail aquí</p>
            <div class="input-append">
                <input  id="appendedInputButton"  type="text" class="span7" placeholder="abc@ejemplo.com">
                <button class="btn" type="button">Subscribe!</button>
            </div>

        </div>

                            <!-- Subscribe  -->
        <div class="span8">
            <div class="footer-headline" style="border-bottom: solid #fff 2px;"><h4>Publicidad</h4></div>
        </div>
     </div>
</div>
                
        <?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2014-01-17 03:58:45
         compiled from "..\view\templates\last_footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52d8aa75c14f49_44155549')) {function content_52d8aa75c14f49_44155549($_smarty_tpl) {?>
<div id="footer" class="container-fluid" style="background: #111;">
    <div class="row-fluid">
        <div class="span12">
            <div id="footer-bottom">
                © Copyright 2013 by <a href="#">Jardines Altamar</a>. Todos los derechos reservados.

                <div id="scroll-top-top">
                    <a href="" title="Subir"></a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }} ?>