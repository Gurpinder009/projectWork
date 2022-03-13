<?php
echo " it is working";
session_start();
$_SESSION['name'] = "gurpinder singh";
echo "<a href='getSession.php'>click</a>";
session_destroy();