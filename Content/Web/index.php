<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/base_calendar_style.css" />
        <title></title>
    </head>
    <body>
        
        <?php
            include   '../Conf/Include.php';
            
            $calendar = new SivarApi\Tools\Calendar();
            
            print $calendar->output_calendar(2015, 01 , 'calendar');


        ?>
    </body>
</html>
