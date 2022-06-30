<?php
shell_exec("sudo sh /var/www/html/scripts/porygonShutdown.sh");
header('Location: /home.php?successshutdown=true');
?>