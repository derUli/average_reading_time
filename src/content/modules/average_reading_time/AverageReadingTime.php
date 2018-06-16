<?php

class AverageReadingTime extends MainClass
{

    const MODULE_NAME = "average_reading_time";

    const AVERAGE_READING_SPEED = 300;

    public function render()
    {
        $page = get_page();
        $content = unhtmlspecialchars(strip_tags($page["content"]));
        $wordCount = str_word_count($content);
        
        $averageReadingSpeed = intval(Settings::get("average_reading_speed"));
        
        $readingTime = ceil($wordCount / $averageReadingSpeed);
        ViewBag::set("reading_time", $readingTime);
        return Template::executeModuleTemplate(self::MODULE_NAME, "reading_time.php");
    }

    public function settings()
    {
        return Template::executeModuleTemplate(self::MODULE_NAME, "settings.php");
    }

    public function saveSettingsPost()
    {
        Settings::set("average_reading_speed", Request::getVar("average_reading_speed", 0, "int"));
        Request::redirect(ModuleHelper::buildAdminURL(self::MODULE_NAME, "save=1"));
    }

    public function getSettingsHeadline()
    {
        return get_translation("average_reading_time_module");
    }
}