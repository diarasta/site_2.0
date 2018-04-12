<?php
// Initialisation de la session.
// Si vous utilisez un autre nom
// session_name("autrenom")
session_start();
 
$db = mysqli_connect('localhost', 'root', 'yayebaye', 'blog');
$user_check_query = "DELETE FROM 'users' WHERE username='ameth'";

?>