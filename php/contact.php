<?php
require __DIR__ . '/config.php';
$pageTitle = 'Contact Us';
$pageDescription = 'Contact Senior Floors for a free flooring estimate. Denver metro area. Phone, email, and contact form.';
$canonicalUrl = SITE_URL . '/contact';
include __DIR__ . '/includes/head.php';
include __DIR__ . '/includes/header.php';
?>

<section class="py-16 lg:py-24">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <h1 class="text-4xl sm:text-5xl font-bold text-primary mb-8">Contact Us</h1>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
      <div>
        <p class="text-lg text-gray-600 mb-6">Get in touch for a free estimate or to discuss your flooring project.</p>
        <div class="space-y-4">
          <p><strong class="text-primary">Phone:</strong> <a href="tel:<?php echo PHONE_RAW; ?>" class="text-secondary hover:underline"><?php echo PHONE; ?></a></p>
          <p><strong class="text-primary">Email:</strong> <a href="mailto:<?php echo EMAIL; ?>" class="text-secondary hover:underline"><?php echo EMAIL; ?></a></p>
          <p><strong class="text-primary">Service Areas:</strong> Denver, Cherry Creek, Greenwood Village, Lakewood, Morrison, DTC & Metro Area</p>
        </div>
      </div>
      <div class="bg-gray-50 rounded-xl p-8">
        <h2 class="text-xl font-bold text-primary mb-4">Request a Free Estimate</h2>
        <form action="<?php echo base_url('api/estimate.php'); ?>" method="post" class="space-y-4">
          <div>
            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name *</label>
            <input type="text" id="name" name="name" required class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-primary focus:border-primary" placeholder="John Doe">
          </div>
          <div>
            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email *</label>
            <input type="email" id="email" name="email" required class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-primary focus:border-primary" placeholder="john@example.com">
          </div>
          <div>
            <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone *</label>
            <input type="tel" id="phone" name="phone" required class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-primary focus:border-primary" placeholder="(720) 555-0123">
          </div>
          <div>
            <label for="service" class="block text-sm font-medium text-gray-700 mb-1">Service</label>
            <select id="service" name="service" class="w-full rounded-lg border border-gray-300 px-4 py-2 focus:ring-2 focus:ring-primary focus:border-primary">
              <option value="">Select a service</option>
              <?php foreach ($menuServices as $s): ?>
                <option value="<?php echo htmlspecialchars($s['href']); ?>"><?php echo htmlspecialchars($s['name']); ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <button type="submit" class="cta-button w-full">Send Request</button>
        </form>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
