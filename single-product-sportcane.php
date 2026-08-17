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
        <div class="sportcane-product-gallery margins-1300">
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
    <section class="sportcane-custom-content-block">
      <div class="container">
        <!-- Drop your custom HTML here -->
      </div>
    </section>

  <?php endwhile; ?>
</main>

<?php
get_footer();
