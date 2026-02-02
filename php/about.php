<?php
require __DIR__ . '/config.php';
$pageTitle = 'About Us';
$pageDescription = 'Since 2018, Senior Floors has been dedicated to transforming homes with craftsmanship and integrity. Denver hardwood flooring experts.';
$canonicalUrl = SITE_URL . '/about';
include __DIR__ . '/includes/head.php';
include __DIR__ . '/includes/header.php';
?>

<section class="py-16 lg:py-24">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <h1 class="text-4xl sm:text-5xl font-bold text-primary mb-8">About Us</h1>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
      <div class="rounded-xl overflow-hidden shadow-lg">
        <img src="<?php echo asset_url('assets/project1.jpg'); ?>" alt="Senior Floors team at work" class="w-full h-72 object-cover">
      </div>
      <div class="prose prose-lg max-w-none text-gray-600">
        <p class="mb-4">Since 2018, Senior Floors has been dedicated to transforming homes with craftsmanship, passion, and integrity. What began as a small dream on the East Coast has grown into a company trusted by families and designers who seek elegance, precision, and a truly personalized experience.</p>
        <p class="mb-4">Born in New Jersey, our work has brought life to high-end residences across NJ, NY, PA, and CO. In 2022, we brought this legacy of excellence to Denver, Colorado, making it our new home and the heart of our operations.</p>
        <p class="mb-4">At Senior Floors, we believe that a floor is more than a surface — it is the foundation of every memory created inside a home. That is why our team takes the time to understand each project with care, honesty, and technical expertise.</p>
        <p class="mb-6">Our promise is simple: deliver exceptional quality, clear communication, and an experience centered on trust.</p>
        <div class="grid grid-cols-2 gap-4">
          <div class="bg-gray-50 rounded-xl p-4"><span class="text-2xl font-bold text-primary block">10+</span><span class="text-sm text-gray-600">Years of Experience</span></div>
          <div class="bg-gray-50 rounded-xl p-4"><span class="text-2xl font-bold text-primary block">Denver Metro</span><span class="text-sm text-gray-600">Service Area</span></div>
          <div class="bg-gray-50 rounded-xl p-4"><span class="text-2xl font-bold text-primary block">500+</span><span class="text-sm text-gray-600">Happy Customers</span></div>
          <div class="bg-gray-50 rounded-xl p-4"><span class="text-2xl font-bold text-primary block">5-Star</span><span class="text-sm text-gray-600">Rated on Google</span></div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
