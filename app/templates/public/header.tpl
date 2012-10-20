<div class="container">
	<div class="row">
		<div class="span9">
			<div class="navbar navbar-inverse">
	    		<div class="navbar-inner">
	          		<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
	            		<span class="icon-bar"></span>
	            		<span class="icon-bar"></span>
	            		<span class="icon-bar"></span>
	          		</a>

	          		<div class="nav-collapse collapse">
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
</div>