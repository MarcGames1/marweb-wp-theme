<?php
/**
 * Title: Hero Section
 * Slug: marWeb/hero
 * Categories: marweb
 */

$imagini = array(
    MARWEB_URL . 'assets/images/Alex_Hero_Pic.png',
   

);

?>


<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"0","bottom":"0"}}},"gradient":"background-gradients","layout":{"type":"constrained","contentSize":"1180px"}} -->
<section class="wp-block-group has-background-gradients-gradient-background has-background"
    style="padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)">
    <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|70","left":"var:preset|spacing|70"},"margin":{"top":"0px","bottom":"0px"}}}} -->
    <div class="wp-block-columns" style="margin-top:0px;margin-bottom:0px">
        <!-- wp:column {"verticalAlignment":"center","width":"40%","style":{"spacing":{"padding":{"right":"1rem","left":"1rem"}}}} -->
        <div class="wp-block-column is-vertically-aligned-center"
            style="padding-right:1rem;padding-left:1rem;flex-basis:40%">
            <!-- wp:post-title {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"large"} /-->

            <!-- wp:paragraph -->
            <p><em>Te ajutăm să-ți&nbsp;crești veniturile&nbsp;și să obții notorietate în mediul online prin
                    optimizarea site-ului pentru motoarele de căutare.</em></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph -->
            <p><em>Vrei să-ți&nbsp;crești numărul vizitelor pe site&nbsp;fără să investești bugete enorme în
                    reclame?</em></p>
            <!-- /wp:paragraph -->

            <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
            <div class="wp-block-group"><!-- wp:buttons -->
                <div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"luminous-vivid-orange"} -->
                    <div class="wp-block-button"><a
                            class="wp-block-button__link has-luminous-vivid-orange-background-color has-background wp-element-button"
                            href="https://calendly.com/alexandru-marcu/consultanta-gratuita?month=2023-09"
                            target="_blank" rel="noreferrer noopener">Programeaza O Intalnire</a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->

                <!-- wp:social-links {"openInNewTab":true,"showLabels":true,"layout":{"type":"flex","justifyContent":"center"}} -->
                <ul class="wp-block-social-links has-visible-labels">
                    <!-- wp:social-link {"url":"https://wa.me/message/D3AHVXM7YVGJK1","service":"whatsapp"} /--></ul>
                <!-- /wp:social-links -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"><!-- wp:image {"id":272,"sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full"><img
                    src="<?php echo $imagini[0] ?>" alt="Alex Webdeveloper si specialist SEO"
                    class="wp-image-272" /></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</section>
<!-- /wp:group -->