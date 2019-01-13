<?php
require_once 'require_once.php';
$checklist = ['Comm check', 'Fuel load check', 'Batteries at max check',
    'Space suit check', 'Landing struts retracted check'];
echo generateList($checklist);