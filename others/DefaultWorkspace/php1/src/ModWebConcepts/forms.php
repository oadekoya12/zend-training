<?php
/**
 * Form Functions (Functions that are specific for building HTML forms)
 */

/**
 * @param $config
 * @param $name
 * @param null $conn
 * @param null $selected
 * @return string
 */
function getForm($config, $name, $conn = null, $selected = null)
{
    $form = getStartTag($config['forms'][$name]);
    $form .= getElements($config, $name, $conn, $selected);
    $form .= '</form>';
    return $form;
}

/**
 * @param $config
 * @return string
 */
function getStartTag($config)
{
    $tag = '<form ';
    foreach ($config as $key => $value) {
        if ($key === 'elements') continue;
        $tag .= " $key=\"$value\"";
    }
    return $tag .= '>';
}

/**
 * @param $config
 * @param $name
 * @param null $conn
 * @param $selected
 * @return null|string
 */
function getElements($config, $name, $conn = null, $selected = null)
{
    $html = null;
    $form = $config['forms'][$name];

    // Iterate over form elements, building each element
    foreach ($form['elements'] as $key => $value) {
        $html .= isset($value['label']) ? "<label>{$value['label']}</label>" : null;
        $divclass = isset($value['divclass']) ? "class=\"{$value['divclass']}\"":null;
        switch ($value['type']) {
            case 'text':
                $html .= "<div $divclass><input type=\"text\" class=\"{$value['class']}\" name=\"{$value['name']}\" size=\"{$value['size']}\"/></div>";
                break;
            case 'textarea':
                $html .= "<div $divclass><textarea class=\"{$value['class']}\" name=\"{$value['name']}\" cols=\"{$value['cols']}\" rows=\"{$value['rows']}\"></textarea></div>";
                break;
            case 'select':
                if (isset($config[$value['name']]) && is_array($config[$value['name']])){
                    // Get the list from config
                    $html .= "<div $divclass>" . getSelectHTML($config[$value['name']], $selected, $value['all_option'], $value['name']) . '</div>';
                } elseif (array_key_exists('table', $value) && $conn) {
                    // Get the list from the db
                    $function = "get" . ucfirst($value['table']) . 'Select';
                    $html .= "<div $divclass>" . $function($conn) . '</div>';
                }
                break;
            case 'submit':
                $html .= "<div $divclass><input type=\"{$value['type']}\" class=\"{$value['class']}\" value=\"{$value['value']}\"/></div>";
                break;
        }
    }
    return $html;
}


