{include file=public/modal/modal_login.tpl}

<div class="widget-public agea">
	<a href="{$site_url}">
		<span class="btn btn-large xlarge-btn">
			<img src="./img/logo-medium.png" alt="AGEA">
		</span>
	</a>
</div>

<header>
    {include file=public/header.tpl}
</header>


<div id="wrapper">
	<div class="container">
		{include file=$page_template}
	</div>
</div>

<footer>
	<div id="footer">
	    {include file=public/footer.tpl}
	</div>

	<div id="footer-menu">
	    {include file=public/footer_menu.tpl}
	</div>

	<div id="footer-copyright">
	    {include file=public/footer_copyright.tpl}
	</div>
</footer>