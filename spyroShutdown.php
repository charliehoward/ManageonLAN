<?php
shell_exec("sudo sh /var/www/html/scripts/spyroShutdown.sh");
header('Location: /shutdown.html?success=true');
?>