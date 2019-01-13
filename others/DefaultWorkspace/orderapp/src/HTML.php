<?php
/**
 * HTML Functions (Functions that build HTML elements)
 */

/**
 * @param $items
 * @param null $selected
 * @param bool $all_option
 * @param null $nameAttr
 * @return string
 */
function getSelectHTML($items, $selected = null, $all_option = false, $nameAttr = null)
{
    // Initialize
    $list = $chosen = null;

    // Set the start tag
    $list .= "<select name=\"$nameAttr\">";

    // Provide all option
    if ($all_option) $list .= '<option value="all">All</option>';

    // Iterate the options for selected status
    foreach ($items as $key => $item) {
        $chosen = (is_array($selected) && in_array($item, $selected)) ? 'selected' : null;
        $list .= "<option value=\"$key\" $chosen>" . ucfirst($item) . "</option>";
    }

    return $list .= '</select>';
}