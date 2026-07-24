<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$base_path = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\');
$base_path = ($base_path === '/' || $base_path === '\\') ? '' : $base_path;
$base_path = $base_path . '/';

$services = [
    [
        'title' => 'Complete IT Managed Services',
        'image' => 'https://adinfotech.online/wp-content/uploads/2024/03/ad-sw1.jpg',
        'body' => 'At AD Infotech, we provide complete IT managed services that keep your business secure, efficient, and always connected. From proactive monitoring to helpdesk support and infrastructure management, we handle the day-to-day responsibilities of your technology environment so your team can focus on growth.'
    ],
    [
        'title' => 'IT Consulting Services',
        'image' => 'https://adinfotech.online/wp-content/uploads/2024/03/ad-s3.jpeg',
        'body' => 'Our IT consulting services help organizations make smarter technology choices. We assess your current environment, identify improvement areas, and build a practical roadmap for cloud adoption, digital transformation, cyber resilience, and long-term scalability.'
    ],
    [
        'title' => 'AMC Services',
        'image' => 'https://adinfotech.online/wp-content/uploads/2024/03/ad-s4.jpg',
        'body' => 'Our Annual Maintenance Contracts ensure that your hardware, networking, and business systems remain in peak condition. With regular upkeep, fast issue resolution, and planned support, we help reduce downtime and extend the life of your technology investments.'
    ],
    [
        'title' => 'Cloud Services',
        'image' => 'https://adinfotech.online/wp-content/uploads/2024/03/ad-s5.jpg',
        'body' => 'We design and manage cloud solutions that bring flexibility, agility, and cost-efficiency to modern businesses. Whether you need migration, infrastructure setup, or hybrid cloud support, AD Infotech helps you build a dependable and scalable cloud environment.'
    ],
    [
        'title' => 'Network Security Services',
        'image' => 'https://adinfotech.online/wp-content/uploads/2024/03/a-d-s6.jpg',
        'body' => 'Our network security services protect your organization from evolving cyber threats. We focus on firewall protection, intrusion monitoring, vulnerability assessment, and ongoing security improvements to keep your data and operations safe.'
    ],
    [
        'title' => 'Backup & Recovery Services',
        'image' => 'https://adinfotech.online/wp-content/uploads/2024/03/a-d-s-7-1024x576.png',
        'body' => 'Business continuity starts with reliable backup and recovery. We create secure backup strategies and disaster recovery plans that help you recover quickly from outages, data loss, or unexpected disruptions while minimizing operational impact.'
    ],
    [
        'title' => 'Migration & Upgrade Services',
        'image' => 'https://adinfotech.online/wp-content/uploads/2024/03/a-d-s-8.jpg',
        'body' => 'Our migration and upgrade services simplify technology changes with minimal disruption. From platform migrations to hardware upgrades and software modernization, we ensure your systems move forward smoothly and safely.'
    ],
    [
        'title' => 'Antivirus & Firewall Services',
        'image' => 'https://adinfotech.online/wp-content/uploads/2024/03/antivirus.jpg',
        'body' => 'We provide robust antivirus and firewall protection to defend your workplace from malware, unauthorized access, and modern cyber risks. Our layered security approach helps keep your network and devices protected around the clock.'
    ],
    [
        'title' => 'Desktop Management Services',
        'image' => 'https://adinfotech.online/wp-content/uploads/2024/02/DESKTOPS-1.jpg-1-1.jpg',
        'body' => 'Our desktop management services keep employee systems secure, updated, and high-performing. We help with deployment, maintenance, issue resolution, and centralized management so your team can work without interruption.'
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services | AD Infotech</title>
    <meta name="description" content="Explore AD Infotech services including managed IT, consulting, cloud, cybersecurity, AMC, backup, upgrades, and desktop support.">
    <link rel="icon" type="image/x-icon" href="<?php echo $base_path; ?>assets/images/favicon.ico">
    <link rel="stylesheet" href="<?php echo $base_path; ?>assets/css/style.css?v=ui-20260724">
    <script>window.BASE_PATH = "<?php echo $base_path; ?>";</script>
</head>
<body>
    <div class="top-strip">
        <div class="container top-strip-container">
            <div class="top-strip-links">
                <a href="tel:+919811022936" class="top-strip-link"><span>+91 98110 22936</span></a>
                <a href="tel:+918510022936" class="top-strip-link"><span>+91 85100 22936</span></a>
                <a href="mailto:infotech.dilip@gmail.com" class="top-strip-link"><span>infotech.dilip@gmail.com</span></a>
                <a href="mailto:salesadinfotech@gmail.com" class="top-strip-link"><span>salesadinfotech@gmail.com</span></a>
            </div>
            <div class="top-strip-location"><span>Nehru Place, New Delhi</span></div>
        </div>
    </div>

    <header class="sticky-header-container">
        <nav class="nav-bar scrolled">
            <a href="<?php echo $base_path; ?>index.php#home" class="nav-brand" aria-label="AD Infotech Home">
                <img src="<?php echo $base_path; ?>assets/images/logo-dark.png" alt="AD Infotech Logo" class="nav-logo-img logo-dark">
                <img src="<?php echo $base_path; ?>assets/images/logo-light.png" alt="AD Infotech Logo" class="nav-logo-img logo-light">
            </a>
            <ul class="nav-links-desktop">
                <li><a href="<?php echo $base_path; ?>index.php#home" class="nav-link">Home</a></li>
                <li><a href="<?php echo $base_path; ?>about.php" class="nav-link">About</a></li>
                <li><a href="<?php echo $base_path; ?>services.php" class="nav-link active">Services</a></li>
                <li><a href="<?php echo $base_path; ?>products.php" class="nav-link">Products</a></li>
                <li><a href="<?php echo $base_path; ?>index.php#why-choose-us" class="nav-link">Why Us</a></li>
                <li><a href="<?php echo $base_path; ?>contact.php" class="nav-link">Contact</a></li>
            </ul>
            <div class="nav-actions-desktop">
                <a href="<?php echo $base_path; ?>contact.php" class="btn btn-primary">Let's Talk</a>
            </div>
            <button class="nav-toggle-btn" aria-label="Toggle Navigation Menu">
                <svg class="menu-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
                <svg class="close-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="display:none"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
            </button>
            <div class="mobile-menu-panel">
                <ul class="mobile-menu-links">
                    <li><a href="<?php echo $base_path; ?>index.php#home" class="mobile-menu-link">Home</a></li>
                    <li><a href="<?php echo $base_path; ?>about.php" class="mobile-menu-link">About</a></li>
                    <li><a href="<?php echo $base_path; ?>services.php" class="mobile-menu-link active">Services</a></li>
                    <li><a href="<?php echo $base_path; ?>products.php" class="mobile-menu-link">Products</a></li>
                    <li><a href="<?php echo $base_path; ?>contact.php" class="mobile-menu-link">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="services-page-main">
        <section class="services-page-hero">
            <div class="container">
                <span class="section-tagline">Comprehensive IT Solutions</span>
                <h1 class="services-page-title">Reliable services for growing businesses and modern workplaces.</h1>
                <p class="services-page-intro">From managed support and cybersecurity to cloud migration and desktop management, AD Infotech delivers practical, dependable technology services that keep your business moving forward.</p>
            </div>
        </section>

        <section class="container services-page-section">
            <div class="services-grid">
                <?php foreach ($services as $service): ?>
                <article class="service-card glass-card">
                    <img class="service-image" src="<?php echo htmlspecialchars($service['image']); ?>" alt="<?php echo htmlspecialchars($service['title']); ?>" loading="lazy">
                    <div class="service-card-body">
                        <h2 class="service-card-title"><?php echo htmlspecialchars($service['title']); ?></h2>
                        <p class="service-card-text"><?php echo htmlspecialchars($service['body']); ?></p>
                    </div>
                </article>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="container services-cta-card">
            <h3>Need a tailored IT solution?</h3>
            <p>Let our team help you choose the right service package for your business, infrastructure, and growth goals.</p>
            <a href="<?php echo $base_path; ?>contact.php" class="btn btn-primary">Get in Touch</a>
        </section>
    </main>

    <footer class="footer-section">
        <div class="container footer-grid">
            <div class="footer-brand">
                <a href="<?php echo $base_path; ?>index.php#home" class="footer-logo" aria-label="AD Infotech Home">
                    <img src="<?php echo $base_path; ?>assets/images/logo-light.png" alt="AD Infotech Logo" class="footer-logo-img">
                </a>
                <p class="footer-brand-desc">Providing premium enterprise-level IT hardware, peripherals, and proactive support services across New Delhi since 2006.</p>
                <div class="footer-socials">
                    <a href="#" class="footer-social-btn" aria-label="Facebook">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                    </a>
                    <a href="#" class="footer-social-btn" aria-label="Twitter">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"/></svg>
                    </a>
                    <a href="#" class="footer-social-btn" aria-label="Youtube">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-9.58.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"/><polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"/></svg>
                    </a>
                    <a href="#" class="footer-social-btn" aria-label="Instagram">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
                    </a>
                    <a href="#" class="footer-social-btn" aria-label="Linkedin">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
                    </a>
                </div>
            </div>
            <div class="footer-col">
                <h4 class="footer-col-title">Quick Links</h4>
                <ul class="footer-links">
                    <li><a href="<?php echo $base_path; ?>index.php#home" class="footer-link">Home</a></li>
                    <li><a href="<?php echo $base_path; ?>about.php" class="footer-link">About Us</a></li>
                    <li><a href="<?php echo $base_path; ?>services.php" class="footer-link">Our Services</a></li>
                    <li><a href="<?php echo $base_path; ?>products.php" class="footer-link">Product Catalog</a></li>
                    <li><a href="<?php echo $base_path; ?>index.php#why-choose-us" class="footer-link">Why Choose Us</a></li>
                    <li><a href="<?php echo $base_path; ?>contact.php" class="footer-link">Contact Support</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4 class="footer-col-title">Core Expertise</h4>
                <ul class="footer-links">
                    <li><a href="<?php echo $base_path; ?>services.php" class="footer-link">Managed IT Services</a></li>
                    <li><a href="<?php echo $base_path; ?>services.php" class="footer-link">Cloud Solutions</a></li>
                    <li><a href="<?php echo $base_path; ?>services.php" class="footer-link">Cybersecurity</a></li>
                    <li><a href="<?php echo $base_path; ?>services.php" class="footer-link">AMC Support</a></li>
                    <li><a href="<?php echo $base_path; ?>services.php" class="footer-link">Backup & Recovery</a></li>
                    <li><a href="<?php echo $base_path; ?>services.php" class="footer-link">Desktop Management</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container footer-bottom-container">
                <p>&copy; <?php echo date('Y'); ?> A D Infotech. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="<?php echo $base_path; ?>assets/js/main.js?v=<?php echo time(); ?>"></script>
</body>
</html>
