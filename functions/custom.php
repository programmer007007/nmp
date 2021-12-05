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


// save contact us form
add_action('wp_ajax_contact_leads', 'record_leads');
add_action('wp_ajax_nopriv_contact_leads', 'record_leads');
function record_leads()
{
    global $current_user, $wpdb;
    $name = trim($wpdb->_real_escape($_REQUEST["name"]));
    $email = trim($wpdb->_real_escape($_REQUEST["email"]));
    $phone = trim($wpdb->_real_escape($_REQUEST["phone"]));
    $subject = trim($wpdb->_real_escape($_REQUEST["subject"]));
    $message = trim($wpdb->_real_escape($_REQUEST["message"]));
    $messagePost = array(
        'post_title' => $name,
        'post_content' => $message,
        'post_status' => 'draft',
        'post_author' => 1,
        'post_type' => 'lead',
    );
    $wp_error = null;
    $post_id = wp_insert_post($messagePost, $wp_error);
    update_post_meta($post_id, "client_name", $name);
    update_post_meta($post_id, "phone", $phone);
    update_post_meta($post_id, "email_address", $email);
    update_post_meta($post_id, "subject", $subject);
    update_post_meta($post_id, "message", $message);
    update_post_meta($post_id, "staff_status", "Interested");
    echo json_encode(array('status' => true, "msg" => __("Your message was sent. We will get back to you shortly.", 'bricks'), 'color' => 'info', 'header' => "Info"));
    wp_die();
}