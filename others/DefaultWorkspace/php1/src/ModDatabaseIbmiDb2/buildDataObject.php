<?php

require 'Data.php';

$user = new Data('George');
$user->setData('cool stuff', 'really cool stuff');

echo $user->getDisplayData();