<?php

class ProductTemplate extends PageTemplateAbstract
{

    public function __construct($pageID)
    {
        parent::__construct($pageID);
        echo 31321;die;
    }

    public function getSettingTemplate(){
        global $GMOPlugin;
        $this->pageSettingId = $GMOPlugin->Product()->settingProduct->getListProductId();
    }

    public function loadTemplate()
    {
        if ($this->pageSettingId == $this->pageID) {
            get_template_part('templates/archive', 'Product');
        }
    }
}
