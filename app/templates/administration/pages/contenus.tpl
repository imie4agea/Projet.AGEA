<div class="row-fluid">
	<div class="span6">
		{if $add_content == true}
			<div class="widget">
				{include file=administration/pages/contenus/add_widget.tpl}
			</div>
		{elseif $edit_content == true}
			<div class="widget">
				{include file=administration/pages/contenus/edit_widget.tpl}
			</div>
		{/if}
	</div>
	<div class="span6">
		<div class="widget">
			{include file=administration/pages/contenus/list_widget.tpl}
		</div>
	</div>
  </div>
</div>