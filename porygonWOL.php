<?php
shell_exec("sudo sh /var/www/html/scripts/porygonWOL.sh");
header('Location: /index.html?success=true');
?>