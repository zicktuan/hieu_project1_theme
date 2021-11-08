<?php

abstract class PageTemplateAbstract
{
    protected $checkPage = false;

    public $pageSettingId = false;

    public function __construct($pageID)
    {
        $this->pageID = $pageID;
        $this->getSettingTemplate();
    }

    abstract function getSettingTemplate();
    abstract function loadTemplate();
}