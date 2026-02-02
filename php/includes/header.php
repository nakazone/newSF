<?php
if (!defined('BASE_PATH')) require __DIR__ . '/../config.php';
?>
<header class="fixed top-0 left-0 right-0 z-50 shadow-lg" style="background-color: #1a2036;">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="flex h-20 md:h-24 items-center justify-between">
      <a href="<?php echo base_url('/'); ?>" class="flex items-center flex-shrink-0">
        <img src="<?php echo asset_url('assets/logoSeniorFloors.png'); ?>" alt="Senior Floors" class="h-14 md:h-20 w-auto object-contain">
      </a>
      <nav class="hidden lg:flex items-center gap-1">
        <a href="<?php echo base_url('/'); ?>" class="px-4 py-2 text-white/90 hover:text-secondary text-sm font-medium rounded-md hover:bg-white/5">Home</a>
        <a href="<?php echo base_url('/about'); ?>" class="px-4 py-2 text-white/90 hover:text-secondary text-sm font-medium rounded-md hover:bg-white/5">About</a>
        <a href="<?php echo base_url('/services'); ?>" class="px-4 py-2 text-white/90 hover:text-secondary text-sm font-medium rounded-md hover:bg-white/5">Services</a>
        <a href="<?php echo base_url('/contact'); ?>" class="px-4 py-2 text-white/90 hover:text-secondary text-sm font-medium rounded-md hover:bg-white/5">Contact</a>
        <a href="<?php echo base_url('/free-estimate'); ?>" class="cta-button-secondary ml-2 !py-2 text-sm">Get Free Estimate</a>
      </nav>
      <div class="lg:hidden">
        <button type="button" id="mobile-menu-btn" class="p-2 text-white" aria-label="Open menu">
          <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
        </button>
      </div>
    </div>
  </div>
  <div id="mobile-menu" class="hidden lg:hidden border-t border-white/10 bg-primary">
    <div class="px-4 py-4 space-y-2">
      <a href="<?php echo base_url('/'); ?>" class="block py-2 text-white/90 hover:text-secondary">Home</a>
      <a href="<?php echo base_url('/about'); ?>" class="block py-2 text-white/90 hover:text-secondary">About</a>
      <a href="<?php echo base_url('/services'); ?>" class="block py-2 text-white/90 hover:text-secondary">Services</a>
      <a href="<?php echo base_url('/contact'); ?>" class="block py-2 text-white/90 hover:text-secondary">Contact</a>
      <a href="<?php echo base_url('/free-estimate'); ?>" class="cta-button-secondary block text-center mt-4">Get Free Estimate</a>
    </div>
  </div>
</header>
<main class="pt-20 md:pt-24">
