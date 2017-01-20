<!DOCTYPE html>
<html lang="en">
<head>
<?php  include ("include/head.php"); ?>
</head>

<body>
<?php include "include/navbar.php"; ?>


<?php

include "sayfalar/calismalar.php";

?>







<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script>
    $("#sol_menu_ac").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        $(".sol_menu_ac").toggleClass("sol_menu_ac_active");
    });
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
</body>
</html>
