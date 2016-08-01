<?php
    $init = '<h3>Upgrade on the way...</h3>';
    $git = exec('cd .. && git pull --rebase');
    $end = '<h1>Running latest Almopuc version.</h1>';
    echo $init . $git . $end;
?>
