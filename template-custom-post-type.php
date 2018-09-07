<?php /* Template Name: Full Width Custom post type */
get_header(); ?>

<div class="container">

    <div class="row">
        <div class="columns col-md-12 col-lg-12">

            <main role="main">
                <!-- section -->
                <section>

                    <h1><?php the_title(); ?></h1>

                    <?php get_template_part('content-customPost' ); // look content.php or content-SOMETHING.php?>

                </section>
                <!-- /section -->
            </main>

        </div>
    </div>

</div>

<?php get_footer(); ?>


