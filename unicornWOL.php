<?php
shell_exec("sudo sh /var/www/html/scripts/unicornWOL.sh");
header('Location: /home.php?successwol=true');
?>