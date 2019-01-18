<?php
/*
* Build two functions, one to get an array element of configuration, and one that takes an array and builds an HTML select/option list.
*  getConfig('some config'), returns an array of allowed statuses
*  htmlSelectHtml($config), returns a string contains an HTML <select> element with the status options.
**/
// Starting Code
function getConfig($configFile, 'config_key') {
$config = include __DIR__ . '/config/' . $configFile;
return ... // fill in the rest of this statement
}
function htmlSelectHtml( $config ) {
$html = '<select>';
// loop through key / value pairs to create <option> tags ...
$html .= '</select>';
return $html;
}
