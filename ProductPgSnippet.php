// 1. Remove default WooCommerce tabs & related products below the hero
add_action( 'wp', 'sc_remove_bottom_product_defaults' );
function sc_remove_bottom_product_defaults() {
    if ( ! is_product() ) {
        return;
    }

    remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
    remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
    remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
}

// 2. Output your custom HTML directly below the standard top product section (hidden for now)
add_action( 'woocommerce_after_single_product_summary', 'sc_custom_bottom_product_html', 10 );
function sc_custom_bottom_product_html() {
    if ( ! is_product() ) {
        return;
    }
    ?>

    <div class="sc-product-custom-sections">

        <div class="full-width bg-green">
            <div class="glance margins-1300">
                <p class="gold">SPORTCANE at a Glance</p>
                <ul>
                    <li>
                        <strong>22°</strong>
                        <p>Patented Geometry</p>
                    </li>
                    <li>
                        <strong>USA</strong>
                        <p>Designed · Engineered · Assembled</p>
                    </li>
                    <li>
                        <strong>Mobility</strong>
                        <p>Engineered for Movement</p>
                    </li>
                    <li>
                        <strong>Clinical</strong>
                        <p>Orthopedic + Performance</p>
                    </li>
                </ul>
            </div>
        </div>

        <div class="full-width bg-cream">
            <div class="engineered margins-1300">
                <p class="gold">THE SPORTCANE</p>
                <strong>Most bio mechanically engineered cane in the world</strong>
                <ul>
                    <li>
                        <p>Where a conventional cane simply holds you up, SPORTCANE was designed around the mechanics of movement. Its patented 22° geometry moves the handle toward your body's midline and brings ground contact closer to your center of mass.</p>
                    </li>
                    <li>
                        <p>The result is a mobility aid with a performance-oriented design — built for people navigating recovery and everyday movement, and engineered with the same precision you'd expect from high-end athletic equipment.</p>
                    </li>
                </ul>
            </div>
        </div>

    </div>

    <?php
}