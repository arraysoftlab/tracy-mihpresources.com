<?php
/**
 * Plugin Name: Gravity Forms To Custom Post Type
 * Plugin URI: http://www.arraysoftlab.com
 * Description: Generate Custom Post Type Data from Gravity Forms submission
 * Version: 1.0
 * Author: arraysoftlab
 */

$current_form_id = 1;
add_action("gform_after_submission_$current_form_id", "after_submission", 10, 2);
function after_submission($entry, $form) {
    $post_id = wp_insert_post(
        array(
            'post_title' => wp_strip_all_tags($entry[1]),
            'post_content' => '',
            'post_type' => 'programs',
            'post_status' => 'draft'
        )
    );
    foreach($form['fields'] as $field) {
        add_post_meta($post_id, $field['label'], $entry[$field['id']], true);
    }
}

add_action('load-post.php', 'gf_post_meta_boxes_setup');
add_action('load-post-new.php', 'gf_post_meta_boxes_setup');
function gf_post_meta_boxes_setup() {
    add_action( 'add_meta_boxes', 'gf_add_post_meta_boxes' );
}

function gf_add_post_meta_boxes() {
    add_meta_box(
        'program-profile',
        'Submitted Information',
        'gf_post_class_meta_box',
        'programs',
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
            padding: 5px 0px;
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

/*add_filter("gform_pre_render_$current_form_id", "lead_organization");
function lead_organization($form){
    foreach($form['fields'] as $field){
        if($field['label'] != 'Lead Organization')
            continue;
        // you can add additional parameters here to alter the posts that are retreieved
        // more info: http://codex.wordpress.org/Template_Tags/get_posts
        $posts = get_posts('numberposts=-1&post_status=publish');
        // update 'Select a Post' to whatever you'd like the instructive option to be
        $choices = array();
        foreach($posts as $post){
            $choices[] = array('text' => $post->post_title, 'value' => $post->post_title);
        }
        $field['choices'] = get_terms('lead-organization');
    }
    return $form;
}*/