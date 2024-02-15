<?php 

unset($_SESSION['loggedinUser']);
session_destroy();
redirec('https://akriti.online/');

?>