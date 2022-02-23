<?php
require_once './Naptar.php';
$naptar = new Naptar();
$year = 2022;
$month = 2;
$datum = strtotime("$year-$month-1");
require_once './Database.php';
$db = new Database();
$munkaszunetek = $db->Munkaszunetek($year);
echo '<pre>';
//print_r($munkaszunetek);
echo '</pre>';
?>
<!DOCTYPE html>
<!--

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Naptár</title>
        <link rel="stylesheet" href="Naptar.css" />
    </head>
    <body>
        <div id="sheet">
            <h1>Naptár</h1>
            <span title=""></span>
            <?php
                $naptar->havi(2022, 2);
                $naptar->havi(2022, 3);
                $naptar->havi(2022, 4);
                $naptar->havi(2022, 5);

            ?>
        </div>
    </body>
</html>
