<?php /* Smarty version Smarty-3.1.14, created on 2014-01-14 19:11:51
         compiled from "..\view\templates\admin\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20452d5875c6fd130-01864395%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a9180f784238e6772691410b415152fc0e65f1f' => 
    array (
      0 => '..\\view\\templates\\admin\\index.tpl',
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
    '063ba265dd006a1076f97025d89fd14e69f50165' => 
    array (
      0 => '..\\view\\templates\\admin\\slider_files.tpl',
      1 => 1389447056,
      2 => 'file',
    ),
    '22a697925799c8e7311be5ec259f59796c33ad58' => 
    array (
      0 => '..\\view\\templates\\admin\\products_shortcuts.tpl',
      1 => 1389726692,
      2 => 'file',
    ),
    'a2132159c2e1c576d283d066d42fb1cf00b3195f' => 
    array (
      0 => '..\\view\\templates\\admin\\content_jardines.tpl',
      1 => 1389455890,
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
  'nocache_hash' => '20452d5875c6fd130-01864395',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52d5875d95eb56_59059079',
  'variables' => 
  array (
    'css' => 0,
    'js' => 0,
    'error_message' => 0,
    'success_message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d5875d95eb56_59059079')) {function content_52d5875d95eb56_59059079($_smarty_tpl) {?><!DOCTYPE html>
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
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("top_menu_admin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '20452d5875c6fd130-01864395');
content_52d58bf76954c2_36606371($_smarty_tpl);
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
    

        <?php /*  Call merged included template "admin/content_jardines.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('admin/content_jardines.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '20452d5875c6fd130-01864395');
content_52d58bf7af6751_79825692($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "admin/content_jardines.tpl" */?>



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
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '20452d5875c6fd130-01864395');
content_52d58bf823c2d4_52677994($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "footer.tpl" */?>
    

           
       
                

    <?php /*  Call merged included template "last_footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("last_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '20452d5875c6fd130-01864395');
content_52d58bf82bd177_49282900($_smarty_tpl);
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

</html><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2014-01-14 19:11:51
         compiled from "..\view\templates\top_menu_admin.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52d58bf76954c2_36606371')) {function content_52d58bf76954c2_36606371($_smarty_tpl) {?><div class="span1" style="margin-top: -14px; width: 90px;">
     
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

<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2014-01-14 19:11:51
         compiled from "..\view\templates\admin\content_jardines.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52d58bf7af6751_79825692')) {function content_52d58bf7af6751_79825692($_smarty_tpl) {?>
<div class="row-fluid">

    <?php /*  Call merged included template "admin/slider_files.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("admin/slider_files.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '20452d5875c6fd130-01864395');
content_52d58bf7b38de9_22681970($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "admin/slider_files.tpl" */?>
</div>

<hr>
<div class="row-fluid">
     <?php /*  Call merged included template "admin/products_shortcuts.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("admin/products_shortcuts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '20452d5875c6fd130-01864395');
content_52d58bf7d4c265_53228104($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "admin/products_shortcuts.tpl" */?>
</div>



<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2014-01-14 19:11:51
         compiled from "..\view\templates\admin\slider_files.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52d58bf7b38de9_22681970')) {function content_52d58bf7b38de9_22681970($_smarty_tpl) {?><ul class="nav nav-tabs myTab" id="tabs_slider">
  <li class="active" ><a href="#slider_files" data-toggle="tab">Imágenes Slider</a></li>
  <li><a href="#add_file_to_slider" data-toggle="tab">Agregar nueva imagen</a></li>
</ul>
 
<div class="tab-content">
  <div class="tab-pane active" id="slider_files">
      <?php echo smarty_function_slider_files(array(),$_smarty_tpl);?>

      <?php  $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['file']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slider_files_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['file']->key => $_smarty_tpl->tpl_vars['file']->value){
$_smarty_tpl->tpl_vars['file']->_loop = true;
?>              
                  <?php if ($_smarty_tpl->tpl_vars['file']->value!='.'&&$_smarty_tpl->tpl_vars['file']->value!='..'&&$_smarty_tpl->tpl_vars['file']->value!='index.php'){?>            
                      <p style="margin-left:30px; display:inline; float: left; "> 
                          <img src="<?php echo $_smarty_tpl->tpl_vars['slider_files_directoy']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
" class="img-polaroid" style="width: 150px; height:100px;" />
                        Eliminar 
                        <a href="#myModal" role="button" id="<?php echo $_smarty_tpl->tpl_vars['slider_files_directoy']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
" class="btn btn-small btn-danger delete_dialog" data-toggle="modal" >x</a>
                      </p>             
                      
                   <?php }?>
      <?php } ?>
  </div>

  <div class="tab-pane " id="add_file_to_slider">
      <div class="span3">
        <div class="featuresbox">
            <form action="../usuario/add_file_to_slider.php" method="POST" enctype="multipart/form-data"> 
                  <input type='file' name='file' class="btn-link" style="width:139px;">
				  <br>
                  <button type="submit" class="btn btn-link">Agregar Imagen</button>               
              </form>
        </div>
      </div>
  </div>
