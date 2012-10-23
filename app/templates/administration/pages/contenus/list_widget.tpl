<div class="widget-header">
	<i class="icon-list-ul"></i>
	<h3>Liste des contenus :</h3>
</div>

<div class="widget-content">
	<table class="table">
		{foreach from=$contents key=id item=content}
			<tr>
				<td>
					<strong>{$content.title}</strong>
				</td>
				<td>
					{$content.content_type}
				</td>
				<td>
					<a href="index.php?p=contenus&amp;edit_content={$id}">
    					<i class="icon-pencil"></i>
    					Modifier
					</a>
				</td>
				<td>
					<a href="index.php?p=contenus&amp;delete_content={$id}">
    					<i class="icon-trash"></i>
    					Supprimer
					</a>
				</td>
			</tr>
		{/foreach}
		<tr>
			<form method="post" action="index.php?p=contenus&amp;add_content=true">
				<td colspan="3">
					<select name="content_type_id" id="content_type_id">
						{foreach from=$content_types key=id item=content_type}
							<option value="{$id}">{$content_type.label|capitalize}</option>
						{/foreach}
					</select>
				</td>
				<td>
					<button type="submit" class="btn btn-danger">
    					<i class="icon-plus-sign"></i>
    					Ajouter
					</button>
				</td>
			</form>
		</tr>
	</table>
</div>