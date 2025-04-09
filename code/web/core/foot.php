<?php

/*
 * FRAMEWORK SYSTEM FILE
 * Page Footer and jQuery Loading
 * DB Closed at page end
 */




?>
<footer>
    <?php echo $myApp['footerInfo']; ?>
</footer>

        <!-- Bootstrap and jQuery Includes to reduce loading pauses -->
        <script src="/web/js/jquery-3.7.1.slim.min.js"></script>
        <script src="/web/js/bootstrap.min.js"></script>
    <?php
    if(($b == "virtualrack") && ($c == "display")){
    ?>
        <script type="text/javascript">
            var loadUrl = "/web/js/pingserver.php";
            var ajax_load = "<img class='probing...' src='/web/img/serverGridStackAnimationSmall.gif' alt='probing...' />";

            $("#clickForPing").click(function(){
                $("#clickForPingResult").html(ajax_load);
                $.get(
                    loadUrl,
                    {language: "php", version: 5, serverid: <?php echo $ObjSG->serverIdentToID($d);?>},
                    function(responseText){
                        $("#clickForPingResult").html(responseText);
                    },
                    "html"
                );
            });



        </script>
    <?php
    }
    db::disconnect(); // Shut down the DB connection.
    ?>
</body>
</html>
