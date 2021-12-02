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


add_filter('wp_insert_post_data', 'filter_post_data', '99', 2);
function filter_post_data($data, $postarr)
{
    // Change post title
    //$data['post_title'] .= '_suffix';
    return $data;
}

add_filter('pods_api_pre_save_pod_item_project', 'my_pre_save_function', 10, 2);
function my_pre_save_function($pieces, $is_new_item)
{
    $pieces['fields']['my_field']['value'] = "some value";
    $project_desc = $pieces['fields']['project_description']->value;
    $project_id = $pieces['params']->id;
    $my_post = array(
        'ID' => $project_id,
        'post_content' => $project_desc,
    );
    wp_update_post($my_post);
    return $pieces;
}