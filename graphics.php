<?php
    function getMessageContent($scenes, $c) {            
        $bSent = strpos($c, "-") > 0; 
        $style = $bSent ? $style = "sent-message speech-bubble-sent" : "received-message speech-bubble";
        $coor = explode("-", $c);
        $sc = findScene($scenes, $coor[0]);
        $content = $bSent ? findMenu($sc, $coor[1])['message'] : $sc['text'];
                    
        return array("style" => $style, "content" => $content);
    }

    function encodeState($morale, $attachment, $conversation, $convoMaxLen, $scene, $menuItem) {
        $base = "game.php";
        $i = $menuItem['goto'];
        $m = isset($menuItem['morale']) ? modifyNumericValue($morale, $menuItem['morale']) : $morale;
        $a = isset($menuItem['attachment']) ? modifyNumericValue($attachment, $menuItem['attachment']) : $attachment;        
        $convoLen = count($conversation);                  
        $trimmedConvo = $convoLen + 1 > $convoMaxLen ? array_slice($conversation, $convoLen - $convoMaxLen + 1) : $conversation;
        $convoBase = implode(",", $trimmedConvo);          
        $c = (strlen($convoBase) > 0 ? "$convoBase," : "").$scene['id']."-".$menuItem['id'];
        
        return "$base?i=$i&m=$m&a=$a&c=$c#l";
    }
?>