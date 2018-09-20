<?php

if(password_verify($_POST['password'], '$2y$10$l0HdvUusZt8n6O6qEE2ixOriNiL4dUu6nM1t1RgthbwTwmVQ55ENm') && ($_POST['username'] == 'patrickkenyon')) {
    header('Location: account.php');
} else {
    header('Location: index.php');
}

