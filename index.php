
<?php    
    include "app.php";
    include "header.php";
?>

    <div id="mainmenu">
        <h1><?=getResource("title")?></h1>
        <img width=256 height=256 src="Images/heart.png">
        <br />
        <br />        
        <p><a href="<?=encodeSettings("game.php?i=2&m=80&a=100")?>"><?=getResource("start")?></a></p>
        <p><a href="<?=encodeSettings("help.php")?>"><?=getResource("help")?></a></p>
        <p><a href="<?=encodeSettings("settings.php")?>"><?=getResource("settings")?></a></p>
        <p><a href="<?=encodeSettings("about.php")?>"><?=getResource("about")?></a></p>
    </div>

<?php include "footer.php"?>