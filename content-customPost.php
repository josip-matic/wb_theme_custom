<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // pagination
$args = array(
'post_type' => 'html5-blank',
'posts_per_page' => 5,
'orderby'=>'date',
'paged'=>$paged     /* how many pages you have */
// Several more arguments could go here. Last one without a comma.
);

// Query the posts:
$custom_post_query = new WP_Query($args); ?>

<?php if ($custom_post_query->have_posts()):

    while ($custom_post_query->have_posts()) : $custom_post_query->the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <h2>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>
            <?php the_content(); ?>

            <?php edit_post_link(); ?>

        </article>

    <?php endwhile; ?>

<?php else: ?>

    <!-- article -->
    <article>

        <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

    </article>
    <!-- /article -->

<?php endif; ?>

<?php // Reset Post Data ?>
<?php wp_reset_postdata(); ?>

<div class="pagination_wrapper">
    <!-- Pagination Start -->

    <?php
    global $custom_post_query;

    $big = 999999999; // need an unlikely integer

    echo paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $custom_post_query->max_num_pages
    ) );

    wp_reset_postdata();
    ?>
    <!-- Pagination End -->
</div>