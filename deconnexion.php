<?php

session_start();

unset($_SESSION['name']);
session_destroy();

require 'inc/head.php'; 


echo "You Sign Out Sccesfully <br><br><br>";


?>


<?php require 'inc/foot.php'; ?>