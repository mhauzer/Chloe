<?php    
    include "resources.php";
    
    $lang = isset($_GET['lang']) ? $_GET['lang'] : "pl";
    
    $res = $resources;
    
    function getResource($id) {
        global $lang, $res;        
            
        return $res[$id][$lang];
    }

    function encodeSettings($url) {
        global $lang;

        $op = strchr($url, '?') ? "&" : "?";

        return $url.$op."lang=".$lang;
    }
?>