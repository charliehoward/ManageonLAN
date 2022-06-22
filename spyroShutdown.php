<?php
shell_exec("sudo sh /var/www/html/scripts/spyroShutdown.sh");
header('Location: /syproShutdown.html?success=true');
?>