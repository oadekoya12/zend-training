<?php
function htmlTable(string $title = 'Hours', array $worked) {
    $html = '<table><thead>';
    $html .= "<tr><th colspan=\"2\">$title</th></tr>";
    $html .= '</thead><tbody>';
    foreach($worked as $day => $hours){
        $html .= "<tr><th>$day</th>";
        $html .= "<td style=\"text-align:right;\">$hours</td>";
        $html .= '</tr>';
    }
    $html .= '</tbody></table>';
    return $html;
}
$worked = ['Monday' => 8, 'Tuesday' => 4, 'Wednesday' => 1, 'Thursday' => 6, 'Friday' => 9];
echo htmlTable('Hours Worked', $worked);