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
        $a=$_REQUEST['age'];
       
        if ($a >= 18)
        
            echo "you can vote";
        else {
            echo "you cannot vote";
        }
        
        ?>
    </body>
</html>
