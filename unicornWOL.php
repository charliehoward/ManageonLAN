<?php
shell_exec("sudo sh /var/www/html/scripts/unicornWOL.sh");
header('Location: /wol.html?success=true');
?>