<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'Telefone.php';
        
        $galaxys = new Telefone();
        var_dump($galaxys);
        
        $galaxys->ligar();
        $galaxys->abrirMenu();
        $galaxys->setBotaoVolume(11);
        ?>
    </body>
</html>
