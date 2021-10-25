<?php 
    include "app.php";
    include "header.php";
?>

<div id="mainmenu">
<h1>Chloe Vilo</h1>
<p><?=getResource("created-by")?></p>

<h2>Cold Lips Productions</h2>

<ul style="text-align: left">
<li>Kamila Hauzer - <?=getResource("game-design")?></li>
<li>Michał Hauzer - <?=getResource("coding")?></li>
<li>Nikola Sas - <?=getResource("english-translation")?></li>
</ul>
<p>&copy; 2021</p>
<br />
<?php include "ok.php"?>
</div>

<p style="text-align: right;margin-right:1em;color:gray"><?php include "VERSION"?></p>
