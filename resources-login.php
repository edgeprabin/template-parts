<?php
/**
 * The template for displaying singular post-types: posts, pages and user-defined custom post types.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
?>
<?php
while ( have_posts() ) :
    the_post();
    ?>

<main <?php post_class( 'site-main' ); ?> role="main">
    <div class="page-content">
        <section class="has_eae_slider elementor-section elementor-top-section elementor-element elementor-element-74ac1360 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle">
            <div class="elementor-container elementor-column-gap-default">
                <div class="has_eae_slider elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6b3712a9">
                    <div class="elementor-widget-wrap elementor-element-populated">
                         <div class="elementor-element elementor-widget elementor-widget-heading">
                            <h1 class="elementor-heading-title">Resources</h1>
                        </div>
                        <div class="elementor-element elementor-widget elementor-widget-jet-search">
                            <div class="elementor-widget-container">
                                <div class="elementor-jet-search jet-blocks">
                                    <div class="jet-search">
                                        <?= !empty($_POST['ac']) ? '<h6>Incorrect! Please try again</h6>' : '' ?>
                                        <form role="search" method="post" class="jet-search__form" action="/resources">
                                            <label class="jet-search__label">
                                                <input type="search" class="jet-search__field" placeholder="Access Code" value="" name="ac">
                                            </label>
                                            <button type="submit" class="jet-search__submit"><div class="jet-search__submit-label">Enter</div></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

    <?php
endwhile;
