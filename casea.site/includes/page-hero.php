<?php
/**
 * Page hero component for sub-pages
 * Expects: $hero_title, $hero_description, $hero_cta (optional)
 */
?>
<section class="page-hero">
  <div class="container">
    <h1><?php echo $hero_title; ?></h1>
    <p><?php echo $hero_description; ?></p>
<?php if (!empty($hero_cta)): ?>
    <a href="<?php echo CTA_URL; ?>" class="btn btn--primary btn--lg" style="margin-top:var(--space-4)" target="_blank" rel="noopener"><?php echo $hero_cta; ?></a>
<?php endif; ?>
  </div>
</section>
