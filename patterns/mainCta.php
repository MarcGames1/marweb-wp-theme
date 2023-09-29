<?php
/**
 * Title: Main CTA
 * Slug: marWeb/mainCta
 * Categories: marweb
 */

$imagini = array(
    MARWEB_URL . 'assets/images/Alex_Hero_Pic.png',
    MARWEB_URL . 'assets/images/cover1.png',
   

);

?>


<!-- wp:cover {"url":"<?php echo $imagini[1] ?>","id":338,"dimRatio":50,"overlayColor":"transparent","minHeight":601,"minHeightUnit":"px","isDark":false,"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<div class="wp-block-cover is-light" style="margin-top:0px;margin-bottom:0px;min-height:601px"><span aria-hidden="true"
        class="wp-block-cover__background has-transparent-background-color has-background-dim"></span><img
        class="wp-block-cover__image-background wp-image-338" alt=""
        src="<?php echo $imagini[1] ?>"
        data-object-fit="cover" />
    <div class="wp-block-cover__inner-container"><!-- wp:columns -->
        <div class="wp-block-columns"><!-- wp:column {"width":"100%"} -->
            <div class="wp-block-column" style="flex-basis:100%"><!-- wp:columns -->
                <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
                    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%">
                        <!-- wp:heading {"textAlign":"center"} -->
                        <h2 class="wp-block-heading has-text-align-center">Hai sa vorbim despre afacerea ta</h2>
                        <!-- /wp:heading -->

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
                                <!-- wp:social-link {"url":"https://wa.me/message/D3AHVXM7YVGJK1","service":"whatsapp"} /-->
                            </ul>
                            <!-- /wp:social-links -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"width":"50%"} -->
                    <div class="wp-block-column" style="flex-basis:50%">
                        <!-- wp:group {"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group">
                            <!-- wp:image {"id":272,"sizeSlug":"full","linkDestination":"none"} -->
                            <figure class="wp-block-image size-full"><img
                                    src="<?php echo $imagini[0] ?>" alt="Alex Webdeveloper si specialist SEO"
                                    class="wp-image-272" /></figure>
                            <!-- /wp:image -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
</div>
<!-- /wp:cover -->