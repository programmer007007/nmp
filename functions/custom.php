<?php

/**
 * Custom user functions.
 * You can put here your custom code.
 */


function limitText($string, $characters, $full_path, $newline = false, $displayText = "Read More")
{
    if (strlen($string) > 500) {
        $stringCut = substr($string, 0, $characters);
        $endPoint = strrpos($stringCut, ' ');
        $string = $endPoint ? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
        $append = "";
        if ($newline) {
            $append .= "<br>";
        }
        $string .= '... ' . $append . '<a class="read_more_btn" href="' . $full_path . '">' . $displayText . '</a>';
        return $string;
    }
}
add_filter('show_admin_bar', '__return_false');