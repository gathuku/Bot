<?php
$bottoken="492652041:AAGWbEthvV9jBqFcmKKzacWEaY1SRUIHNF8";
$website="https://api.telegram.org/bot".$bottoken;
$update=file_get_contents($website."/getupdates");
print_r($update);

?>