</div>
 <?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2014-01-14 19:11:51
         compiled from "..\view\templates\admin\products_shortcuts.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52d58bf7d4c265_53228104')) {function content_52d58bf7d4c265_53228104($_smarty_tpl) {?><form action="../usuario/edit_product_shortcut.php" method="POST" enctype="multipart/form-data"> 
    <?php echo smarty_function_product_links(array(),$_smarty_tpl);?>

      <?php  $_smarty_tpl->tpl_vars['product_link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product_link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product_link']->key => $_smarty_tpl->tpl_vars['product_link']->value){
$_smarty_tpl->tpl_vars['product_link']->_loop = true;
?>        
    <div class="span3">
            <div class="featuresbox">
                <div><img src="<?php echo $_smarty_tpl->tpl_vars['category_directoy']->value;?>
<?php echo $_smarty_tpl->tpl_vars['product_link']->value['foto'];?>
" style="width:130px; height:100px">
                    <input type='file' name='file_<?php echo $_smarty_tpl->tpl_vars['product_link']->value['id'];?>
' class="btn-link" style="width:139px;">
                </div>
                Categoría:<select name="categoria_<?php echo $_smarty_tpl->tpl_vars['product_link']->value['id'];?>
">
                            <?php echo smarty_function_products_categories(array(),$_smarty_tpl);?>

                            <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products_categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value){
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>  
                                
                                <?php if ($_smarty_tpl->tpl_vars['product_link']->value['fk_categoria']==$_smarty_tpl->tpl_vars['category']->value['c_id']){?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value['c_id'];?>
" selected="selected"> <?php echo $_smarty_tpl->tpl_vars['category']->value['c_nombre'];?>
 </option>
                                <?php }else{ ?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value['c_id'];?>
"> <?php echo $_smarty_tpl->tpl_vars['category']->value['c_nombre'];?>
 </option>
                                <?php }?>
                            <?php } ?>
                        </select>
                Descripción:<textarea id="texarea_span1" name="descripcion_<?php echo $_smarty_tpl->tpl_vars['product_link']->value['id'];?>
" rows="5" cols="50"><?php echo $_smarty_tpl->tpl_vars['product_link']->value['Descripcion'];?>
</textarea>
                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['product_link']->value['foto'];?>
" name="imagen_actual_<?php echo $_smarty_tpl->tpl_vars['product_link']->value['id'];?>
"/>
                
            </div>
    </div>
    <?php } ?>    
    <br/>
    <br/>
    <div align="center">
        <input type="submit" class="btn btn-info" value="Editar"/>
    </div>
</form><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2014-01-14 19:11:52
         compiled from "..\view\templates\footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52d58bf823c2d4_52677994')) {function content_52d58bf823c2d4_52677994($_smarty_tpl) {?>
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
                
        <?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2014-01-14 19:11:52
         compiled from "..\view\templates\last_footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52d58bf82bd177_49282900')) {function content_52d58bf82bd177_49282900($_smarty_tpl) {?>
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