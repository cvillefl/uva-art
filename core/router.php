<?php
function route($path) {

    /**
     * Get the name of the module (without .php extension)
     *      
     *   - If no extended path info exists, assume home
     *   - Otherwise, take the most specific path info to be the module
     *     name.  (the last "folder" in the URL query string)
     *       - If this value is not alphanumeric + hyphens, go to 404 page     
     *        
     */                             
    $module = (!isset($path[0]) || $path[0] == '' || $path[0] == 'home' 
                  ? 'home' 
                  : (ctype_alnum(str_replace('-', '', end($path))) && (ctype_alnum(str_replace('-', '', $path[0])))
                       ? ($path[0] == 'faculty' ? 'faculty/faculty' : ($path[0]=='phd-program' && $path[1]=='current-students' ? 'phd-program/current-students' : $path[0] . '/' . end($path)))
                       : '404'));

    if ($path[1] == 'ruffin-gallery') {
        $module = $path[0] . '/' . $path[1];
    }

    /**
     * Check that this module actually exists     
     * 
     */
    if (file_exists(dirname(__FILE__) . '/../modules/' . $module . '.php')) {
        include_once dirname(__FILE__) . '/../modules/'.$module.'.php';
    } else {
        include_once dirname(__FILE__) . '/../modules/404.php';
    }
}
?>