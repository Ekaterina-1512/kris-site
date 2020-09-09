<?php
session_start();
session_destroy();

include "./components/shapka.php";
print ("Досвидания!");
include "./components/footer.php";
?>