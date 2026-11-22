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

      <div class="full-width bg-white">
          <div class="geometry margins-1300">
              <p class="gold">22° Geometry</p>
              <strong>Designed around the mechanics of movement.</strong>
              <p>The 22° inward curve brings the handle toward your midline and aligns ground contact more closely with your center of mass — helping direct load more vertically and reducing lateral shear compared with a straight cane.</p>
              <ul>
                  <li>
                    <img src="https://www.sportcane.com/wp-content/uploads/2026/11/geometryDiagram1.png" alt="conventional cane">
                  </li>
                  <li>
                    <img src="https://www.sportcane.com/wp-content/uploads/2026/11/geometryDiagram2.png" alt="sportcane">
                  </li>
              </ul>
          </div>
      </div>

      <div class="full-width bg-cream">
          <div class="movement margins-1300">
              <p class="gold">Engineered for Movement</p>
              <strong>How the design works.</strong>
              <ul>
                  <li>
                      <strong>01</strong>
                      <p><strong>FORWARD SUPPORT</strong></p>
                      <p>Positioned forward in the walking pattern rather than beside the hip.</p>
                  </li>
                  <li>
                      <strong>02</strong>
                      <p><strong>Load Distribution</strong></p>
                      <p>Intended to direct load more vertically through weight-bearing movement.</p>
                  </li>
                  <li>
                      <strong>03</strong>
                      <p><strong>Machined Joint</strong></p>
                      <p>A precision-machined connection between shaft sections.</p>
                  </li>
              </ul>
          </div>
      </div>

      <div class="full-width bg-white">
          <div class="purpose margins-1300">
              <div class="purpose__left">
                <p class="gold">Specifications</p>
                <strong>Built with purpose.</strong>
                <p>Fields marked pending will be populated with client-confirmed measurements.</p>
                <img src="https://www.sportcane.com/wp-content/uploads/2026/08/MadeinUSABadge.png" alt="Made in the U.S.A.">
              </div>
              <div class="purpose__right">
                <ul>
                  <li><small>PRODUCT</small><strong>SPORTCANE</strong></li>
                  <li><small>MATERIAL</small><strong>Aircraft-grade steel (chromoly)</strong></li>
                  <li><small>LOAD CAPACITY</small><strong>Tested &gt;1,000 lbs</strong></li>
                  <li><small>SIZES</small><strong>Regular: 33&ndash;37&quot; &middot; Tall: 36&ndash;40&quot;</strong></li>
                  <li><small>WEIGHT</small><strong>Approx. 16 oz</strong></li>
                  <li><small>MANUFACTURING</small><strong>Designed, engineered &amp; assembled in the USA</strong></li>
                  <li><small>JOINT</small><strong>Machined joint</strong></li>
                  <li><small>INTENDED USE</small><strong>Everyday mobility aid and post-surgical/injury recovery</strong></li>
                  <li><small>MOQ</small><strong>10 units</strong></li>
                </ul>
              </div>
          </div>
      </div>

      <div class="full-width bg-black">
          <div class="box margins-1300">
            <ul>
              <li>
                <p class="gold">In the box</p>
                <img src="https://www.sportcane.com/wp-content/uploads/2026/11/SCLogoWhiteCropped.png" alt="Sportcane Logo">
              </li>
              <li>
                <p>
                  <strong>One purpose-built mobility system.</strong>
                </p>
                <p>Delivered ready to use. Additional included components will be listed here once confirmed.</p>
              </li>
            </ul>
          </div>
      </div>

      <div class="full-width bg-cream">
          <div class="purchase margins-1300">
            <p class="gold">PURCHASE INFORMATION</p>
            <strong>Everything you need to order with confidence.</strong>
            <ul>
              <li>
                <strong>Shipping</strong>
                <p>Free Shipping is available within the United States. Shipping options and estimated delivery dates will be shown at checkout. Tracking details will be sent once your order ships.</p>
              </li>
              <li>
                <strong>Warranty</strong>
                <p>SPORTCANE includes a manufacturer&rsquo;s warranty covering products found to have defects caused by manufacturing or workmanship. If you believe your SPORTCANE has a manufacturer-caused defect, please contact our team with your order information and photos of the issue for review.</p>
              </li>
              <li>
                <strong>Returns</strong>
                <p>SPORTCANE offers a 90-Day 100% Money-Back Guarantee. for eligible orders and customers. Please contact our team before returning your SPORTCANE so we can confirm eligibility and provide return instructions.</p>
              </li>
              <li>
                <strong>Payment</strong>
                <p>Payments are processed securely through Stripe, a trusted global payment provider used by millions of businesses worldwide. Your payment information is encrypted and processed directly through Stripe&rsquo;s secure infrastructure. SPORTCANE does not store your credit or debit card information.</p>
              </li>
              <li>
                <strong>Order Information</strong>
                <p>After placing your order, you will receive an email confirmation. Please review your shipping address, selected color and size, quantity, and order total. Tracking information will be provided once your order ships.</p>
              </li>
              <li>
                <strong>Support</strong>
                <p><a href="tel:8883112263">888-311-CANE (888-311-2263)</a> &nbsp;|&nbsp; <a href="mailto:contact@sportcane.com">contact@sportcane.com</a></p>
              </li>
            </ul>
          </div>
      </div>

    </div>

    <?php
}