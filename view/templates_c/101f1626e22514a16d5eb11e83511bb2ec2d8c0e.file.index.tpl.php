<<<<<<< HEAD
<?php /* Smarty version Smarty-3.1.14, created on 2014-01-19 18:45:47
=======
<?php /* Smarty version Smarty-3.1.14, created on 2014-01-19 18:52:03
>>>>>>> a94f03f2bbb0645fd8e4abcfe8e4d92c9a1ee74a
         compiled from "view\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:93252d723a7aed205-44148450%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '101f1626e22514a16d5eb11e83511bb2ec2d8c0e' => 
    array (
      0 => 'view\\templates\\index.tpl',
<<<<<<< HEAD
      1 => 1390153542,
=======
      1 => 1390153920,
>>>>>>> a94f03f2bbb0645fd8e4abcfe8e4d92c9a1ee74a
      2 => 'file',
    ),
    '66a8c2ff066aaf66c9998bd03de492a82f694cc6' => 
    array (
      0 => 'view\\templates\\base.tpl',
<<<<<<< HEAD
      1 => 1390151983,
=======
      1 => 1390152009,
>>>>>>> a94f03f2bbb0645fd8e4abcfe8e4d92c9a1ee74a
      2 => 'file',
    ),
    '884f48beb8209f6d8de3a031ff4e96496a091e30' => 
    array (
      0 => 'view\\templates\\top_menu.tpl',
<<<<<<< HEAD
      1 => 1390151983,
=======
      1 => 1390152009,
>>>>>>> a94f03f2bbb0645fd8e4abcfe8e4d92c9a1ee74a
      2 => 'file',
    ),
    'abaa0c9ef9ab3c0865d3c824fe63b3bdf32d0ce2' => 
    array (
      0 => 'view\\templates\\footer.tpl',
<<<<<<< HEAD
      1 => 1390151983,
=======
      1 => 1390152009,
>>>>>>> a94f03f2bbb0645fd8e4abcfe8e4d92c9a1ee74a
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93252d723a7aed205-44148450',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52d723a8addb92_23440555',
  'variables' => 
  array (
    'css' => 0,
    'js' => 0,
    'error_message' => 0,
    'info_message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d723a8addb92_23440555')) {function content_52d723a8addb92_23440555($_smarty_tpl) {?><!DOCTYPE html>
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
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("top_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '93252d723a7aed205-44148450');
<<<<<<< HEAD
content_52dc0f4bdc1c62_17121830($_smarty_tpl);
=======
content_52dc10c3ea3b51_90296106($_smarty_tpl);
>>>>>>> a94f03f2bbb0645fd8e4abcfe8e4d92c9a1ee74a
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
        <h1>Bienvenido <?php echo $_smarty_tpl->tpl_vars['nombre_usuario']->value;?>
<<<<<<< HEAD
</h1>
=======
 </h1>
>>>>>>> a94f03f2bbb0645fd8e4abcfe8e4d92c9a1ee74a
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>
      </div>
    </div>
    <div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<form role="form">
				<div class="form-group">
					 <label for="exampleInputEmail1">Email address</label><input type="email" class="form-control" id="exampleInputEmail1" />
				</div>
				<div class="form-group">
					 <label for="exampleInputPassword1">Password</label><input type="password" class="form-control" id="exampleInputPassword1" />
				</div>
				<div class="form-group">
					 <label for="exampleInputFile">File input</label><input type="file" id="exampleInputFile" />
					<p class="help-block">
						Example block-level help text here.
					</p>
				</div>
				<div class="checkbox">
					 <label><input type="checkbox" /> Check me out</label>
				</div> <button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
	</div>
</div>

<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<form role="form">
				<div class="form-group">
					 <label for="exampleInputEmail1">Email address</label><input type="email" class="form-control" id="exampleInputEmail1" />
				</div>
				<div class="form-group">
					 <label for="exampleInputPassword1">Password</label><input type="password" class="form-control" id="exampleInputPassword1" />
				</div>
				<div class="form-group">
					 <label for="exampleInputFile">File input</label><input type="file" id="exampleInputFile" />
					<p class="help-block">
						Example block-level help text here.
					</p>
				</div>
				<div class="checkbox">
					 <label><input type="checkbox" /> Check me out</label>
				</div> <button type="submit" class="btn btn-default">Submit</button>
			</form><img alt="140x140" src="http://lorempixel.com/140/140/" class="img-circle" />
		</div>
	</div>
</div>
    

    

                     
            <?php /*  Call merged included template "footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '93252d723a7aed205-44148450');
<<<<<<< HEAD
content_52dc0f4be06c34_68653187($_smarty_tpl);
=======
content_52dc10c3ecbfb0_13480302($_smarty_tpl);
>>>>>>> a94f03f2bbb0645fd8e4abcfe8e4d92c9a1ee74a
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "footer.tpl" */?>
        
                       
    </div>
</body>

<<<<<<< HEAD
</html><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2014-01-19 18:45:47
         compiled from "view\templates\top_menu.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52dc0f4bdc1c62_17121830')) {function content_52dc0f4bdc1c62_17121830($_smarty_tpl) {?><div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
=======
</html><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2014-01-19 18:52:03
         compiled from "view\templates\top_menu.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52dc10c3ea3b51_90296106')) {function content_52dc10c3ea3b51_90296106($_smarty_tpl) {?><div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
>>>>>>> a94f03f2bbb0645fd8e4abcfe8e4d92c9a1ee74a
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
</div><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2014-01-19 18:45:47
         compiled from "view\templates\footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52dc0f4be06c34_68653187')) {function content_52dc0f4be06c34_68653187($_smarty_tpl) {?><footer style="position:absolute; bottom:15px;" class="container">
=======
</div><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2014-01-19 18:52:03
         compiled from "view\templates\footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52dc10c3ecbfb0_13480302')) {function content_52dc10c3ecbfb0_13480302($_smarty_tpl) {?><footer style="position:absolute; bottom:15px;" class="container">
>>>>>>> a94f03f2bbb0645fd8e4abcfe8e4d92c9a1ee74a
        <p align="center">© Ticketes 2014</p>
</footer><?php }} ?>