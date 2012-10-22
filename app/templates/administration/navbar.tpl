<div class="subnavbar">
	<div class="subnavbar-inner">
		<div class="container">
			<ul class="mainnav">
	            {foreach from=$pages item=_page}
    				{if $_page.name|strpos:'_' !== 0 && $_page.section.name == $page.section.name}
	                    <li {if $page.name==$_page.name} class="active" {/if}>
	                    	<a href="index.php?p={$_page.name}">
								<i class="{$_page.icon}"></i>
	                    		<span>{$_page.title}</span>
	                    	</a>
	                    </li>
	                {/if}
	            {/foreach}
			</ul>
		</div>
	</div>
</div>