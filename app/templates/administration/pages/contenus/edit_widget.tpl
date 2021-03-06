<div class="widget-header">
	<i class="icon-pencil"></i>
	<h3>Modifier un contenu ({$content_type.label}) :</h3>
</div>

<div class="widget-content">
	<form id="meta-infos-form" action="index.php?p=informations_generales" method="post" class="form-horizontal">
        <div class="control-group">
            <label class="control-label" for="content_title">Titre :</label>
            <div class="controls">
                <input class="input" id="content_title" name="content_title" type="text" value="{$content.title}" placeholder="Titre...">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="content_body">Corps de texte :</label>
            <div class="controls">
                <textarea id="content_body" name="content_body" rows="10" placeholder="Corps de texte...">{$content.body}</textarea>
            </div>
        </div>

        {if $content_type.picture == true}
            <div class="control-group">
                <label class="control-label" for="content_resource_id">Image :</label>
				<div class="controls">
					<select name="content_resource_id" id="content_resource_id">
						{foreach from=$resources key=id item=resource}
							<option value="{$id}" {if $content.resource.id == $id}selected="selected"{/if}>{$resource.title|capitalize}</option>
						{/foreach}
					</select>
				</div>
            </div>
        {/if}
    </form>

    <div class="control-group" style="text-align: center;">
        <div class="controls">
			<button class="btn btn-danger">Modifier</button>
        </div>
    </div>
</div>