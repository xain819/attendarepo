<?php

// Use in the “Post-Receive URLs” section of your GitHub repo.

if ( $_POST['payload'] ) {
shell_exec( ‘sudo cd /opt/bitnami/apache2/htdocs/ && git reset –hard HEAD && git pull attenda_origin master ’ );
}

?>hi