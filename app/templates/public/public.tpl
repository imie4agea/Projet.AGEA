<header>
	<div class="widget-public agea">
		<a href="{$site_url}"><span class="btn btn-large xlarge-btn">
			<img src="../img/logo-medium.png" alt="AGEA">
		</span></a>
	</div>
    {include file=public/header.tpl}
</header>

<div id="page-title">
	{include file=public/title.tpl}
</div>

<div id="wrapper">
	<div class="container">
		<div class="row">
			<div class="span9">
				{include file=$page_template}
			</div>
			<div class="span3">
				{include file=public/sidebar.tpl}
			</div>
		</div>
	</div>
</div>

<div id="footer">
    {include file=public/footer.tpl}
</div>

<div id="footer-menu" class="hidden-tablet hidden-phone">
    {include file=public/footer_menu.tpl}
</div>

<div id="copyright">
    {include file=public/footer_copyright.tpl}
</div>