<?php
$emailAddress = 'b(o)b@example.com';

if(filter_var( $emailAddress, FILTER_VALIDATE_EMAIL)) {
    echo "$emailAddress seems legit <br/>";
} else {
    echo filter_var($emailAddress, FILTER_SANITIZE_EMAIL);
}