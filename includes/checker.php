<?php
    setcookie('user', 'yes', time() + 3600, '/');
    header('Location: /');
?>