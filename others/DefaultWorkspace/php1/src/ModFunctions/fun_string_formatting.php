<?php
// Columns = firstName, lastName, speciality
// Build an SQL query with placeholders, values provided individually
$query = sprintf("INSERT INTO $table astronaut VALUES ('%s', '%s', '%s')", 'Mark', 'Watney', 'Botanist');
echo $query;

// Build a query with placeholders, values provided by array
$astronaut = ['Mark', 'Watney', 'Botanist'];
$query = vsprintf("INSERT INTO $table astronaut VALUES ('%s', '%s', '%s')", $astronaut);
echo $query;

