<?php
// Prevent browser caching so changes load immediately.
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

// Dynamic base path so assets resolve in any subdirectory.
$base_path = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\');
$base_path = ($base_path === '/' || $base_path === '\\') ? '' : $base_path;
$base_path = $base_path . '/';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | AD Infotech - 20 Years of Trusted IT Solutions</title>
    <meta name="description" content="Learn about A D Infotech - 20+ years providing computer hardware, peripherals, AMC, printer cartridges, and server workstations. Our mission, vision, and why businesses choose us.">
    <meta name="keywords" content="About AD Infotech, IT solutions Nehru Place, computer hardware Delhi, company mission vision">
    <link rel="icon" type="image/x-icon" href="<?php echo $base_path; ?>assets/images/favicon.ico">
    <link rel="stylesheet" href="<?php echo $base_path; ?>assets/css/style.css?v=ui-20260724">
    <script>
        window.BASE_PATH = "<?php echo $base_path; ?>";
    </script>
</head>
<body>
    <!-- TOP CONTACT STRIP -->
    <div class="top-strip">
        <div class="container top-strip-container">
            <div class="top-strip-links">
                <a href="tel:+919811022936" class="top-strip-link">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                    <span>+91 98110 22936</span>
                </a>
                <a href="tel:+918510022936" class="top-strip-link">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                    <span>+91 85100 22936</span>
                </a>
                <a href="mailto:infotech.dilip@gmail.com" class="top-strip-link">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                    <span>infotech.dilip@gmail.com</span>
                </a>
                <a href="mailto:salesadinfotech@gmail.com" class="top-strip-link">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                    <span>salesadinfotech@gmail.com</span>
                </a>
            </div>
            <div class="top-strip-location">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                <span>Nehru Place, New Delhi</span>
            </div>
        </div>
    </div>

    <!-- FLOATING STICKY HEADER & NAV -->
    <header class="sticky-header-container">
        <nav class="nav-bar scrolled">
            <a href="<?php echo $base_path; ?>index.php#home" class="nav-brand" aria-label="AD Infotech Home">
                <img src="<?php echo $base_path; ?>assets/images/logo-dark.png" alt="AD Infotech Logo" class="nav-logo-img logo-dark">
                <img src="<?php echo $base_path; ?>assets/images/logo-light.png" alt="AD Infotech Logo" class="nav-logo-img logo-light">
            </a>

            <ul class="nav-links-desktop">
                <li><a href="<?php echo $base_path; ?>index.php#home" class="nav-link">Home</a></li>
                <li><a href="<?php echo $base_path; ?>about.php" class="nav-link active">About</a></li>
                <li><a href="<?php echo $base_path; ?>services.php" class="nav-link">Services</a></li>
                <li><a href="<?php echo $base_path; ?>products.php" class="nav-link">Products</a></li>
                <li><a href="<?php echo $base_path; ?>index.php#why-choose-us" class="nav-link">Why Us</a></li>
                <li><a href="<?php echo $base_path; ?>contact.php" class="nav-link">Contact</a></li>
            </ul>

            <div class="nav-actions-desktop">
                <div class="nav-search-cue">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                    <span>Search Services</span>
                    <span class="nav-search-key">⌘K</span>
                </div>
                <a href="<?php echo $base_path; ?>contact.php" class="btn btn-primary">Let's Talk</a>
            </div>

            <button class="nav-toggle-btn" aria-label="Toggle Navigation Menu">
                <svg class="menu-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
                <svg class="close-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="display: none;"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
            </button>

            <div class="mobile-menu-panel">
                <ul class="mobile-menu-links">
                    <li><a href="<?php echo $base_path; ?>index.php#home" class="mobile-menu-link">Home</a></li>
                    <li><a href="<?php echo $base_path; ?>about.php" class="mobile-menu-link active">About</a></li>
                    <li><a href="<?php echo $base_path; ?>services.php" class="mobile-menu-link">Services</a></li>
                    <li><a href="<?php echo $base_path; ?>products.php" class="mobile-menu-link">Products</a></li>
                    <li><a href="<?php echo $base_path; ?>index.php#why-choose-us" class="mobile-menu-link">Why Us</a></li>
                    <li><a href="<?php echo $base_path; ?>contact.php" class="mobile-menu-link">Contact</a></li>
                </ul>
                <div class="mobile-menu-cta">
                    <a href="<?php echo $base_path; ?>contact.php" class="btn btn-gradient btn-full">Let's Talk</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- PAGE HERO -->
    <section class="about-page-hero">
        <div class="about-page-hero-glow"></div>
        <div class="container">
            <div class="about-page-hero-inner">
                <span class="section-tagline">Who We Are</span>
                <h1 class="about-page-hero-title">Built on <span class="gradient-text">20 Years</span> of Trust</h1>
                <p class="about-page-hero-sub">From a single shop in Nehru Place to Delhi NCR's go-to IT partner — hardware, support, and everything in between.</p>
                <div class="about-page-hero-stats">
                    <div class="glass-card about-stat-card">
                        <span class="about-stat-num">20+</span>
                        <span class="about-stat-lbl">Years in Business</span>
                    </div>
                    <div class="glass-card about-stat-card">
                        <span class="about-stat-num">10k+</span>
                        <span class="about-stat-lbl">Computers Sold & Fixed</span>
                    </div>
                    <div class="glass-card about-stat-card">
                        <span class="about-stat-num">100%</span>
                        <span class="about-stat-lbl">Genuine Products</span>
                    </div>
                    <div class="glass-card about-stat-card">
                        <span class="about-stat-num">500+</span>
                        <span class="about-stat-lbl">Corporate Clients</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT US SECTION -->
    <section class="section-padding about-section" style="position:relative;">
        <div class="about-glow"></div>
        <div class="container">
            <div style="text-align:center; margin-bottom:64px;">
                <span class="section-tagline">About AD Infotech</span>
                <h2 class="section-title">Welcome To AD Infotech</h2>
                <div class="about-keywords-row">
                    <span class="about-keyword">Computer Hardware</span>
                    <span class="about-keyword-dot"></span>
                    <span class="about-keyword">Peripherals</span>
                    <span class="about-keyword-dot"></span>
                    <span class="about-keyword">AMC</span>
                    <span class="about-keyword-dot"></span>
                    <span class="about-keyword">Printer Cartridges</span>
                    <span class="about-keyword-dot"></span>
                    <span class="about-keyword">Server Workstations</span>
                </div>
            </div>
            <div class="about-content" style="max-width:860px; margin:0 auto;">
                <p class="about-lead">At A.D Infotech, we are passionate about providing computer hardware parts for all types of computer accessories — Computer Hardware, Peripherals, Consumables, AMC, and all types of Printer Cartridges and Server Workstations.</p>
                <p class="about-p">With over 20 years of experience in the industry, our team has a deep understanding of the ever-evolving technology market and is dedicated to staying ahead of the curve. We understand that finding the right computer hardware can be overwhelming, which is why we have curated a wide selection of products from top brands to make your search easier.</p>
                <p class="about-p about-p-last">From graphics cards to processors, our goal is to provide you with the best components for your computer needs. Our commitment to customer satisfaction and premium products has earned us a loyal following among tech enthusiasts and professionals alike. We take pride in our excellent client service and strive to exceed expectations with every purchase. At AD Infotech, we believe in the power of technology to improve lives and businesses, and we are here to support you every step of the way.</p>
                <div class="about-check-grid">
                    <div class="about-check-item">
                        <svg class="about-check-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22,4 12,14.01 9,11.01"/></svg>
                        <div><h5 class="about-check-title">Genuine Brands Only</h5><p class="about-check-desc">We source only original products from HP, Dell, Lenovo, Canon, and more.</p></div>
                    </div>
                    <div class="about-check-item">
                        <svg class="about-check-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22,4 12,14.01 9,11.01"/></svg>
                        <div><h5 class="about-check-title">Fast Repair Services</h5><p class="about-check-desc">Expert chip-level motherboard repairing and printer servicing across Delhi NCR.</p></div>
                    </div>
                </div>
                <a href="<?php echo $base_path; ?>contact.php" class="btn btn-primary btn-lg" style="margin-top:8px;">Book a Service</a>
            </div>
        </div>
    </section>

    <!-- MISSION & VISION -->
    <section class="section-padding mv-section">
        <div class="container">
            <div style="text-align:center; margin-bottom:64px;">
                <span class="section-tagline">Our Purpose</span>
                <h2 class="section-title">Mission &amp; Vision</h2>
            </div>
            <div class="mv-grid">
                <div class="glass-card mv-card">
                    <div class="mv-icon mv-icon-mission">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>
                    </div>
                    <h3 class="mv-title">Our Mission</h3>
                    <p class="mv-body">At A D Infotech, our mission is to empower businesses with cutting-edge IT solutions and products that foster growth and success. We aim to be the strategic technology partner of choice, providing tailor-made, scalable, and reliable IT solutions that address unique challenges. By delivering quality and innovation, we are committed to helping organizations optimize their IT infrastructure, enhance productivity, and stay ahead in the fast-paced world of technology.</p>
                </div>
                <div class="glass-card mv-card">
                    <div class="mv-icon mv-icon-vision">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                    </div>
                    <h3 class="mv-title">Our Vision</h3>
                    <p class="mv-body">Our vision at A D Infotech is to be a global leader in IT services, known for our unwavering commitment to excellence and innovation. We aspire to create a tech-savvy world where businesses harness the power of technology to achieve their goals efficiently and sustainably. With a focus on constant evolution, we seek to continually expand our portfolio of IT solutions and to be the trusted partner that organizations turn to for all their IT needs.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY CHOOSE US -->
    <section class="section-padding whyus-section">
        <div class="container">
            <div style="text-align:center; margin-bottom:64px;">
                <span class="section-tagline">Why Partner With Us</span>
                <h2 class="section-title">Why Choose AD Infotech</h2>
                <p class="section-subtitle">Six reasons thousands of businesses across Delhi NCR trust us with their IT infrastructure.</p>
            </div>
            <div class="whyus-grid">
                <div class="glass-card whyus-card">
                    <div class="whyus-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="7"/><polyline points="8.21,13.89 7,23 12,20 17,23 15.79,13.88"/></svg>
                    </div>
                    <h4 class="whyus-title">Expertise &amp; Experience</h4>
                    <p class="whyus-desc">With years of industry experience, we bring deep knowledge and a proven track record to deliver effective IT solutions.</p>
                </div>
                <div class="glass-card whyus-card">
                    <div class="whyus-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    </div>
                    <h4 class="whyus-title">Customer-Centric Approach</h4>
                    <p class="whyus-desc">Our client-focused strategy ensures that your unique needs and goals are our top priority, resulting in tailored solutions.</p>
                </div>
                <div class="glass-card whyus-card">
                    <div class="whyus-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
                    </div>
                    <h4 class="whyus-title">Cutting-Edge Technology</h4>
                    <p class="whyus-desc">We stay at the forefront of technology trends, providing you with the latest and most innovative solutions for your IT infrastructure.</p>
                </div>
                <div class="glass-card whyus-card">
                    <div class="whyus-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
                    </div>
                    <h4 class="whyus-title">Proactive Support</h4>
                    <p class="whyus-desc">We don't just resolve issues; we prevent them. With proactive monitoring and maintenance, we ensure your IT environment runs smoothly.</p>
                </div>
                <div class="glass-card whyus-card">
                    <div class="whyus-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 11 11 13 15 9"/></svg>
                    </div>
                    <h4 class="whyus-title">Security &amp; Reliability</h4>
                    <p class="whyus-desc">We prioritize the security of your data and the reliability of your IT environment, ensuring your network and information remain protected.</p>
                </div>
                <div class="glass-card whyus-card">
                    <div class="whyus-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
                    </div>
                    <h4 class="whyus-title">Cost-Efficiency</h4>
                    <p class="whyus-desc">Efficient IT doesn't have to break the bank. Our solutions are designed to be cost-effective, providing the best value for your IT investments.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="footer-section">
        <div class="container footer-grid">
            <div class="footer-brand">
                <a href="<?php echo $base_path; ?>index.php#home" class="footer-logo" aria-label="AD Infotech Home">
                    <img src="<?php echo $base_path; ?>assets/images/logo-light.png" alt="AD Infotech Logo" class="footer-logo-img">
                </a>
                <p class="footer-brand-desc">Providing premium enterprise-level IT hardware, peripherals, and proactive support services across New Delhi since 2006.</p>
                <div class="footer-socials">
                    <a href="#" class="footer-social-btn" aria-label="Facebook"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg></a>
                    <a href="#" class="footer-social-btn" aria-label="Twitter"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"/></svg></a>
                    <a href="#" class="footer-social-btn" aria-label="Youtube"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"/><polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"/></svg></a>
                    <a href="#" class="footer-social-btn" aria-label="Instagram"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg></a>
                    <a href="#" class="footer-social-btn" aria-label="Linkedin"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg></a>
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
                <h4 class="footer-col-title">Contact Us</h4>
                <ul class="footer-links">
                    <li><a href="tel:+919811022936" class="footer-link">+91-98110 22936</a></li>
                    <li><a href="tel:+918510022936" class="footer-link">+91-85100 22936</a></li>
                    <li><a href="mailto:infotech.dilip@gmail.com" class="footer-link">infotech.dilip@gmail.com</a></li>
                    <li><a href="mailto:salesadinfotech@gmail.com" class="footer-link">salesadinfotech@gmail.com</a></li>
                    <li class="footer-link" style="cursor:default;">601-A Skylark Building, 60, Nehru Place, New Delhi-110019</li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container footer-bottom-container">
                <p>&copy; <?php echo date('Y'); ?> A D Infotech. All rights reserved.</p>
                <p>Designed with Glassmorphism &amp; High-Performance UI systems.</p>
            </div>
        </div>
    </footer>

    <!-- WhatsApp Widget -->
    <a href="https://wa.me/919811022936" target="_blank" rel="noopener noreferrer" class="whatsapp-widget" aria-label="Chat on WhatsApp">
        <svg viewBox="0 0 24 24"><path d="M12.012 2c-5.506 0-9.989 4.478-9.99 9.984a9.96 9.96 0 0 0 1.333 4.99L2 22l5.233-1.371a9.936 9.936 0 0 0 4.779 1.22c5.507 0 9.99-4.478 9.99-9.986 0-2.67-1.037-5.18-2.92-7.062A9.92 9.92 0 0 0 12.012 2zm5.835 14.165c-.256.726-1.5 1.33-2.046 1.402-.497.067-1.144.11-3.328-.8-2.793-1.163-4.59-4.008-4.73-4.195-.14-.187-1.136-1.509-1.136-2.879 0-1.37.717-2.043 1.01-2.35.293-.306.637-.382.85-.382.213 0 .426.002.61.01.196.008.46-.073.722.56.262.637.897 2.188.974 2.343.078.156.129.337.026.55-.104.214-.156.347-.311.53-.156.184-.328.408-.469.547-.156.155-.32.324-.138.637.182.311.81 1.336 1.734 2.162.925.826 1.708 1.082 2.022 1.238.314.156.497.13.682-.08.187-.214.793-.923 1.004-1.239.213-.314.426-.263.722-.156.295.109 1.874.883 2.196 1.044.322.16.536.24.613.375.078.134.078.775-.178 1.501z"/></svg>
        <span class="whatsapp-txt">Chat with Us</span>
    </a>

    <!-- Scoped styles for about page -->
    <style>
    .about-page-hero {
        position: relative;
        padding: 160px 0 100px;
        background: linear-gradient(160deg, #0F172A 0%, #1E1B4B 50%, #0F172A 100%);
        overflow: hidden;
        text-align: center;
    }
    .about-page-hero-glow {
        position: absolute;
        top: -120px; left: 50%;
        transform: translateX(-50%);
        width: 700px; height: 700px;
        background: radial-gradient(circle, rgba(79,70,229,0.25) 0%, transparent 70%);
        pointer-events: none;
    }
    .about-page-hero-inner { position: relative; z-index: 1; }
    .about-page-hero-title {
        font-family: var(--font-heading);
        font-size: clamp(2.4rem, 5vw, 4rem);
        font-weight: 800;
        color: #fff;
        line-height: 1.15;
        margin: 16px 0 20px;
    }
    .about-page-hero-sub {
        font-size: 1.15rem;
        color: rgba(255,255,255,0.65);
        max-width: 560px;
        margin: 0 auto 52px;
        line-height: 1.7;
    }
    .about-page-hero-stats {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
    }
    .about-stat-card {
        padding: 24px 32px;
        text-align: center;
        background: rgba(255,255,255,0.06);
        border: 1px solid rgba(255,255,255,0.1);
        border-radius: 16px;
        min-width: 150px;
    }
    .about-stat-num {
        display: block;
        font-family: var(--font-heading);
        font-size: 2rem;
        font-weight: 800;
        background: linear-gradient(135deg, #4F46E5, #7C3AED, #06B6D4);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }
    .about-stat-lbl {
        display: block;
        font-size: 0.82rem;
        color: rgba(255,255,255,0.55);
        margin-top: 4px;
        font-weight: 500;
        letter-spacing: 0.02em;
    }
    /* Mission & Vision */
    .mv-section { background: #F8FAFC; }
    .mv-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 28px;
    }
    .mv-card {
        padding: 44px 40px;
        border-radius: 20px;
        background: #fff;
        border: 1px solid rgba(79,70,229,0.1);
        box-shadow: 0 4px 32px rgba(79,70,229,0.06);
        transition: var(--transition-smooth);
    }
    .mv-card:hover { transform: translateY(-4px); box-shadow: 0 12px 48px rgba(79,70,229,0.12); }
    .mv-icon {
        width: 56px; height: 56px;
        border-radius: 14px;
        display: flex; align-items: center; justify-content: center;
        margin-bottom: 24px;
    }
    .mv-icon svg { width: 26px; height: 26px; }
    .mv-icon-mission { background: linear-gradient(135deg, rgba(79,70,229,0.12), rgba(124,58,237,0.12)); }
    .mv-icon-mission svg { stroke: #4F46E5; }
    .mv-icon-vision { background: linear-gradient(135deg, rgba(6,182,212,0.12), rgba(79,70,229,0.12)); }
    .mv-icon-vision svg { stroke: #06B6D4; }
    .mv-title {
        font-family: var(--font-heading);
        font-size: 1.4rem;
        font-weight: 700;
        color: #1E293B;
        margin-bottom: 16px;
    }
    .mv-body {
        font-size: 0.97rem;
        color: #475569;
        line-height: 1.8;
    }
    @media (max-width: 768px) {
        .about-page-hero { padding: 130px 0 70px; }
        .mv-grid { grid-template-columns: 1fr; }
        .about-stat-card { min-width: 130px; padding: 20px 22px; }
    }
    </style>

    <script src="<?php echo $base_path; ?>assets/js/main.js?v=<?php echo time(); ?>"></script>


</body>
</html>
