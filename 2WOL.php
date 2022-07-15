<?php
shell_exec("sudo sh /var/www/html/scripts/2WOL.sh");
header('Location: /home.php?successwol=true');
?>