<?php
$astronaut = ['firstname' => 'Mark', 'lastname' => 'Watney', 'mi' => null];
$ln = $astronaut['lastname'] ?? 'not applicable';
echo $ln;

// equivalent to: $ln = isset($user['lastname']) ? $user['lastname'] : null;