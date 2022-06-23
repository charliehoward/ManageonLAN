<?php
shell_exec("sudo sh /var/www/html/scripts/unicornWOL.sh");
header('Location: /index.php?successwol=true');
?>