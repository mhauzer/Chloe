<?php

    function findScene($scenes, $id) {
        $result = null;
        
        foreach ($scenes as $sc)
            if ($sc['id'] == $id) {
                $result = $sc; break;
            }
    
        return $result;
    }
    
    function findMenu($scene, $id) {
        $result = null;

        foreach ($scene['menu'] as $m)
            if ($m['id'] == $id) {
                $result = $m; break;
            }
                
        return $result;
    }

    function modifyNumericValue($value, $modifier) {         
        $result = null;
        
        if (strlen($modifier) == 0)   $result = $value;   
        else if ($modifier[0] == "+") $result = $value + substr($modifier, 1);
        else if ($modifier[0] == "-") $result = $value - substr($modifier, 1);
        else $result = $modifier;
        
        return $result;
    }

    function getText($text) {
        global $lang;

        return $text[$lang];
    }
            
    $scene = isset($_GET['i']) ? findScene($scenes, $_GET['i']) : "";
    if (($scene) == "") { echo "ERROR!"; exit(1); }
    
    $conversation = isset($_GET['c']) ? explode(",", $_GET['c']) : array();
    if (count($conversation) > 0 && $conversation[0] == null) $conversation = array();
    
    $morale = modifyNumericValue($_GET['m'], $scene['morale']);
    $attachment = modifyNumericValue($_GET['a'], $scene['attachment']);
    
    if ($morale <= 0) { $scene = findScene($scenes, 404); }
    
    if (strlen(getText($scene['text'])) > 0) $conversation[] = $scene['id'];
?>