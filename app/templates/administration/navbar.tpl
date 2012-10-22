<div class="subnavbar">
	<div class="subnavbar-inner">
		<div class="container">
			<ul class="mainnav">
	            {foreach from=$map.administration key=_page item=_title}
    				{if $_page|strpos:'_'!==0}
	                    <li {if $page==$_page} class="active" {/if}>
	                    	<a href="index.php?p={$_page}">
								<i class="{$icons.$section.$_page}"></i>
	                    		<span>{$_title}</span>
	                    	</a>
	                    </li>
	                {/if}
	            {/foreach}
			</ul>
		</div>
	</div>
</div>