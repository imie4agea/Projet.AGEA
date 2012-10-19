<div class="navbar">
    <div class="navbar-inner">
        <a class="brand" href="#">{$site.site_name|upper}</a>
        <ul class="nav">
            {foreach from=$map.public key=p item=navigable}
                {if $navigable==true}
                    <li {if $page==$p} class="active" {/if}><a href="{$p}">{$p|capitalize|replace:"_":" "}</a></li>
                {/if}
            {/foreach}
        </ul>
    </div>
</div>