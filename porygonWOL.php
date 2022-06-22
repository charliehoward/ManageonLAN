<?php
shell_exec("/var/www/html/scripts/porygonWOL.sh");
header('Location: /index.html?success=true');
?>
