<?php
shell_exec("sudo sh /var/www/html/scripts/1Shutdown.sh");
header('Location: /home.php?successshutdown=true');
?>