<?php
// Setting a persistent cookie
setcookie('myCookie', 'some value');

// Remove a cookie 1 hour after receipt
setcookie('myCookie', 'some value', time() + 3600);

foreach (getallheaders() as $name => $value) {
    echo "$name: $value <br/>";
}