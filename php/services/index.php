<?php
require __DIR__ . '/../config.php';
$pageTitle = 'Our Services';
$pageDescription = 'Hardwood refinishing, installation, water damage repair, extend hardwood, screen and coat, self leveling, stairs. Senior Floors Denver.';
$canonicalUrl = SITE_URL . '/services';
include __DIR__ . '/../includes/head.php';
include __DIR__ . '/../includes/header.php';
?>

<section class="py-16 lg:py-24">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <h1 class="text-4xl sm:text-5xl font-bold text-primary mb-4">Our Services</h1>
    <p class="text-xl text-gray-600 mb-12 max-w-3xl">Professional flooring services for Denver and the metro area. Free estimates.</p>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <?php foreach ($menuServices as $item): ?>
        <a href="<?php echo base_url($item['href']); ?>" class="block p-6 rounded-xl border border-gray-100 hover:border-primary/20 hover:shadow-lg transition-all">
          <h2 class="text-xl font-semibold text-primary mb-2"><?php echo htmlspecialchars($item['name']); ?></h2>
          <p class="text-gray-600 text-sm"><?php echo htmlspecialchars($item['shortDescription']); ?></p>
          <span class="inline-block mt-4 text-secondary font-medium text-sm hover:underline">Learn more →</span>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
