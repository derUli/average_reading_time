<?php
$unit = ViewBag::get("reading_time") > 1 ? get_translation("minutes") : get_translation("minute");
translate("average_reading_time", array(
    "%minutes%" => ViewBag::get("reading_time"),
    "%unit%" => $unit
));
?>