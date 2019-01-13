<?php
function generateList(array $elements, bool $ordered = true){
    $list = $ordered ? '<ol>' : '<ul>';
    foreach($elements as $element){
        $list .= "<li>$element</li>";
    }
    return $ordered ? $list . '</ol>' : $list . '</ul>';
}