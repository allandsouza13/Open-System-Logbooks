<?php
if (stripos($_SERVER["HTTP_USER_AGENT"], "MSIE") !== false || stripos($_SERVER["HTTP_USER_AGENT"], "Trident") !== false) {
    echo "You are using Internet Explorer<br/>";
} else {
    echo "Why are you not using Internet Explorer?<br/>";
}
?>
