<?php
shell_exec("sudo sh /var/www/html/scripts/3WOL.sh");
header('Location: /home.php?successwol=true');
?>