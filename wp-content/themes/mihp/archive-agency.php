<?php
/**
 * Template Name: Agency Archive
 */

get_header();
$taxonomy = 'agency';
$terms = get_terms($taxonomy,
    array(
        'hide_empty' => 0
    )
);
print_r($terms);
foreach($terms as $term) {
    $query = new WP_Query(array(
        'post_type' => 'programs',
        'tax_query' => array(
            array(
                'taxonomy' => $taxonomy,
                'field'    => 'id',
                'terms'    => $term->term_id
            ),
        )
    ));
    ?>
    <?php if ( $query->have_posts() ) : ?>
        <h2><a href="<?php echo esc_url(get_term_link($term)) ?>"><?php echo $term->name ?></a></h2>
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <h2><?php the_title(); ?></h2>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>
<?php
}

get_footer();