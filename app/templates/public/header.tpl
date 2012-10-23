<div class="container">
	<div class="row-fluid">
		<div class="span12">
			<div class="navbar navbar-inverse">
	    		<div class="navbar-inner">
            		<ul class="nav">
			            {foreach from=$pages item=_page}
		    				{if $_page.name|strpos:'_' !== 0 && $_page.section.name == $page.section.name}
			                    <li {if $page.name==$_page.name} class="active" {/if}>
			                    	<a href="index.php?p={$_page.name}">{$_page.title}</a>
			                    </li>
			                {/if}
			            {/foreach}
			            {if $page.section.name == 'membre'}
				            <li>
				            	<a href="index.php?p=accueil">Retour à l'accueil</a>
			            	</li>
		            	{/if}
            		</ul>
	        	</div>
	      	</div>
		</div>
	</div>
</div>