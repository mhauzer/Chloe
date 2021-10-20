<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<?php
    include "scenes.php";
    include "engine.php";
    include "graphics.php";
    include "header.php";     
    
    $convoMaxLen = 5;
?>

    <div class="content">
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
                <?php if (count($scene['menu']) > 0) { ?>
                <p>Wybierz:</p>
                    <ul>
                <?php
                    foreach ($scene['menu'] as $m) {
                ?>
                        <li><a href="<?=encodeState($morale, $attachment, $conversation, $convoMaxLen, $scene, $m)?>"><?=$m['text']?></a></li>
                <?php
                    }
                ?>
                    </ul>
                <?php } ?>
            </div>

        
            <div class="panel" id="player">
                <p>Postać:</p>
                <ul>
                    <li>Psychika: <?= $morale ?></li>
                    <li>Przywiązanie: <?= $attachment ?></li>
                </ul>    
                <p><a href="index.php"><button>Wyjdź z gry</button></a></p>
            </div>    
        </div>
    </div>
    
<?php include "footer.php"?>