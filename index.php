<!DOCTYPE html>

<?php
            
     $SERVER_DIR = getcwd();
     $ARRAY_DIR = explode("\\", $SERVER_DIR);
     $DIR_NAME = $ARRAY_DIR[count($ARRAY_DIR)-1];
     header("Cache-Control: no-cache");
     header("Pragma: no-cache");
     header("Location: /$DIR_NAME/Content/index.php" );          
?>

