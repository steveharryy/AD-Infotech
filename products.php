<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");
$base_path = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\');
$base_path = ($base_path === '/' || $base_path === '\\') ? '' : $base_path;
$base_path .= '/';
$products = [
    ['Laptops', 'Business and personal laptops from leading brands.', 'product_laptop.png'],
    ['Desktops', 'Reliable desktop computers for offices, schools and homes.', 'product_desktop.png'],
    ['All in Ones', 'Space-saving all-in-one PCs for modern workspaces.', 'product_aio.png'],
    ['Networking', 'Switches, routers, cables and complete network equipment.', 'product_networking.png'],
    ['Workstations', 'High-performance systems for demanding professional workloads.', 'product_desktop.png'],
    ['Power Backups', 'UPS and power backup solutions to keep your work running.', 'product_networking.png'],
    ['Printer Toner Cartridge', 'Genuine toner cartridges and printer consumables.', 'product_cartridge.png'],
    ['Storage', 'Hard drives, SSDs and storage solutions for every need.', 'product_desktop.png'],
    ['Firewall', 'Network security appliances to protect your business.', 'product_networking.png'],
    ['Printers', 'Office and home printers from trusted brands.', 'product_cartridge.png'],
    ['Laptops Bags', 'Protective laptop bags and carrying accessories.', 'product_laptop.png'],
    ['Servers', 'Scalable server hardware for growing organizations.', 'product_desktop.png'],
    ['CCTV', 'Smart surveillance cameras and security systems.', 'product_cctv.png'],
    ['Scanners', 'Fast, reliable document and image scanning solutions.', 'product_aio.png'],
    ['Laptop Battery', 'Replacement batteries for dependable laptop power.', 'product_laptop.png'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products | AD Infotech</title>
    <meta name="description" content="Explore AD Infotech's full range of IT hardware, accessories and security products.">
    <link rel="icon" type="image/x-icon" href="<?php echo $base_path; ?>assets/images/favicon.ico">
    <link rel="stylesheet" href="<?php echo $base_path; ?>assets/css/style.css?v=ui-20260724">
    <script>window.BASE_PATH = "<?php echo $base_path; ?>";</script>
</head>
<body>
    <div class="top-strip"><div class="container top-strip-container"><div class="top-strip-links"><a href="tel:+919811022936" class="top-strip-link"><span>+91 98110 22936</span></a><a href="tel:+918510022936" class="top-strip-link"><span>+91 85100 22936</span></a><a href="mailto:infotech.dilip@gmail.com" class="top-strip-link"><span>infotech.dilip@gmail.com</span></a><a href="mailto:salesadinfotech@gmail.com" class="top-strip-link"><span>salesadinfotech@gmail.com</span></a></div><div class="top-strip-location"><span>Nehru Place, New Delhi</span></div></div></div>
    <header class="sticky-header-container"><nav class="nav-bar scrolled">
        <a href="<?php echo $base_path; ?>index.php#home" class="nav-brand" aria-label="AD Infotech Home"><img src="<?php echo $base_path; ?>assets/images/logo-dark.png" alt="AD Infotech Logo" class="nav-logo-img logo-dark"><img src="<?php echo $base_path; ?>assets/images/logo-light.png" alt="AD Infotech Logo" class="nav-logo-img logo-light"></a>
        <ul class="nav-links-desktop"><li><a href="<?php echo $base_path; ?>index.php#home" class="nav-link">Home</a></li><li><a href="<?php echo $base_path; ?>about.php" class="nav-link">About</a></li><li><a href="<?php echo $base_path; ?>services.php" class="nav-link">Services</a></li><li><a href="<?php echo $base_path; ?>products.php" class="nav-link active">Products</a></li><li><a href="<?php echo $base_path; ?>index.php#why-choose-us" class="nav-link">Why Us</a></li><li><a href="<?php echo $base_path; ?>contact.php" class="nav-link">Contact</a></li></ul>
        <div class="nav-actions-desktop"><a href="<?php echo $base_path; ?>contact.php" class="btn btn-primary">Let's Talk</a></div>
        <button class="nav-toggle-btn" aria-label="Toggle Navigation Menu"><svg class="menu-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="18" x2="21" y2="18"/></svg><svg class="close-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="display:none"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg></button>
        <div class="mobile-menu-panel"><ul class="mobile-menu-links"><li><a href="<?php echo $base_path; ?>index.php#home" class="mobile-menu-link">Home</a></li><li><a href="<?php echo $base_path; ?>about.php" class="mobile-menu-link">About</a></li><li><a href="<?php echo $base_path; ?>services.php" class="mobile-menu-link">Services</a></li><li><a href="<?php echo $base_path; ?>products.php" class="mobile-menu-link active">Products</a></li><li><a href="<?php echo $base_path; ?>contact.php" class="mobile-menu-link">Contact</a></li></ul></div>
    </nav></header>

    <main>
        <section class="catalogue-hero"><div class="container"><span class="section-tagline">Complete IT Catalogue</span><h1 class="catalogue-title">Find the right <span class="gradient-text">technology</span> for your work.</h1><p class="catalogue-intro">Browse our complete selection of genuine IT hardware, accessories and business security solutions. Contact us for availability and pricing.</p></div></section>
        <section class="catalogue-section"><div class="container"><div class="catalogue-grid">
            <?php foreach ($products as $product): ?>
            <article class="glass-card catalogue-card"><div class="catalogue-card-media"><img src="<?php echo $base_path; ?>assets/images/<?php echo $product[2]; ?>" alt="<?php echo htmlspecialchars($product[0]); ?>"></div><div class="catalogue-card-body"><h2 class="catalogue-card-title"><?php echo htmlspecialchars($product[0]); ?></h2><p class="catalogue-card-desc"><?php echo htmlspecialchars($product[1]); ?></p><a href="<?php echo $base_path; ?>index.php#contact" class="catalogue-card-link">Enquire now &rarr;</a></div></article>
            <?php endforeach; ?>
        </div></div></section>
    </main>

    <footer class="footer-section"><div class="container footer-grid"><div class="footer-brand"><a href="<?php echo $base_path; ?>index.php#home" class="footer-logo"><img src="<?php echo $base_path; ?>assets/images/logo-light.png" alt="AD Infotech Logo" class="footer-logo-img"></a><p class="footer-brand-desc">Providing premium enterprise-level IT hardware, peripherals, and proactive support services across New Delhi since 2006.</p><div class="footer-socials"><a href="#" class="footer-social-btn" aria-label="Facebook">f</a><a href="#" class="footer-social-btn" aria-label="Twitter">𝕏</a><a href="#" class="footer-social-btn" aria-label="Youtube">▶</a><a href="#" class="footer-social-btn" aria-label="Instagram">◎</a><a href="#" class="footer-social-btn" aria-label="LinkedIn">in</a></div></div><div class="footer-col"><h4 class="footer-col-title">Quick Links</h4><ul class="footer-links"><li><a href="<?php echo $base_path; ?>index.php#home" class="footer-link">Home</a></li><li><a href="<?php echo $base_path; ?>about.php" class="footer-link">About Us</a></li><li><a href="<?php echo $base_path; ?>services.php" class="footer-link">Our Services</a></li><li><a href="<?php echo $base_path; ?>products.php" class="footer-link">Product Catalog</a></li><li><a href="<?php echo $base_path; ?>index.php#why-choose-us" class="footer-link">Why Choose Us</a></li><li><a href="<?php echo $base_path; ?>index.php#contact" class="footer-link">Contact Support</a></li></ul></div><div class="footer-col"><h4 class="footer-col-title">Contact Us</h4><ul class="footer-links"><li><a href="tel:+919811022936" class="footer-link">+91-98110 22936</a></li><li><a href="tel:+918510022936" class="footer-link">+91-85100 22936</a></li><li><a href="mailto:infotech.dilip@gmail.com" class="footer-link">infotech.dilip@gmail.com</a></li><li><a href="mailto:salesadinfotech@gmail.com" class="footer-link">salesadinfotech@gmail.com</a></li><li class="footer-link">601-A Skylark Building, 60, Nehru Place, New Delhi-110019</li></ul></div></div><div class="footer-bottom"><div class="container footer-bottom-container"><p>&copy; <?php echo date('Y'); ?> A D Infotech. All rights reserved.</p><p>Designed with Glassmorphism &amp; High-Performance UI systems.</p></div></div></footer>
    <script src="<?php echo $base_path; ?>assets/js/main.js?v=<?php echo time(); ?>"></script>
</body>
</html>
