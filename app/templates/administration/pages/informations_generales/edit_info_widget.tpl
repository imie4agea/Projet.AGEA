<div class="widget-header">
	<i class="icon-question-sign"></i>
	<h3>Informations générales :</h3>
</div>

<div class="widget-content">
	<form id="meta-infos-form" action="index.php?p=informations_generales" method="post" class="form-horizontal">
    	{foreach from=$meta_infos item=data}
            <div class="control-group">
                <label class="control-label" for="{$data.name}">{$data.label} :</label>
                <div class="controls">
                    <input class="input" id="{$data.name}" name="{$data.name}" type="text" value="{$data.value}" placeholder="{$data.label}...">
                </div>
            </div>
        {/foreach}
    </form>

    <div class="control-group" style="text-align: center;">
        <div class="controls">
			<button class="btn btn-danger">Valider</button>
        </div>
    </div>
</div>