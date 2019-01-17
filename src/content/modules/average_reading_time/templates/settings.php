	<?php
if (Request::getVar("save")) {
    
    ?>
<div class="alert alert-success alert-dismissable fade in">
	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<?php translate("changes_was_saved")?>
		</div>
<?php
}
?>
<?php echo ModuleHelper::buildMethodCallForm("AverageReadingTime", "saveSettings");?>
<p>
	<label><?php translate("average_reading_speed");?></label>
<?php echo \UliCMS\HTML\Input::TextBox("average_reading_speed", intval(Settings::get("average_reading_speed")), "number", array("step"=>1));?>
</p>
<p>
	<small><?php translate("average_reading_speed_help")?></small>
</p>
<p>
	<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> <?php translate("save");?></button>
</p>
<?php echo ModuleHelper::endForm();?>