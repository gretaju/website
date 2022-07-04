<?php /* Template name: expertises */
get_header();
?>

<section class="section">
    <div class="container">
        <h3 class="section-title mb-4">Expertises</h3>
        <div class="row text-center">
            <?php
            if (have_posts()) {

                while (have_posts()) {

                    the_post();
                    the_content();
                }
            }
            ?>
        </div>
    </div>
</section>

<?php
get_footer();
?>