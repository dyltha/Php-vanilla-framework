<?php

/**
 * 
 *  @title : 
 *  @author : Mathieu LEBRUN
 *  @author : Antoine DELAUNAY
 *  @author : Matthis HOULES
 * 
 *  @brief : 
 * 
 */

    $listStyles = [];
    $listJS = [];

    ob_start();

?>





<?php

    $content = ob_get_clean();

    require_once(__DIR__.'/../templateUser.php');


?>