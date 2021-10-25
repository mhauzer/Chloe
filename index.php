<?php 
    $defaultView = "titlepage";

    include "app.php";

    ob_start();
    include "Views/$view.php";
    $content = ob_get_clean();
    include "Views/template.php";
?>
