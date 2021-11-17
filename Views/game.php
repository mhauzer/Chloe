<?php
    include "Resources/scenes.php";
    include "Engine/engine.php";
    include "Engine/render.php";
    
    $convoMaxLen = 5;
?>

<section id="phone-screen">    
    
        <?php 
            $msgCnt = 0;
            foreach ($conversation as $c) {
                $message = getMessageContent($scenes, $c);
                if (strlen($message['content']) > 0) {
                    $msgCnt += 1;
        ?>
        <div class="<?=$message['style']?>">
        <?php ?>
            <p><?=$message['content']?></p>
        </div>
        <?php   
                } 
            } 

            if ($msgCnt == 0) { ?>
            <p class="phone-system-message"><?=getResource("no-messages")?>
        <?php } else { ?>
        <div style="clear: both">
            <a name="l"></a>
        </div>
        <?php } ?>
    
</section>

<section id="controls">
    <nav class="panel border">        
        <?php if (count($scene['menu']) > 0) { ?>
        <h2><?=getResource("choose")?>:</h2>
            <ul>
        <?php
            foreach ($scene['menu'] as $m) {
        ?>
                <li><a href="<?=encodeState($morale, $attachment, $conversation, $convoMaxLen, $scene, $m)?>"><?=getText($m['text'])?></a></li>
        <?php
            }
        ?>
            </ul>
        <?php } ?>
    </nav>

    <?php if (strlen(getText($scene["thoughts"])) > 0) { ?>
    <aside class="panel" id="thoughts">
        <p><?=getText($scene["thoughts"])?></p>
    </aside>
    <?php } ?>

    <aside class="panel" id="player">
        <img id="character-icon" src="Images/character-icon-happy.png" alt="<?=getResource("player")?>">
        <ul id="character-stats">
            <li><img src="Images/12-eye.png" alt="<?=getResource("morale")?>"> <?= $morale ?></li>
            <li><img src="Images/29-heart.png" alt="<?=getResource("attachment")?>"> <?= $attachment ?></li>
        </ul>                            
    </aside>
    <div class="separator" />    
    <p style="margin: 8em 1em 2em 1em">[ <a href="<?=encodeSettings("index.php")?>"><?=getResource("quit")?></a> ]</p>
</section>
