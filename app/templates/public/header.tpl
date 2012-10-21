<div class="container">
	<div class="row-fluid">
		<div class="span12">
			<div class="navbar navbar-inverse">
	    		<div class="navbar-inner">
            		<ul class="nav">
			            {foreach from=$map.public key=_page item=_title}
            				{if $_page|strpos:'_'!==0}
			                    <li {if $page==$_page} class="active" {/if}>
			                    	<a href="index.php?p={$_page}">{$_title}</a>
			                    </li>
			                {/if}
			            {/foreach}
            		</ul>
	        	</div>
	      	</div>
		</div>
	</div>
</div>