<?php 
include_once(MODX_BASE_PATH.'assets/lib/Helpers/Assets.php');
$assets = AssetsHelper::getInstance($modx);
$css = $assets->registerScript('switch',
	array(
		'src' => 'assets/tvs/switch/switch.css',
		'version' => '1.0'
	)
);

$checked = (empty($field_value)) ? "" : "checked='checked'";
echo $css;
?>
<label class="switch switch-small">
<input type="checkbox" id="tv[+field_id+]" name="tv[+field_id+][]" value="1" <?php echo $checked; ?> onchange="documentDirty=true;" /><span></span>
</label>
