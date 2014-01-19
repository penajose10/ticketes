<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->

<head>

    <meta charset="utf-8">
    <title> .:: Ticketes ::. </title> 

{block name="css"}
        <!-- For Mobiles  -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" type="text/css" href="{$css}bootstrap.css">
{/block}

{block name="js"}
        <!-- Java Script  -->
        <script src="{$js}jquery-1.10.2.min.js"></script>
        <script src="{$js}bootstrap.min.js"></script>
{/block}
</head>
<body>
   
    {block name="top_menu"}
            {include file="top_menu.tpl"}
    {/block}

    {if isset($error_message) }
    <div class="alert alert-error" >
        <button type="button" class="close" data-dismiss="alert">×</button>
       
        <strong>{$error_message}</strong> 
    </div>
    {/if}
    {if isset($info_message) }
    <div class="alert alert-info" >
        <button type="button" class="close" data-dismiss="alert">×</button>
      
        <strong>{$info_message}</strong> 
    </div>
    {/if}
    
    <div class="container">
        {block name="content"}

        {/block}
    

        
                       
    </div>
    {block name="footer"}             
            {include file="footer.tpl"}
        {/block}
</body>

</html>