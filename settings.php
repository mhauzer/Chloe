<?php
    include "app.php";
    include "header.php";
?>

<div id="mainmenu">
    <h1><?=getResource("settings")?></h1>

    <p><?=getResource("language")?>: <a href="?lang=pl">Polski</a> | <a href="?lang=en">English</a></p>

    <br />
    <?php include "ok.php"?>
</div>

<?php include "footer.php"?>