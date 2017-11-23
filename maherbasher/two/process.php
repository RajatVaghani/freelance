<?php
    $data = $_POST['firstname'] . '-' . $_POST['email'] . '-' . $_POST['phone1'] . '-' . $_POST['accept'] . "\n";
    $ret = file_put_contents('inputs.txt', $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        header('Location: http://google.com');
    }


?>
