<?php
echo "getSession";
session_start();

print_r($_SESSION);
session_reset();
session_destroy();


?>