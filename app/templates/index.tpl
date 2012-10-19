<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <meta name="apple-mobile-web-app-capable" content="yes">

        <title>{ $title|upper }</title>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/modernizr.min.js"></script>

        {if isset($css) && $css}
        <!-- CSS -->
            {foreach from=$css key=file item=media}
                <link rel="stylesheet" href="{$file}" media="{$media}" />
            {/foreach}
        {/if}
        {if isset($ie_css) && $ie_css}
            {foreach from=$ie_css key=version item=file}
                <!--[if {$version}]>
                    <link rel="stylesheet" href="{$file}" />
                <![endif]-->
            {/foreach}
        <!-- /CSS -->
        {/if}
        {if isset($less) && $less}
        <!-- LESS -->
            {foreach from=$less key=file item=media}
                <link rel="stylesheet/less" href="{$file}" media="{$media}" />
            {/foreach}
        {/if}
        {if isset($ie_less) && $ie_less}
            {foreach from=$ie_less key=version item=file}
                <!--[if {$version}]>
                    <link rel="stylesheet" href="{$file}" />
                <![endif]-->
            {/foreach}
        <!-- /LESS -->
        {/if}
        {if isset($ie_js) && $ie_js}
        <!-- JS -->
            {foreach from=$ie_js key=version item=file}
                <!--[if {$version}]>
                    <script src="{$file}"></script>
                <![endif]-->
            {/foreach}
        <!-- /JS -->
        {/if}
    </head>

    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">Votre navigateur est ancien. <a href="http://browsehappy.com/">Mettez le à jour</a> ou <a href="http://www.google.com/chromeframe/?redirect=true">installez Google Chrome Frame</a> pour pouvoir profiter de ce site.</p>
        <![endif]-->

        <!-- MODAUX -->
        {if $env_mode == 'dev'}
            {include file=modal/modal_debug.tpl}
        {/if}
        <!-- /MODAUX -->        
        {include file=$section_template}

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>

        {if isset($js) && $js}
        <!-- JS -->
            {foreach from=$js item=file}
                <script src="{$file}"></script>
            {/foreach}
        <!-- /JS -->
        {/if}
        
        <script src="js/main.js"></script>
    </body>
</html>