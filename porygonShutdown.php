<?php
shell_exec("sudo sh /var/www/html/scripts/porygonShutdown.sh");
header('Location: /index.php?successshutdown=true');
?>