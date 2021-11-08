<?php

class PageTemplateInit
{
    static $getInstance = null;

    public static function getInstance()
    {
        if (!(self::$getInstance instanceof self)) {
            self::$getInstance = new self();
        }
        return self::$getInstance;
    }

    public function incModule() {
        $listHandleTemplate = [
            "ProductTemplate.php", 
        ];
        $parseUri = str_replace('\\', '/', get_template_directory_uri());
        foreach ($listHandleTemplate as $value) {
            echo $parseUri . '/inc/params/template/' . $value;
            include $parseUri . '/inc/params/template/' . $value;
        }
    }

    /**
     * Handle init page for theme
     *
     * @param integer $pageID
     * @return void
     */
    public function Init( $pageID ) {
        // $this->incModule();
        $pageSet[] = new ProductTemplate($pageID);
        $argsPages = [];
        

        // foreach ($pageSet as $objectTpl) {
        //     echo 31312;
        //     print_r($objectTpl);
        //     $argsPages[] = $objectTpl->pageSettingId;
        //     if( $pageID == $objectTpl->pageSettingId ) {

        //         get_header();
        //         $objectTpl->loadTemplate();
        //         get_sidebar();
        //         get_footer();

        //     }
        // }

        // Load default page if condition not match.
        // if( !in_array($pageID, $argsPages) ) {
        //     get_header();
        //     get_template_part('page','content');
        //     get_sidebar();
        //     get_footer();
        // }
    }

    

    function hide_admin_bar(){ return false; }
    function show_admin_bar(){ return true; }
}
