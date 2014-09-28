<?php
/**
 * Plugin Name: Gravity Forms To Custom Post Type
 * Plugin URI: http://www.arraysoftlab.com
 * Description: Generate Custom Post Type Data from Gravity Forms submission
 * Version: 1.0
 * Author: arraysoftlab
 */

$current_form_id = 3;
$current_post_type = 'programs';
$agency_field_id = 4;
add_action("gform_after_submission_$current_form_id", "after_submission", 10, 2);
function after_submission($entry, $form) {
    global $current_post_type, $agency_field_id;
    $post_id = wp_insert_post(
        array(
            'post_title' => wp_strip_all_tags($entry[1]),
            'post_content' => '',
            'post_type' => $current_post_type,
            'post_status' => 'draft'
        )
    );
    foreach($form['fields'] as $field) {
        if($field['id'] == $agency_field_id) {
            wp_set_post_terms($post_id, $entry[$field['id']], 'agency');
        } else {
            add_post_meta($post_id, $field['label'], $entry[$field['id']], true);
        }
    }
}

add_action('load-post.php', 'gf_post_meta_boxes_setup');
add_action('load-post-new.php', 'gf_post_meta_boxes_setup');
function gf_post_meta_boxes_setup() {
    add_action( 'add_meta_boxes', 'gf_add_post_meta_boxes' );
}

function gf_add_post_meta_boxes() {
    global $current_post_type;
    add_meta_box(
        'program-profile',
        'Submitted Information',
        'gf_post_class_meta_box',
        $current_post_type,
        'normal',
        'default'
    );
}

function gf_post_class_meta_box($post) {
    global $current_form_id;
    $data = get_post_meta($post->ID);
    $form = GFAPI::get_form($current_form_id);
    foreach($form['fields'] as $field) {
        $label = $field['label'];
        $value = $data[$field['label']][0];
        echo "<label>$label</label><span>$value</span>";
    }
    ?>
    <style type="text/css">
        #program-profile .inside label,
        #program-profile .inside span {
            display: inline-block;
            padding: 5px 0;
        }
        #program-profile .inside label {
            width: 20%;
            font-weight: bold;
        }
        #program-profile .inside span {
            width: 80%;
        }
    </style>
    <?php
}