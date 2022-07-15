<?php
shell_exec("sudo sh /var/www/html/scripts/1WOL.sh");
header('Location: /home.php?successwol=true');
?>