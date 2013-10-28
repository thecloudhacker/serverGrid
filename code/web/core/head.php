<?php

/* FRAMEWORK SYSTEM FILE
 * Core HTML and Application head for framework.
 */
?>

<!DOCTYPE html>
<html>
    <head>
        
        <title><?php echo $myApp['appTitle']; ?></title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" value="index,follow" />
        <meta name="description" value="<?php echo $myApp['appDescription']; ?>" />
        <!-- Twitter Bootstrap -->
        <link href="/web/css/bootstrap.css" rel="stylesheet">
        <link href="/web/css/bootstrap-responsive.css" rel="stylesheet">
        <link href="/web/css/core.css" rel="stylesheet">
        <link rel="icon" type="image/ico" href="/web/img/favicon.ico">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <?php
        // If on the dashboard pages pull the graph jQuery in

        if($b == "virtualrack"){
            echo "<script type=\"text/javascript\" src=\"https://www.google.com/jsapi\"></script>";
            if($d !=""){
                $limitToServer = db::escapechars($d);
            }
            else{
                $limitToServer = false;
            }
             require_once('web/js/overviewGraphs.php');
             require_once('web/js/memLoadGraph.php');
            if(($b == "virtualrack") && ($c == "display")){
                require_once('web/js/freeSpaceGraph.php');
            }
        }
        ?>


    </head>
    <body>