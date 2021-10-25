<?php
    include "scenes.php";
    include "engine.php";
    include "graphics.php";
    
    $convoMaxLen = 5;
?>

<div class="column">    
    <div class="panel" id="scroll">
        <?php foreach ($conversation as $c) {
            $message = getMessageContent($scenes, $c);
            if (strlen($message['content']) > 0) {                                   
        ?>
        <div class="<?=$message['style']?>">
        <?php ?>
            <p><?=$message['content']?></p>
        </div>
        <?php } } ?>
        <div style="clear: both">
            <a name="l"></a>
        </div>
    </div>
</div>

<div class="column">
    <div class="panel">
        <nav>
        <?php if (count($scene['menu']) > 0) { ?>
        <p><?=getResource("choose")?>:</p>
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
    </div>


    <div class="panel" id="player">
        <p><?=getResource("player")?>:</p>
        <ul>
            <li><?=getResource("morale")?>: <?= $morale ?></li>
            <li><?=getResource("attachment")?>: <?= $attachment ?></li>
        </ul>                    
    </div>    
    <p style="margin-left:1em">[ <a href="<?=encodeSettings("index.php")?>"><?=getResource("quit")?></a> ]</p>
</div>
