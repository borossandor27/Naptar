<?php
require_once './Naptar.php';
$naptar = new Naptar();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Naptár</title>
    </head>
    <body>
        <h1>Naptár</h1>
        <?php
            $naptar->havi(2022, 2)

        ?>
    </body>
</html>
