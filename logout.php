<?php
session_start();
session_destroy();

include "./components/shapka.php";
print ("Вы вышли");
include "./components/footer.php";
?>