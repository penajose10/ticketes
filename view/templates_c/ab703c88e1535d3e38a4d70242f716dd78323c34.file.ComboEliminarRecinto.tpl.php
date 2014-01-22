<<<<<<< HEAD
<?php /* Smarty version Smarty-3.1.14, created on 2014-01-21 19:56:58
=======
<?php /* Smarty version Smarty-3.1.14, created on 2014-01-21 07:50:26
>>>>>>> eb4f043af493656474c917d593540f3bc3112d68
         compiled from "view\templates\ComboEliminarRecinto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1827352dc54e73895e6-29602655%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab703c88e1535d3e38a4d70242f716dd78323c34' => 
    array (
      0 => 'view\\templates\\ComboEliminarRecinto.tpl',
<<<<<<< HEAD
      1 => 1390251021,
=======
      1 => 1390287006,
>>>>>>> eb4f043af493656474c917d593540f3bc3112d68
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
    'abaa0c9ef9ab3c0865d3c824fe63b3bdf32d0ce2' => 
    array (
      0 => 'view\\templates\\footer.tpl',
      1 => 1390166380,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1827352dc54e73895e6-29602655',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52dc54e7492316_99702678',
  'variables' => 
  array (
    'css' => 0,
    'js' => 0,
    'error_message' => 0,
    'info_message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52dc54e7492316_99702678')) {function content_52dc54e7492316_99702678($_smarty_tpl) {?><!DOCTYPE html>
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
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("top_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '1827352dc54e73895e6-29602655');
<<<<<<< HEAD
content_52dec2fa5e98e8_91396424($_smarty_tpl);
=======
content_52de18b2286aa1_65272666($_smarty_tpl);
>>>>>>> eb4f043af493656474c917d593540f3bc3112d68
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
        
<br />
<br /><br />

 <label for="">Seleccione Recinto a Eliminar</label>
               
               <form role="form" action="BorrarRecinto.php" method="post">
                <select class="form-control"  name="recinto" id="recinto">
                
                 <option value="">--------</option> 
  							<?php  $_smarty_tpl->tpl_vars['Recinto'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['Recinto']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Recintos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['Recinto']->key => $_smarty_tpl->tpl_vars['Recinto']->value){
$_smarty_tpl->tpl_vars['Recinto']->_loop = true;
?>  
                            
                            
         <option value="<?php echo $_smarty_tpl->tpl_vars['Recinto']->value['REC_CODIGO'];?>
"> <?php echo $_smarty_tpl->tpl_vars['Recinto']->value['REC_NOMBRE'];?>
</option> 
     <?php } ?>
				</select>
                <br/>
                
				<div class="checkbox">
					 
				</div> <button type="submit" class="btn btn-default">Borrar</button>
                
                
    

        
                       
    </div>
                 
            <?php /*  Call merged included template "footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '1827352dc54e73895e6-29602655');
<<<<<<< HEAD
content_52dec2fa660c97_77907426($_smarty_tpl);
=======
content_52de18b22baea4_75581249($_smarty_tpl);
>>>>>>> eb4f043af493656474c917d593540f3bc3112d68
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "footer.tpl" */?>
        
</body>

<<<<<<< HEAD
</html><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2014-01-21 19:56:58
         compiled from "view\templates\top_menu.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52dec2fa5e98e8_91396424')) {function content_52dec2fa5e98e8_91396424($_smarty_tpl) {?><div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
=======
</html><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2014-01-21 07:50:26
         compiled from "view\templates\top_menu.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52de18b2286aa1_65272666')) {function content_52de18b2286aa1_65272666($_smarty_tpl) {?><div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
>>>>>>> eb4f043af493656474c917d593540f3bc3112d68
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
<<<<<<< HEAD
</div><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2014-01-21 19:56:58
         compiled from "view\templates\footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52dec2fa660c97_77907426')) {function content_52dec2fa660c97_77907426($_smarty_tpl) {?><footer style="" class="container">
=======
</div><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2014-01-21 07:50:26
         compiled from "view\templates\footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52de18b22baea4_75581249')) {function content_52de18b22baea4_75581249($_smarty_tpl) {?><footer style="" class="container">
>>>>>>> eb4f043af493656474c917d593540f3bc3112d68
        <p align="center">© Ticketes 2014</p>
</footer><?php }} ?>