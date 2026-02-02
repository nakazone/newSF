<?php
require __DIR__ . '/config.php';
$pageTitle = 'Professional Flooring Installation & Services';
$pageDescription = 'Expert flooring installation and services including hardwood, vinyl, tile, epoxy, and refinishing. Free estimates. Serving Denver and surrounding areas.';
include __DIR__ . '/includes/head.php';
include __DIR__ . '/includes/header.php';
?>

<!-- Hero -->
<section class="relative text-white min-h-[80vh] flex items-center overflow-hidden">
  <div class="absolute inset-0 z-0">
    <video autoplay loop muted playsInline class="absolute inset-0 w-full h-full object-cover" preload="metadata">
      <source src="<?php echo asset_url('videos/bg_seniorFloors.mp4'); ?>" type="video/mp4">
    </video>
    <div class="absolute inset-0 bg-gradient-to-br from-primary/50 via-primary/40 to-primary/50 z-10" style="background-color: rgba(26,32,54,0.5);"></div>
  </div>
  <div class="relative z-20 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-24 lg:py-32 w-full text-center">
    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-6 drop-shadow-lg">
      Professional Flooring Installation & Services
    </h1>
    <p class="text-xl sm:text-2xl mb-8 text-white/95 drop-shadow-md max-w-3xl mx-auto">
      Transform your space with expert flooring installation. Hardwood, vinyl, tile, epoxy, and more.
    </p>
    <div class="flex flex-col sm:flex-row gap-4 justify-center">
      <a href="<?php echo base_url('/free-estimate'); ?>" class="cta-button-secondary text-lg px-8 py-4">Get Free Estimate</a>
      <a href="tel:<?php echo PHONE_RAW; ?>" class="cta-button text-lg px-8 py-4">Call <?php echo PHONE; ?></a>
    </div>
  </div>
</section>

<!-- About -->
<section id="about" class="py-16 lg:py-24 scroll-mt-24" style="background-color: #f7f8fc;">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
      <div class="rounded-xl overflow-hidden shadow-lg">
        <img src="<?php echo asset_url('assets/project1.jpg'); ?>" alt="Senior Floors at work" class="w-full h-64 lg:h-80 object-cover">
      </div>
      <div>
        <h2 class="text-3xl sm:text-4xl font-bold text-primary mb-4">About Us</h2>
        <p class="text-lg text-gray-600 mb-4">
          Since 2018, Senior Floors has been dedicated to transforming homes with craftsmanship, passion, and integrity. What began as a small dream on the East Coast has grown into a company trusted by families and designers who seek elegance, precision, and a truly personalized experience.
        </p>
        <p class="text-gray-600 mb-4">
          In 2022, we brought this legacy of excellence to Denver, Colorado, making it our new home and the heart of our operations. At Senior Floors, we believe that a floor is more than a surface — it is the foundation of every memory created inside a home.
        </p>
        <a href="<?php echo base_url('/about'); ?>" class="cta-button">Learn More</a>
      </div>
    </div>
  </div>
</section>

<!-- Services -->
<section class="py-16 lg:py-24 bg-white">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <h2 class="text-3xl sm:text-4xl font-bold text-primary mb-8 text-center">Our Services</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <?php foreach (array_slice($menuServices, 0, 6) as $item): ?>
        <a href="<?php echo base_url($item['href']); ?>" class="block p-6 rounded-xl border border-gray-100 hover:border-primary/20 hover:shadow-lg transition-all">
          <h3 class="text-xl font-semibold text-primary mb-2"><?php echo htmlspecialchars($item['name']); ?></h3>
          <p class="text-gray-600 text-sm"><?php echo htmlspecialchars($item['shortDescription']); ?></p>
        </a>
      <?php endforeach; ?>
    </div>
    <div class="text-center mt-10">
      <a href="<?php echo base_url('/services'); ?>" class="cta-button">View All Services</a>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="py-16 lg:py-24 text-white" style="background: linear-gradient(135deg, #1a2036, #252b47);">
  <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8 text-center">
    <h2 class="text-3xl sm:text-4xl font-bold text-secondary mb-4">Ready to Transform Your Floors?</h2>
    <p class="text-xl mb-8 text-white/90">Get a free estimate today and see how we can help bring your vision to life.</p>
    <a href="<?php echo base_url('/free-estimate'); ?>" class="cta-button-secondary text-lg px-8 py-4">Get Free Estimate</a>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
