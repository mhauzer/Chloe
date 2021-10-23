<?php 
    include "app.php";
    include "header.php";
?>

<div id="mainmenu">
    <h1><?=getResource("help")?></h1>

    <?php if ($lang == "pl") { ?>
    
    <p>Polski tekst instrukcji. Do zrobienia</p>
    
    <?php } else { ?>

    <p>English help. TODO</p>
    
    <?php } ?>

    <p>[ <a href="<?=encodeSettings("index.php")?>">OK</a> ]</p>
</div>

<?php include "footer.php"?>