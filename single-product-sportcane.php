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

          <!-- 5. Product Meta (SKU, Categories, etc. - optional) -->
          <?php woocommerce_template_single_meta(); ?>

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
      <div class="margins-1500">

      </div>
    </div>

    <div class=" full-width bg-white">
      <div class="margins-1500">

      </div>
    </div>

    <div class=" full-width bg-black">
      <div class="margins-1500">

      </div>
    </div>

    <div class=" full-width bg-cream">
      <div class="margins-1500">

      </div>
    </div>

    <div class=" full-width bg-white">
      <div class="margins-1500">

      </div>
    </div>

    <div class=" full-width bg-stripes">
      <div class="margins-1500">

      </div>
    </div>


  <?php endwhile; ?>
</main>

<?php
get_footer();
