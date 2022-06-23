<?php
shell_exec("sudo sh /var/www/html/scripts/porygonShutdown.sh");
header('Location: /shutdown.php?successshutdown=true');
?>