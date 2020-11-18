<?php

defined('XOOPS_ROOT_PATH') || die('Restricted access');

// *****************Change:  nocommentsCorePreload to your module name. Eg.: mymoduleCorePreload********************
class nocommentsCorePreload extends XoopsPreloadItem
{
    public function eventCoreHeaderAddmeta()
    {
        global $xoTheme;
        $moduleHandler = xoops_getHandler('module');
        //******************** CHANGE FOLDER NAME TO YOUR MODULE **************************
        $module        = $moduleHandler->getByDirname('nocomments');
        $configHandler = xoops_getHandler('config');

        $xoTheme->addScript('browse.php?Frameworks/jquery/jquery.js');
        $xoops_url = XOOPS_URL;

        $script = "
var nocomments = jQuery.noConflict();
var meta;
if (document.getElementsByTagName) {
meta = document.getElementsByTagName('meta')[0];
if (meta) {
meta.name = 'Author';
meta.content = 'Kibo';
}
}
";

        //******************** CHANGE FOLDER NAME TO YOUR MODULE **************************

        $xoTheme->addScript('', '', $script);
        $xoTheme->addScript(XOOPS_URL . '/modules/nocomments/js/nocomments_toogle.js');
        $xoTheme->addScript(XOOPS_URL . '/modules/nocomments/js/nocomments_toogle2.js');
    }
}
