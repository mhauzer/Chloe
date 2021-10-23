<?php
    include "app.php";
    include "header.php";
?>

<div id="mainmenu">
    <h1><?=getResource("settings")?></h1>

    <p><?=getResource("language")?>: <a href="?lang=pl">Polski</a> | <a href="?lang=en">English</a></p>

    <br />
    <p>[ <a href="<?=encodeSettings("index.php")?>">OK</a> ]</p>
</div>

<?php include "footer.php"?>