<?php

/**
 * Template Name: Sportcane Single Product Layout
 * Template Post Type: product
 */

if (! defined('ABSPATH')) {
  exit; // Exit if accessed directly
}

get_header(); ?>

<main class="sportcane-custom-product-layout">
  <?php while (have_posts()) : the_post(); ?>
    <?php global $product; ?>

    <div id="product-<?php the_ID(); ?>" <?php wc_product_class('sportcane-product-container', $product); ?>>

      <!-- Top Hero Grid (Gallery + Buy Box) -->

      <div class="sportcane-main-summary-grid full-width">

        <!-- Left Column: Product Gallery -->
        <div class="sportcane-product-gallery margins-1500">
          <?php do_action('woocommerce_before_single_product_summary'); ?>
        </div>

        <!-- Right Column: Buy Box -->
        <div class="sportcane-product-summary">

          <!-- 1. Product Title -->
          <h1 class="product_title entry-title"><?php the_title(); ?></h1>

          <!-- 2. Full Product Description -->
          <div class="sportcane-product-description">
            <?php the_content(); ?>
          </div>

          <!-- 3. Product Price -->
          <div class="price">
            <?php woocommerce_template_single_price(); ?>
          </div>

          <!-- 4. Add to Cart Form & Variations -->
          <div class="sportcane-add-to-cart-wrapper">
            <?php woocommerce_template_single_add_to_cart(); ?>
          </div>

        </div>

      </div>

    </div>

    <!-- Custom HTML Section Below Core Product -->
    <div class=" full-width bg-brown">
      <div class="product__pg__glance margins-1500">

        <p class="gold">SPORTCANE at a Glance</p>

        <ul>
          <li>
            <strong>22&deg;</strong>
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

    <div class=" full-width bg-cream">
      <div class="product__pg__mechanic margins-1500">

        <div class="product__pg__mechanic__top">
          <p class="gold">SPORTCANE</p>
          <h2>Most bio mechanically engineered cane in the world</h2>
        </div>

        <div class="product__pg__mechanic__bottom">
          <p>Where a conventional cane simply holds you up, SPORTCANE was designed around the mechanics of movement. Its patented 22° geometry moves the handle toward your body's midline and brings ground contact closer to your center of mass.</p>
          <p>The result is a mobility aid with a performance-oriented design — built for people navigating recovery and everyday movement, and engineered with the same precision you'd expect from high-end athletic equipment.</p>
        </div>

      </div>
    </div>

    <div class=" full-width bg-white">
      <div class="product__pg__geometry margins-1500">

        <div class="product__pg__geometry__top">
          <p class="gold">22&deg; Geometry</p>
          <h2>Designed around the mechanics of movement.</h2>
          <p>The 22&deg; inward curve brings the handle toward your midline and aligns ground contact more closely with your center of mass —<br>helping direct load more vertically and reducing lateral shear compared with a straight cane.</p>
        </div>

        <div class="product__pg__geometry__bottom">
          <img src="https://www.sportcane.com/wp-content/uploads/2026/08/ProductPgDiagram1.png" alt="">
          <img src="https://www.sportcane.com/wp-content/uploads/2026/08/ProductPgDiagram2.png" alt="">
        </div>
      </div>
    </div>

    <div class=" full-width bg-cream">
      <div class="product__pg__enginered margins-1500">

        <div class="product__pg__enginered__top">
          <p class="gold">Engineered for Movement</p>

          <h3>How the design works.</h3>
        </div>

        <div class="product__pg__enginered__bottom">
          <ol>
            <li>
              <strong>FORWARD SUPPORT</strong>
              <p>Positioned forward in the walking pattern rather than beside the hip.</p>
            </li>
            <li>
              <strong>Load Distribution</strong>
              <p>Intended to direct load more vertically through weight-bearing movement.</p>
            </li>
            <li>
              <strong>Machined Joint</strong>
              <p>A precision-machined connection between shaft sections.</p>
            </li>
          </ol>
        </div>

      </div>
    </div>

    <div class=" full-width bg-white">
      <div class="product__page__specs margins-1500">
        <div class="product__page__specs__left">
          <p class="gold">Specifications</p>
          <h2>
            Built with purpose.
          </h2>
          <p>
            Fields marked pending will be populated with client-confirmed measurements.
          </p>
          <img src="https://www.sportcane.com/wp-content/uploads/2026/08/MadeinUSABadge.png" alt="Made In USA">
        </div>
        <div class="product__page__specs__right">
          <ul>
            <li>
              <p>PRODUCT</p>
              <strong>SPORTCANE</strong>
            </li>
            <li>
              <p>MATERIAL</p>
              <strong>Aircraft-grade steel (chromoly)</strong>
            </li>
            <li>
              <p>LOAD CAPACITY</p>
              <strong>Tested >1,000 lbs</strong>
            </li>
            <li>
              <p>SIZES</p>
              <strong>Regular: 33-37" · Tall: 36-40"</strong>
            </li>
            <li>
              <p>WEIGHT</p>
              <strong>Approx. 16 oz</strong>
            </li>
            <li>
              <p>MANUFACTURING</p>
              <strong>Designed, engineered & assembled in the USA</strong>
            </li>
            <li>
              <p>JOINT</p>
              <strong>Machined joint</strong>
            </li>
            <li>
              <p>INTENDED USE</p>
              <strong>Everyday mobility aid and post-surgical/injury recovery</strong>
            </li>
            <li>
              <p>MOQ</p>
              <strong>10 units</strong>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class=" full-width bg-brown">
      <div class="product__page__box margins-1500">

        <div class="product__page__box__left">
          <p class="gold">Discover a different approach to mobility.</p>
          <img src="https://www.sportcane.com/wp-content/uploads/2026/08/SPLogoWhiteCropped.png" alt="Sportcane Logo">
        </div>

        <div class="product__page__box__right">
          <strong>One purpose-built mobility system.</strong>
          <p>Delivered ready to use. Additional included components will be listed here once confirmed.</p>
        </div>

      </div>
    </div>

    <div class=" full-width bg-cream">
      <div class="product__page__info margins-1500">
        <div class="product__page__info__top">
          <p class="gold">Purchase information</p>
          <h2>
            Everything you need to<br>
            order with confidence.
          </h2>
        </div>
        <div class="product__page__info__bottom">
          <ul>
            <li>
              <strong>Shipping</strong>
              <p>Free Shipping is available within the United States. Shipping options and estimated delivery dates will be shown at checkout. Tracking details will be sent once your order ships.</p>
            </li>

            <li>
              <strong>Warranty</strong>
              <p>SPORTCANE includes a manufacturer's warranty covering products found to have defects caused by manufacturing or workmanship. If you believe your SPORTCANE has a manufacturer-caused defect, please contact our team with your order information and photos of the issue for review.</p>
            </li>

            <li>
              <strong>Returns</strong>
              <p>SPORTCANE offers a 90-Day 100% Money-Back Guarantee. for eligible orders and customers. Please contact our team before returning your SPORTCANE so we can confirm eligibility and provide return instructions.</p>
            </li>

            <li>
              <strong>Payment</strong>
              <p>Payments are processed securely through Stripe, a trusted global payment provider used by millions of businesses worldwide. Your payment information is encrypted and processed directly through Stripe's secure infrastructure. SPORTCANE does not store your credit or debit card information.</p>
            </li>

            <li>
              <strong>Order Information</strong>
              <p>After placing your order, you will receive an email confirmation. Please review your shipping address, selected color and size, quantity, and order total. Tracking information will be provided once your order ships.</p>
            </li>

            <li>
              <strong>Support</strong>
              <p>
                <a href="tel:8883112263">888-311-CANE (888-311-2263)</a>
                <a href="mailto:contact@sportcane.com">contact@sportcane.com</a>
              </p>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class=" full-width bg-white">
      <div class="product__page__faq margins-1500">
        <div class="product__page__faq__top">
          <p class="gold">FAQ</p>
          <h2>
            Questions, answered.
          </h2>
        </div>
        <div class="product__page__faq__bottom">
          <ul>
            <li>
              <details>
                <summary><strong>01 — What is SPORTCANE?</strong></summary>
                <p>SPORTCANE is a purpose-built mobility aid designed for everyday movement and post-surgical or injury recovery. Its patent-pending 22° curve is designed around natural motion and impact absorption, providing a different approach to traditional cane design.</p>
              </details>
            </li>

            <li>
              <details>
                <summary><strong>02 — How does the 22° geometry work?</strong></summary>
                <p>The patent-pending 22&deg; curve changes the position of the cane relative to your body, helping align ground contact more closely with your center of mass and directing load more vertically. The design is intended to support more natural movement while absorbing impact.</p>
              </details>
            </li>

            <li>
              <details>
                <summary><strong>03 — Who is SPORTCANE designed for?</strong></summary>
                <p>SPORTCANE is designed for everyday mobility as well as people navigating post-surgical or injury recovery. Its design is intended for individuals looking for a mobility aid built around movement rather than simply basic support.</p>
              </details>
            </li>

            <li>
              <details>
                <summary><strong>04 — Where is SPORTCANE made?</strong></summary>
                <p>SPORTCANE is designed, engineered, and assembled in the United States, working with American suppliers and fabrication partners to maintain control over craftsmanship, quality, and materials.</p>
              </details>
            </li>

            <li>
              <details>
                <summary><strong>05 — What is the weight capacity?</strong></summary>
                <p>SPORTCANE has been tested to support loads greater than 1,000 lbs.</p>
              </details>
            </li>

          </ul>
        </div>
      </div>
    </div>

    <div class=" full-width bg-stripes">
      <div class="product__page__move margins-1500">

        <h3>
          Ready to move better?
        </h3>

        <p>Discover a different approach to mobility.</p>

        <a href="/product/sportcane/">Buy SPORTCANE <img
            src="https://www.sportcane.com/wp-content/uploads/2026/08/iconArrowRight.png" alt="Shop SPORTCANE"></a>

      </div>
    </div>


  <?php endwhile; ?>
</main>

<?php
get_footer();
