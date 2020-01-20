<?php

// Use in the “Post-Receive URLs” section of your GitHub repo.

if ( $_POST['payload'] ) {
    shell_exec('sudo su');
    shell_exec(‘cd /jet/www/default/partymania && git reset –hard HEAD && git pull’);
}
?>hi