<?php

include_once Smarty_Include;


$smarty = new Smarty;
$smarty->template_dir = Smarty_Template_Dir;
$smarty->compile_dir = Smarty_Template_Dir_Comp;
$smarty->assign("css",Css);
$smarty->assign("js",Js);
$smarty->assign("img",Img);
$smarty->assign("Jquery_Css",Jquery_Css);
$smarty->assign("Jquery_Js",Jquery_Js);

function smarty_function_user_files($params, &$smarty)
{   
    $username = $params['username'];
    $smarty->assign('user_files_creacion', User::user_files_list_creacion(($username)));
    $smarty->assign("user_files_medios", User::user_files_list_medios($username));
    $smarty->assign("user_files_ventas", User::user_files_list_ventas($username));
    $smarty->assign("user_files_directoy",user_directory.'/'.$params['username'].'/');
}
$smarty->registerPlugin("function",'user_files', 'smarty_function_user_files');

function smarty_function_client_files($params, &$smarty)
{   
    $clientname = $params['clientname'];
    $smarty->assign('client_files', Client::client_files_list(($clientname)));
    $smarty->assign("client_files_directoy",client_directory.'/'.$params['clientname'].'/');
}

try {
	$smarty->registerPlugin("function",'user_files', 'smarty_function_user_files');
	$smarty->registerPlugin("function",'client_files', 'smarty_function_client_files');
} 
catch (Exception $e) {

}
//
?>
