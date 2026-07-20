<?php
// Prevent browser caching of the HTML file so changes load immediately.
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

// Calculate the base path dynamically to avoid broken assets if hosted in subdirectories or without trailing slashes.
$base_path = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\');
$base_path = ($base_path === '/' || $base_path === '\\') ? '' : $base_path;
$base_path = $base_path . '/';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AD Infotech | Premium IT Solutions, Hardware & Support</title>
    <meta name="description" content="A D Infotech provides premium computer hardware, desktop management services, AMC, networking, and IT support solutions in Nehru Place, New Delhi.">
    <meta name="keywords" content="AD Infotech, computer hardware, Nehru Place, IT support, AMC, server, workstation, CCTV, printer toner">
    <link rel="icon" type="image/x-icon" href="<?php echo $base_path; ?>assets/images/favicon.ico">
    <link rel="stylesheet" href="<?php echo $base_path; ?>assets/css/style.css?v=<?php echo time(); ?>">
    <script>
        window.BASE_PATH = "<?php echo $base_path; ?>";
    </script>
</head>
<body>

    <!-- -------------------------------------------------------------
         TOP CONTACT STRIP
         ------------------------------------------------------------- -->
    <div class="top-strip">
        <div class="container top-strip-container">
            <div class="top-strip-links">
                <a href="tel:+919811022936" class="top-strip-link">
                    <!-- Phone Icon -->
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                    <span>+91 98110 22936</span>
                </a>
                <a href="tel:+918510022936" class="top-strip-link">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                    <span>+91 85100 22936</span>
                </a>
                <a href="mailto:info@adinfotech.online" class="top-strip-link">
                    <!-- Mail Icon -->
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                    <span>info@adinfotech.online</span>
                </a>
            </div>
            <div class="top-strip-location">
                <!-- MapPin Icon -->
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                <span>Nehru Place, New Delhi</span>
            </div>
        </div>
    </div>

    <!-- -------------------------------------------------------------
         FLOATING STICKY HEADER & NAV
         ------------------------------------------------------------- -->
    <header class="sticky-header-container">
        <nav class="nav-bar not-scrolled">
            <!-- Logo -->
            <a href="#home" class="nav-brand" aria-label="AD Infotech Home">
                <img src="<?php echo $base_path; ?>assets/images/logo-dark.png" alt="AD Infotech Logo" class="nav-logo-img logo-dark">
                <img src="<?php echo $base_path; ?>assets/images/logo-light.png" alt="AD Infotech Logo" class="nav-logo-img logo-light">
                
            </a>

            <!-- Navigation Links (Desktop) -->
            <ul class="nav-links-desktop">
                <li><a href="#home" class="nav-link active">Home</a></li>
                <li><a href="#about" class="nav-link">About</a></li>
                <li><a href="#services" class="nav-link">Services</a></li>
                <li><a href="#products" class="nav-link">Products</a></li>
                <li><a href="#why-choose-us" class="nav-link">Why Us</a></li>
                <li><a href="#contact" class="nav-link">Contact</a></li>
            </ul>

            <!-- Actions (Desktop) -->
            <div class="nav-actions-desktop">
                <div class="nav-search-cue">
                    <!-- Search Icon -->
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                    <span>Search Services</span>
                    <span class="nav-search-key">⌘K</span>
                </div>
                <a href="#contact" class="btn btn-primary">Let's Talk</a>
            </div>

            <!-- Menu Toggle Button (Mobile) -->
            <button class="nav-toggle-btn" aria-label="Toggle Navigation Menu">
                <!-- Hamburger Icon -->
                <svg class="menu-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
                <!-- Close Icon -->
                <svg class="close-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="display: none;"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
            </button>

            <!-- Mobile Menu Panel -->
            <div class="mobile-menu-panel">
                <ul class="mobile-menu-links">
                    <li><a href="#home" class="mobile-menu-link active">Home</a></li>
                    <li><a href="#about" class="mobile-menu-link">About</a></li>
                    <li><a href="#services" class="mobile-menu-link">Services</a></li>
                    <li><a href="#products" class="mobile-menu-link">Products</a></li>
                    <li><a href="#why-choose-us" class="mobile-menu-link">Why Us</a></li>
                    <li><a href="#contact" class="mobile-menu-link">Contact</a></li>
                </ul>
                <div class="mobile-menu-cta">
                    <a href="#contact" class="btn btn-gradient btn-full">Let's Talk</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- -------------------------------------------------------------
         HERO SECTION
         ------------------------------------------------------------- -->
    <section id="home" class="hero-section">
        <div class="hero-glow-1"></div>
        <div class="hero-glow-2"></div>
        <div class="hero-glow-3"></div>

        <div class="container hero-grid">
            <!-- Left Content -->
            <div class="hero-content">
                <div class="hero-tag">
                    <!-- Sparkles Icon -->
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707m0-12.728l.707.707m11.314 11.314l.707.707"/></svg>
                    <span>Genuine Laptops, Printers & Computer Service Center</span>
                </div>
                <h1 class="hero-title">
                    Computer Sales, Rentals <br class="hidden-xs">
                    & <span class="gradient-text">Expert Repairs</span>
                </h1>
                <p class="hero-desc">
                    We sell original laptops, desktops, printers, and genuine cartridges at wholesale prices. We also offer fast doorstep repair services and computer AMC maintenance for offices and homes across Delhi NCR.
                </p>
                <div class="hero-actions">
                    <a href="#services" class="btn btn-gradient btn-lg">
                        <span>Explore Services</span>
                        <!-- ArrowRight Icon -->
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12,5 19,12 12,19"/></svg>
                    </a>
                    <a href="#contact" class="btn btn-secondary btn-lg">
                        <span>Book a Service</span>
                    </a>
                </div>
                <!-- Stats Grid -->
                <div class="hero-stats">
                    <div class="glass-card hero-stat-card">
                        <span class="hero-stat-num">20+</span>
                        <span class="hero-stat-label">Years of Trust</span>
                    </div>
                    <div class="glass-card hero-stat-card">
                        <span class="hero-stat-num">10k+</span>
                        <span class="hero-stat-label">Computers Sold & Fixed</span>
                    </div>
                    <div class="glass-card hero-stat-card">
                        <span class="hero-stat-num">100%</span>
                        <span class="hero-stat-label">Genuine Products</span>
                    </div>
                </div>
            </div>

            <!-- Right Illustration Graphic -->
            <div class="hero-media">
                <div class="hero-illustration-container">
                    <!-- The main generated illustration -->
                    <img src="<?php echo $base_path; ?>assets/images/hero_it_illustration.png" alt="AD Infotech IT Solutions" class="hero-illustration-img">
                    
                    <!-- Floating Glassmorphism Cards -->
                    <!-- Card 1: Genuine Products -->
                    <div class="glass-card hero-floating-card card-genuine animate-float-slow">
                        <span class="card-icon" style="color: var(--color-success); font-weight: 900;">✓</span>
                        <span class="card-text">Genuine Products</span>
                    </div>
                    
                    <!-- Card 2: Same-Day Repair -->
                    <div class="glass-card hero-floating-card card-repair animate-float-fast">
                        <span class="card-icon" style="color: #EAB308;">⚡</span>
                        <span class="card-text">Same-Day Repair</span>
                    </div>
                    
                    <!-- Card 3: AMC Support -->
                    <div class="glass-card hero-floating-card card-amc animate-float-slow" style="animation-delay: -2s;">
                        <span class="card-icon" style="color: var(--color-primary);">🛡️</span>
                        <span class="card-text">AMC Support</span>
                    </div>
                    
                    <!-- Card 4: Doorstep Service -->
                    <div class="glass-card hero-floating-card card-doorstep animate-float-fast" style="animation-delay: -1.5s;">
                        <span class="card-icon" style="color: var(--color-accent);">🚚</span>
                        <span class="card-text">Doorstep Service</span>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <!-- -------------------------------------------------------------
         ABOUT SECTION
         ------------------------------------------------------------- -->
    <section id="about" class="section-padding about-section">
        <div class="about-glow"></div>
        <div class="container">
            <!-- Header Tag & Intro text -->
            <div class="text-center-wrapper" style="text-align: center; margin-bottom: 64px;">
                <span class="section-tagline">About AD Infotech</span>
                <h2 class="section-title">20 Years of Trusted Computer Sales & Repairs</h2>
                <p class="section-subtitle" style="margin-bottom: 24px;">
                    Your one-stop destination for laptop sales, computer rentals, printer supplies, and motherboard repair services across Delhi NCR.
                </p>
                <!-- Keywords Row redesigned in one line properly -->
                <div class="about-keywords-row">
                    <span class="about-keyword">Computer Hardware</span>
                    <span class="about-keyword-dot"></span>
                    <span class="about-keyword">Desktop IT Support</span>
                    <span class="about-keyword-dot"></span>
                    <span class="about-keyword">Annual Maintenance (AMC)</span>
                    <span class="about-keyword-dot"></span>
                    <span class="about-keyword">Server Workstations</span>
                    <span class="about-keyword-dot"></span>
                    <span class="about-keyword">CCTV Security</span>
                    <span class="about-keyword-dot"></span>
                    <span class="about-keyword">Printer Cartridges</span>
                </div>
            </div>

            <!-- Content Grid -->
            <div class="about-grid">


                <!-- Right Copywriting -->
                <div class="about-content">
                    <h3 class="about-title">Welcome to AD Infotech</h3>
                    <p class="about-lead">
                        At A.D Infotech, we are passionate about providing computer hardware parts and premium accessories, including Computer Hardware, Peripherals, Consumables, AMC, and all types of Printer Cartridges and Server Workstations.
                    </p>
                    <p class="about-p">
                        With over 20 years of experience in the industry, our team has a deep understanding of the ever-evolving technology market and is dedicated to staying ahead of the curve. We understand that finding the right computer hardware can be overwhelming, which is why we have curated a wide selection of products from top brands to make your search easier.
                    </p>
                    <p class="about-p about-p-last">
                        From graphics cards to processors, our goal is to provide you with the best components for your computer needs. Our commitment to customer satisfaction and premium products has earned us a loyal following among tech enthusiasts and professionals alike. We take pride in our excellent client service and strive to exceed expectations with every purchase.
                    </p>

                    <!-- Checklist -->
                    <div class="about-check-grid">
                        <div class="about-check-item">
                            <!-- CheckCircle2 Icon -->
                            <svg class="about-check-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22,4 12,14.01 9,11.01"/></svg>
                            <div>
                                <h5 class="about-check-title">Genuine Brands Only</h5>
                                <p class="about-check-desc">We source only original products from HP, Dell, Lenovo, and Canon.</p>
                            </div>
                        </div>
                        <div class="about-check-item">
                            <svg class="about-check-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22,4 12,14.01 9,11.01"/></svg>
                            <div>
                                <h5 class="about-check-title">Fast Repair Services</h5>
                                <p class="about-check-desc">Expert chip-level motherboard repairing and printer servicing.</p>
                            </div>
                        </div>
                    </div>
                    <a href="#contact" class="btn btn-primary btn-lg">Book a Repair Service</a>
                </div>
            </div>
        </div>
    </section>

    <!-- -------------------------------------------------------------
         SERVICES SECTION
         ------------------------------------------------------------- -->
    <section id="services" class="section-padding services-section">
        <div class="container">
            <!-- Header Tag & Title -->
            <div class="text-center-wrapper" style="text-align: center; margin-bottom: 64px;">
                <span class="section-tagline">What We Do</span>
                <h2 class="section-title">Our Services</h2>
                <p class="section-subtitle">
                    Everything from computer sales and corporate AMC support to quick component repair services.
                </p>
            </div>

            <!-- Redesigned Grid of 9 Services (Square boxes, no photos) -->
            <div class="services-unified-grid">
                <!-- Service 1 -->
                <div class="glass-card service-square-card">
                    <div class="service-square-icon">
                        <!-- Laptop Icon -->
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="2" y1="20" x2="22" y2="20"/><line x1="12" y1="17" x2="12" y2="20"/></svg>
                    </div>
                    <h3 class="service-square-title">Laptop Sales & Rentals</h3>
                    <p class="service-square-desc">Buy or rent brand new and refurbished laptops from HP, Dell, and Lenovo for personal use, school work, or office employees.</p>
                </div>
                <!-- Service 2 -->
                <div class="glass-card service-square-card">
                    <div class="service-square-icon">
                        <!-- Terminal Icon -->
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="4,17 10,11 4,5"/><line x1="12" y1="19" x2="20" y2="19"/></svg>
                    </div>
                    <h3 class="service-square-title">Custom built Desktops</h3>
                    <p class="service-square-desc">Get custom-built gaming PCs, high-end office workstations, and dual-monitor systems tailored to your exact needs and budget.</p>
                </div>
                <!-- Service 3 -->
                <div class="glass-card service-square-card">
                    <div class="service-square-icon">
                        <!-- Network Icon -->
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><rect x="16" y="16" width="6" height="6" rx="1"/><rect x="2" y="16" width="6" height="6" rx="1"/><rect x="9" y="2" width="6" height="6" rx="1"/><path d="M12 8v8M5 16v-3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3"/></svg>
                    </div>
                    <h3 class="service-square-title">WiFi & Network Setup</h3>
                    <p class="service-square-desc">Setup high-speed internet connections, Wi-Fi routers, office network cabling (CAT6), and switch configurations.</p>
                </div>
                <!-- Service 4 -->
                <div class="glass-card service-square-card">
                    <div class="service-square-icon">
                        <!-- Settings Icon -->
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 1 1 2.83-2.83l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 1 1 2.83 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z"/></svg>
                    </div>
                    <h3 class="service-square-title">Parts & Peripherals</h3>
                    <p class="service-square-desc">Original mouse, keyboards, docking stations, monitors, power adapters, and speed-up component upgrades.</p>
                </div>
                <!-- Service 5 -->
                <div class="glass-card service-square-card">
                    <div class="service-square-icon">
                        <!-- ShieldAlert Icon -->
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                    </div>
                    <h3 class="service-square-title">Annual Maintenance (AMC)</h3>
                    <p class="service-square-desc">Regular maintenance cleaning, system speed-up tuning, software installation, and quick doorstep repair visits.</p>
                </div>
                <!-- Service 6 -->
                <div class="glass-card service-square-card">
                    <div class="service-square-icon">
                        <!-- Wrench Icon -->
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
                    </div>
                    <h3 class="service-square-title">Hardware Repair Services</h3>
                    <p class="service-square-desc">Motherboard chip-level repairing, laptop screen replacements, data recovery, and printer servicing.</p>
                </div>
                <!-- Service 7 -->
                <div class="glass-card service-square-card">
                    <div class="service-square-icon">
                        <!-- BatteryCharging Icon -->
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 18H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h2"/><path d="M19 6h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-2"/><line x1="11" y1="7" x2="8" y2="17"/><polyline points="5,12 8,12 8,17"/><polyline points="19,12 16,12 16,7"/></svg>
                    </div>
                    <h3 class="service-square-title">Computer UPS & Backups</h3>
                    <p class="service-square-desc">Computer UPS repairs, brand new UPS sales, and backup battery replacement services.</p>
                </div>
                <!-- Service 8 -->
                <div class="glass-card service-square-card">
                    <div class="service-square-icon">
                        <!-- Printer Icon -->
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 6 2 18 2 18 9"/><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"/><rect x="6" y="14" width="12" height="8"/></svg>
                    </div>
                    <h3 class="service-square-title">Printer Toner Cartridges</h3>
                    <p class="service-square-desc">Original and high-yield compatible laser toner cartridges, drum units, ink bottles, and printers parts supplies.</p>
                </div>
                <!-- Service 9 -->
                <div class="glass-card service-square-card">
                    <div class="service-square-icon">
                        <!-- Eye Icon -->
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                    </div>
                    <h3 class="service-square-title">CCTV Security Systems</h3>
                    <p class="service-square-desc">Installation of HD dome and bullet security cameras with mobile live view setups for shops, homes, and offices.</p>
                </div>
            </div>


        </div>
    </section>

    <!-- -------------------------------------------------------------
         DEALS STRIP BANNER
         ------------------------------------------------------------- -->
    <section class="section-padding deals-section">
        <div class="deals-glow-1"></div>
        <div class="deals-glow-2"></div>
        <div class="container">
            <div class="glass-card-dark deals-card">
                <!-- Left Details -->
                <div class="deals-content">
                    <span class="section-tagline text-accent" style="color: var(--color-accent);">Most Recent Deals</span>
                    <h2 class="deals-title">Best Deals on Printers & Peripherals</h2>
                    <p class="deals-desc">
                        We're excited to serve you with top-notch solutions tailored to your needs. Get genuine enterprise laser printers and printer cartridges at special wholesale rates.
                    </p>
                    <!-- Badges -->
                    <div class="deals-badges-flex">
                        <div class="deals-badge-item">
                            <!-- Truck Icon -->
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="3" width="15" height="13"/><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>
                            <span>Free Shipping (Bulk)</span>
                        </div>
                        <div class="deals-badge-item">
                            <!-- Clock Icon -->
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                            <span>On-Time Guaranteed</span>
                        </div>
                        <div class="deals-badge-item highlight">
                            <!-- PhoneCall Icon -->
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.95M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                            <span>Call for Best Price Quote</span>
                        </div>
                    </div>

                    <a href="tel:+919811022936" class="btn btn-gradient btn-lg">
                        <svg class="call-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                        <span>Call for Best Price</span>
                    </a>
                </div>

                <!-- Right Graphic Image -->
                <div class="deals-media">
                    <div class="deals-product-wrapper">
                        <div class="deals-float-badge animate-float-slow">
                            <span class="deals-float-title">Best Deal</span>
                            <span class="deals-float-sub">Original Supplies</span>
                        </div>
                        <div class="deals-image-container">
                            <img src="<?php echo $base_path; ?>assets/images/deals_printer.png" alt="Original Laser Printers and Supplies" class="deals-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- -------------------------------------------------------------
         FEATURED PRODUCTS
         ------------------------------------------------------------- -->
    <section id="products" class="section-padding products-section">
        <div class="container">
            <!-- Header Tag & Intro description -->
            <div class="text-center-wrapper" style="text-align: center; margin-bottom: 64px;">
                <span class="section-tagline">Catalog Showcase</span>
                <h2 class="section-title">Our Featured Products</h2>
                <p class="section-subtitle">
                    We stock original hardware and IT peripherals from global leaders, fully certified and tested.
                </p>
            </div>

            <!-- Retail & Corporate split banner -->
            <div class="glass-card products-banner">
                <div class="products-banner-content">
                    <div class="products-banner-tag">
                        <!-- Package Icon -->
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="16.5" y1="9.4" x2="7.5" y2="4.21"/><polygon points="12 22.08 12 12 3 6.92 3 17.08 12 22.08"/><polygon points="12 22.08 21 17.08 21 6.92 12 12 12 22.08"/><polygon points="12 12 21 6.92 12 1.92 3 6.92 12 12"/><line x1="12" y1="22.08" x2="12" y2="12"/></svg>
                        <span>Retail & Corporate Supplies</span>
                    </div>
                    <h3 class="products-banner-title">Premium Hardware Inventory & Consumables</h3>
                    <p class="products-banner-desc">
                        We stock a wide range of brand new laptops, assembled desktops, original HP, Canon, and Brother toner cartridges, cabling parts, and surveillance cameras. All hardware comes with official company warranties.
                    </p>
                    <div class="products-banner-partners">
                        <span>HP Partner</span>
                        <div class="products-banner-dot"></div>
                        <span>Dell Partner</span>
                        <div class="products-banner-dot"></div>
                        <span>Lenovo Partner</span>
                        <div class="products-banner-dot"></div>
                        <span>Canon Integrator</span>
                    </div>
                </div>
                <div class="products-banner-media">
                    <img src="<?php echo $base_path; ?>assets/images/products_retail.png" alt="Computer Hardware Store Display" class="products-banner-img">
                </div>
            </div>

            <!-- Filters tab button menu -->
            <div class="filters-tabs">
                <button class="filter-btn active" data-filter="all">All Products</button>
                <button class="filter-btn" data-filter="laptops">Laptops</button>
                <button class="filter-btn" data-filter="desktops">Desktops</button>
                <button class="filter-btn" data-filter="aio">All in Ones</button>
                <button class="filter-btn" data-filter="cartridges">Cartridges</button>
                <button class="filter-btn" data-filter="networking">Networking</button>
            </div>

            <!-- Products catalog grid -->
            <div class="products-grid">
                <!-- Item 1: Laptops -->
                <div class="glass-card product-card" data-category="laptops">
                    <div class="product-card-header">
                        <img src="<?php echo $base_path; ?>assets/images/product_laptop.png" alt="HP Dell Lenovo Laptops" class="product-card-img">
                        <div class="product-card-overlay"></div>
                        <span class="product-card-tag">Elite Edition</span>
                    </div>
                    <div class="product-card-body">
                        <span class="product-card-cat">Enterprise Laptops</span>
                        <h4 class="product-card-title">HP, Dell & Lenovo Laptops</h4>
                        <p class="product-card-desc">Reliable brand new and refurbished laptops for daily office work, programming, and student learning.</p>
                        <div class="product-card-footer">
                            <div class="product-card-stock">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22,4 12,14.01 9,11.01"/></svg>
                                <span>In Stock</span>
                            </div>
                            <a href="#contact" class="btn btn-secondary btn-sm">Enquire Now</a>
                        </div>
                    </div>
                </div>

                <!-- Item 2: Desktops -->
                <div class="glass-card product-card" data-category="desktops">
                    <div class="product-card-header">
                        <img src="<?php echo $base_path; ?>assets/images/product_desktop.png" alt="Optiplex Prodesk Desktops" class="product-card-img">
                        <div class="product-card-overlay"></div>
                        <span class="product-card-tag">High Performance</span>
                    </div>
                    <div class="product-card-body">
                        <span class="product-card-cat">Business Desktops</span>
                        <h4 class="product-card-title">OptiPlex & ProDesk Towers</h4>
                        <p class="product-card-desc">Fast business desktop PCs perfect for retail shops, schools, billing counters, and office staff.</p>
                        <div class="product-card-footer">
                            <div class="product-card-stock">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22,4 12,14.01 9,11.01"/></svg>
                                <span>In Stock</span>
                            </div>
                            <a href="#contact" class="btn btn-secondary btn-sm">Enquire Now</a>
                        </div>
                    </div>
                </div>

                <!-- Item 3: AIO -->
                <div class="glass-card product-card" data-category="aio">
                    <div class="product-card-header">
                        <img src="<?php echo $base_path; ?>assets/images/product_aio.png" alt="All in One PCs" class="product-card-img">
                        <div class="product-card-overlay"></div>
                        <span class="product-card-tag">Modern Workspace</span>
                    </div>
                    <div class="product-card-body">
                        <span class="product-card-cat">All-in-One PCs</span>
                        <h4 class="product-card-title">Sleek All-in-One Computers</h4>
                        <p class="product-card-desc">Elegant, space-saving desktop computers with large screens, built-in speakers, and HD webcams.</p>
                        <div class="product-card-footer">
                            <div class="product-card-stock">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22,4 12,14.01 9,11.01"/></svg>
                                <span>In Stock</span>
                            </div>
                            <a href="#contact" class="btn btn-secondary btn-sm">Enquire Now</a>
                        </div>
                    </div>
                </div>

                <!-- Item 4: Cartridges -->
                <div class="glass-card product-card" data-category="cartridges">
                    <div class="product-card-header">
                        <img src="<?php echo $base_path; ?>assets/images/product_cartridge.png" alt="Printer Cartridges" class="product-card-img">
                        <div class="product-card-overlay"></div>
                        <span class="product-card-tag">100% Original</span>
                    </div>
                    <div class="product-card-body">
                        <span class="product-card-cat">Laser Toners</span>
                        <h4 class="product-card-title">HP, Canon & Brother Cartridges</h4>
                        <p class="product-card-desc">100% genuine printer ink bottles and laser toner cartridges that give clean, smudge-free prints.</p>
                        <div class="product-card-footer">
                            <div class="product-card-stock">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22,4 12,14.01 9,11.01"/></svg>
                                <span>In Stock</span>
                            </div>
                            <a href="#contact" class="btn btn-secondary btn-sm">Enquire Now</a>
                        </div>
                    </div>
                </div>

                <!-- Item 5: Networking -->
                <div class="glass-card product-card" data-category="networking">
                    <div class="product-card-header">
                        <img src="<?php echo $base_path; ?>assets/images/product_networking.png" alt="Networking Cables" class="product-card-img">
                        <div class="product-card-overlay"></div>
                        <span class="product-card-tag">High Speed</span>
                    </div>
                    <div class="product-card-body">
                        <span class="product-card-cat">Cables & Switches</span>
                        <h4 class="product-card-title">Internet Cables & Switches</h4>
                        <p class="product-card-desc">High-quality network patch cables, office router setups, and internet switches for stable network connection.</p>
                        <div class="product-card-footer">
                            <div class="product-card-stock">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22,4 12,14.01 9,11.01"/></svg>
                                <span>In Stock</span>
                            </div>
                            <a href="#contact" class="btn btn-secondary btn-sm">Enquire Now</a>
                        </div>
                    </div>
                </div>

                <!-- Item 6: CCTV (Networking cat) -->
                <div class="glass-card product-card" data-category="networking">
                    <div class="product-card-header">
                        <img src="<?php echo $base_path; ?>assets/images/product_cctv.png" alt="CCTV Cameras" class="product-card-img">
                        <div class="product-card-overlay"></div>
                        <span class="product-card-tag">Ultra HD</span>
                    </div>
                    <div class="product-card-body">
                        <span class="product-card-cat">CCTV & Security</span>
                        <h4 class="product-card-title">Smart HD Security Cameras</h4>
                        <p class="product-card-desc">HD dome and bullet security cameras for shops, offices, and homes with live mobile screen monitoring.</p>
                        <div class="product-card-footer">
                            <div class="product-card-stock">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22,4 12,14.01 9,11.01"/></svg>
                                <span>In Stock</span>
                            </div>
                            <a href="#contact" class="btn btn-secondary btn-sm">Enquire Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- -------------------------------------------------------------
         BRANDS WE DEAL IN SECTION (SLIDER CAROUSEL)
         ------------------------------------------------------------- -->
    <section class="section-padding brands-section" id="brands">
        <div class="container">
            <div class="brands-wrapper-box">
                <h2 class="brands-title">Brands We Deal In</h2>

                <!-- Slider Container -->
                <div class="brands-carousel-container">
                    <!-- Left Arrow Button -->
                    <button class="brands-nav-btn brands-prev" id="brands-prev-btn" aria-label="Previous Brands">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"/></svg>
                    </button>

                    <!-- Viewport Track -->
                    <div class="brands-viewport">
                        <div class="brands-track" id="brands-track">
                            <!-- 1. CP Plus -->
                            <div class="brand-slide">
                                <div class="brand-card">
                                    <img src="<?php echo $base_path; ?>assets/images/brands/cp-plus.svg" alt="CP Plus Logo" class="brand-logo-img">
                                </div>
                            </div>
                            <!-- 2. Hikvision -->
                            <div class="brand-slide">
                                <div class="brand-card">
                                    <img src="<?php echo $base_path; ?>assets/images/brands/hikvision.svg" alt="Hikvision Logo" class="brand-logo-img">
                                </div>
                            </div>
                            <!-- 3. Dahua -->
                            <div class="brand-slide">
                                <div class="brand-card">
                                    <img src="<?php echo $base_path; ?>assets/images/brands/dahua.svg" alt="Dahua Logo" class="brand-logo-img">
                                </div>
                            </div>
                            <!-- 4. SonicWall -->
                            <div class="brand-slide">
                                <div class="brand-card">
                                    <img src="<?php echo $base_path; ?>assets/images/brands/sonicwall.svg" alt="SonicWall Logo" class="brand-logo-img">
                                </div>
                            </div>
                            <!-- 5. Cyberoam -->
                            <div class="brand-slide">
                                <div class="brand-card">
                                    <img src="<?php echo $base_path; ?>assets/images/brands/cyberoam.svg" alt="Cyberoam Logo" class="brand-logo-img">
                                </div>
                            </div>
                            <!-- 6. Samsung -->
                            <div class="brand-slide">
                                <div class="brand-card">
                                    <img src="<?php echo $base_path; ?>assets/images/brands/samsung.svg" alt="Samsung Logo" class="brand-logo-img">
                                </div>
                            </div>
                            <!-- 7. Microsoft -->
                            <div class="brand-slide">
                                <div class="brand-card">
                                    <img src="<?php echo $base_path; ?>assets/images/brands/microsoft.svg" alt="Microsoft Logo" class="brand-logo-img">
                                </div>
                            </div>
                            <!-- 8. Cisco -->
                            <div class="brand-slide">
                                <div class="brand-card">
                                    <img src="<?php echo $base_path; ?>assets/images/brands/cisco.svg" alt="Cisco Logo" class="brand-logo-img">
                                </div>
                            </div>
                            <!-- 9. Lenovo -->
                            <div class="brand-slide">
                                <div class="brand-card">
                                    <img src="<?php echo $base_path; ?>assets/images/brands/lenovo.svg" alt="Lenovo Logo" class="brand-logo-img">
                                </div>
                            </div>
                            <!-- 10. Acer -->
                            <div class="brand-slide">
                                <div class="brand-card">
                                    <img src="<?php echo $base_path; ?>assets/images/brands/acer.svg" alt="Acer Logo" class="brand-logo-img">
                                </div>
                            </div>
                            <!-- 11. Dell -->
                            <div class="brand-slide">
                                <div class="brand-card">
                                    <img src="<?php echo $base_path; ?>assets/images/brands/dell.svg" alt="Dell Logo" class="brand-logo-img">
                                </div>
                            </div>
                            <!-- 12. HP -->
                            <div class="brand-slide">
                                <div class="brand-card">
                                    <img src="<?php echo $base_path; ?>assets/images/brands/hp.svg" alt="HP Logo" class="brand-logo-img">
                                </div>
                            </div>
                            <!-- 13. D-Link -->
                            <div class="brand-slide">
                                <div class="brand-card">
                                    <img src="<?php echo $base_path; ?>assets/images/brands/dlink.svg" alt="D-Link Logo" class="brand-logo-img">
                                </div>
                            </div>
                            <!-- 14. Toshiba -->
                            <div class="brand-slide">
                                <div class="brand-card">
                                    <img src="<?php echo $base_path; ?>assets/images/brands/toshiba.svg" alt="Toshiba Logo" class="brand-logo-img">
                                </div>
                            </div>
                            <!-- 15. McAfee -->
                            <div class="brand-slide">
                                <div class="brand-card">
                                    <img src="<?php echo $base_path; ?>assets/images/brands/mcafee.svg" alt="McAfee Logo" class="brand-logo-img">
                                </div>
                            </div>
                            <!-- 16. LG -->
                            <div class="brand-slide">
                                <div class="brand-card">
                                    <img src="<?php echo $base_path; ?>assets/images/brands/lg.svg" alt="LG Logo" class="brand-logo-img">
                                </div>
                            </div>
                            <!-- 17. Intel -->
                            <div class="brand-slide">
                                <div class="brand-card">
                                    <img src="<?php echo $base_path; ?>assets/images/brands/intel.svg" alt="Intel Logo" class="brand-logo-img">
                                </div>
                            </div>
                            <!-- 18. Seagate -->
                            <div class="brand-slide">
                                <div class="brand-card">
                                    <img src="<?php echo $base_path; ?>assets/images/brands/seagate.svg" alt="Seagate Logo" class="brand-logo-img">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Arrow Button -->
                    <button class="brands-nav-btn brands-next" id="brands-next-btn" aria-label="Next Brands">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
                    </button>
                </div>

                <!-- Pagination Dots Indicator -->
                <div class="brands-dots-container" id="brands-dots"></div>
            </div>
        </div>
    </section>

    <!-- -------------------------------------------------------------
         WHY CHOOSE US
         ------------------------------------------------------------- -->
    <section id="why-choose-us" class="section-padding whyus-section">
        <div class="container">
            <!-- Header tagline -->
            <div class="text-center-wrapper" style="text-align: center; margin-bottom: 64px;">
                <span class="section-tagline">Why Partner With Us</span>
                <h2 class="section-title">The AD Infotech Advantage</h2>
                <p class="section-subtitle">
                    Our core pillars of service that ensure your corporate computers and networks function with zero disruption.
                </p>
            </div>

            <!-- Grid lists -->
            <div class="whyus-grid">
                <!-- Advantage 1 -->
                <div class="glass-card whyus-card">
                    <div class="whyus-icon">
                        <!-- Award Icon -->
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="7"/><polyline points="8.21,13.89 7,23 12,20 17,23 15.79,13.88"/></svg>
                    </div>
                    <h4 class="whyus-title">Expertise & Experience</h4>
                    <p class="whyus-desc">With years of industry experience, we bring deep knowledge and a proven track record to deliver effective IT solutions.</p>
                </div>
                <!-- Advantage 2 -->
                <div class="glass-card whyus-card">
                    <div class="whyus-icon">
                        <!-- Users Icon -->
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    </div>
                    <h4 class="whyus-title">Customer-Centric Approach</h4>
                    <p class="whyus-desc">Our client-focused strategy ensures that your unique needs and goals are our top priority, resulting in tailored solutions.</p>
                </div>
                <!-- Advantage 3 -->
                <div class="glass-card whyus-card">
                    <div class="whyus-icon">
                        <!-- Zap Icon -->
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
                    </div>
                    <h4 class="whyus-title">Cutting-Edge Technology</h4>
                    <p class="whyus-desc">We stay at the forefront of technology trends, providing you with the latest and most innovative solutions for your IT infrastructure.</p>
                </div>
                <!-- Advantage 4 -->
                <div class="glass-card whyus-card">
                    <div class="whyus-icon">
                        <!-- Activity Icon -->
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
                    </div>
                    <h4 class="whyus-title">Proactive Support</h4>
                    <p class="whyus-desc">We don't just resolve issues; we prevent them. With proactive monitoring and maintenance, we ensure that your IT environment runs smoothly.</p>
                </div>
                <!-- Advantage 5 -->
                <div class="glass-card whyus-card">
                    <div class="whyus-icon">
                        <!-- ShieldCheck Icon -->
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 11 11 13 15 9"/></svg>
                    </div>
                    <h4 class="whyus-title">Security & Reliability</h4>
                    <p class="whyus-desc">We prioritize the security of your data and the reliability of your IT environment, ensuring your network and information remain protected.</p>
                </div>
                <!-- Advantage 6 -->
                <div class="glass-card whyus-card">
                    <div class="whyus-icon">
                        <!-- DollarSign Icon -->
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
                    </div>
                    <h4 class="whyus-title">Cost-Efficiency</h4>
                    <p class="whyus-desc">We believe that efficient IT doesn't have to break the bank. Our solutions are designed to be cost-effective, providing you with the best value.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- -------------------------------------------------------------
         CONTACT SECTION & INTERACTIVE FORM
         ------------------------------------------------------------- -->
    <section id="contact" class="section-padding contact-section">
        <div class="container">
            <!-- Header Tagline -->
            <div class="text-center-wrapper" style="text-align: center; margin-bottom: 64px;">
                <span class="section-tagline">Connect With Us</span>
                <h2 class="section-title">Get In Touch</h2>
                <p class="section-subtitle">
                    Reach out anytime! We're here to assist you. Let's connect and explore how we can support your business goals.
                </p>
            </div>

            <!-- Content Grid -->
            <div class="contact-grid">
                <!-- Left Details Info -->
                <div class="glass-card contact-info">
                    <h3 class="contact-info-title">Contact Details</h3>
                    <p class="contact-info-desc">Visit our sales hub in Nehru Place or give us a call for direct wholesale hardware pricing and quotes.</p>

                    <!-- Active status header image -->
                    <div class="contact-banner-card">
                        <img src="<?php echo $base_path; ?>assets/images/contact_support.png" alt="Computer Helpdesk Customer Support" class="contact-banner-img">
                        <div class="contact-banner-overlay"></div>
                        <span class="contact-status-badge">
                            <span class="contact-status-dot"></span>
                            Support Active Now
                        </span>
                    </div>

                    <!-- Details Lists -->
                    <div class="contact-details-list">
                        <!-- Location -->
                        <div class="contact-detail-item">
                            <div class="contact-detail-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            </div>
                            <div>
                                <h5 class="contact-detail-lbl">Office Location</h5>
                                <p class="contact-detail-val">601-A Skylark Building, 60,<br>Nehru Place, New Delhi-110019</p>
                            </div>
                        </div>
                        <!-- Phones -->
                        <div class="contact-detail-item">
                            <div class="contact-detail-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                            </div>
                            <div>
                                <h5 class="contact-detail-lbl">Phone Numbers</h5>
                                <div class="contact-detail-val">
                                    <a href="tel:+919811022936">+91-98110 22936</a>
                                    <a href="tel:+918510022936">+91-85100 22936</a>
                                </div>
                            </div>
                        </div>
                        <!-- Emails -->
                        <div class="contact-detail-item">
                            <div class="contact-detail-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                            </div>
                            <div>
                                <h5 class="contact-detail-lbl">Email Enquiries</h5>
                                <div class="contact-detail-val">
                                    <a href="mailto:info@adinfotech.online">info@adinfotech.online</a>
                                    <a href="mailto:infotech.dilip@gmail.com">infotech.dilip@gmail.com</a>
                                    <a href="mailto:salesadinfotech@gmail.com">salesadinfotech@gmail.com</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Embed Google Maps -->
                    <div class="contact-map-wrapper">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3504.6543169829986!2d77.2514339!3d28.5493921!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce3c4beab49c1%3A0xe54fb7a00f2e0431!2sSkylark%20Building%2C%20Nehru%20Place%2C%20New%20Delhi%2C%20Delhi%20110019!5e0!3m2!1sen!2sin!4v1689255000000!5m2!1sen!2sin" 
                            class="contact-map-iframe" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>

                <!-- Right Form Wrapper -->
                <div class="glass-card contact-form-container">
                    <h3 class="contact-form-title">Send Us a Message</h3>
                    <p class="contact-form-desc">Fill out the form below to enquire about buying computers, original spares, toner refills, or to book a repair service. We will get back to you shortly.</p>

                    <!-- Contact Form -->
                    <form id="contact-enquiry-form" class="contact-form" novalidate>
                        <!-- Full Name -->
                        <div class="form-group">
                            <label for="name" class="form-label">Full Name</label>
                            <div class="form-input-wrapper">
                                <input type="text" id="name" name="name" class="form-control" placeholder="John Doe" required>
                                <!-- User Icon -->
                                <svg class="form-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                            </div>
                        </div>

                        <!-- Email & Phone wrapper -->
                        <div style="display: grid; grid-template-cols: 1fr; gap: 20px;">
                            <div style="grid-column: span 1;" class="form-group">
                                <label for="email" class="form-label">Email Address</label>
                                <div class="form-input-wrapper">
                                    <input type="email" id="email" name="email" class="form-control" placeholder="john@example.com" required>
                                    <!-- Mail Icon -->
                                    <svg class="form-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                                </div>
                            </div>
                            <div style="grid-column: span 1;" class="form-group">
                                <label for="phone" class="form-label">Phone Number (Optional)</label>
                                <div class="form-input-wrapper">
                                    <input type="tel" id="phone" name="phone" class="form-control" placeholder="+91 99999 99999">
                                    <!-- Phone Icon -->
                                    <svg class="form-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                                </div>
                            </div>
                        </div>

                        <!-- Select Service -->
                        <div class="form-group">
                            <label for="service" class="form-label">Select Service Required</label>
                            <div class="form-select-wrapper">
                                <select id="service" name="service" class="form-control">
                                    <option value="hardware">Buy Laptops or Desktops</option>
                                    <option value="amc">Annual Maintenance Contract (AMC)</option>
                                    <option value="networking">WiFi & Network Setup</option>
                                    <option value="repair">Computer/Printer Repairs</option>
                                    <option value="cctv">CCTV Camera Setup</option>
                                </select>
                                <!-- Tag Icon -->
                                <svg class="form-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"/><line x1="7" y1="7" x2="7.01" y2="7"/></svg>
                                <!-- ChevronDown Icon -->
                                <svg class="form-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
                            </div>
                        </div>

                        <!-- Message -->
                        <div class="form-group">
                            <label for="message" class="form-label">Your Message</label>
                            <div class="form-input-wrapper">
                                <textarea id="message" name="message" class="form-control" rows="5" placeholder="Describe your computer requirements, model number of the device to repair, or toner cartridge count needed..." required></textarea>
                                <!-- MessageSquare Icon -->
                                <svg class="form-icon form-icon-textarea" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" id="contact-submit-btn" class="btn btn-gradient btn-full btn-lg">
                            <span id="contact-submit-text">Send Message</span>
                            <!-- Send Icon -->
                            <svg id="contact-btn-send" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                            <!-- Loader2 (Spinner) Icon -->
                            <svg id="contact-btn-spinner" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="display: none; animation: spin 1s linear infinite;"><line x1="12" y1="2" x2="12" y2="6"/><line x1="12" y1="18" x2="12" y2="22"/><line x1="4.93" y1="4.93" x2="7.76" y2="7.76"/><line x1="16.24" y1="16.24" x2="19.07" y2="19.07"/><line x1="2" y1="12" x2="6" y2="12"/><line x1="18" y1="12" x2="22" y2="12"/><line x1="6.34" y1="17.66" x2="9.17" y2="14.83"/><line x1="14.83" y1="9.17" x2="17.66" y2="6.34"/></svg>
                        </button>
                    </form>

                    <!-- Success toast feedback (dynamically displayed via JS) -->
                    <div id="contact-success-toast" class="glass-card contact-success-box" style="display: none;">
                        <div class="contact-success-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22,4 12,14.01 9,11.01"/></svg>
                        </div>
                        <div>
                            <h5 class="contact-success-title">Message Sent Successfully!</h5>
                            <p class="contact-success-desc">Thank you. Our support representative will call you shortly.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Floating WhatsApp Widget -->
        <a href="https://wa.me/919811022936" target="_blank" rel="noopener noreferrer" class="whatsapp-widget" aria-label="Chat on WhatsApp">
            <svg viewBox="0 0 24 24">
                <path d="M12.012 2c-5.506 0-9.989 4.478-9.99 9.984a9.96 9.96 0 0 0 1.333 4.99L2 22l5.233-1.371a9.936 9.936 0 0 0 4.779 1.22c5.507 0 9.99-4.478 9.99-9.986 0-2.67-1.037-5.18-2.92-7.062A9.92 9.92 0 0 0 12.012 2zm5.835 14.165c-.256.726-1.5 1.33-2.046 1.402-.497.067-1.144.11-3.328-.8-2.793-1.163-4.59-4.008-4.73-4.195-.14-.187-1.136-1.509-1.136-2.879 0-1.37.717-2.043 1.01-2.35.293-.306.637-.382.85-.382.213 0 .426.002.61.01.196.008.46-.073.722.56.262.637.897 2.188.974 2.343.078.156.129.337.026.55-.104.214-.156.347-.311.53-.156.184-.328.408-.469.547-.156.155-.32.324-.138.637.182.311.81 1.336 1.734 2.162.925.826 1.708 1.082 2.022 1.238.314.156.497.13.682-.08.187-.214.793-.923 1.004-1.239.213-.314.426-.263.722-.156.295.109 1.874.883 2.196 1.044.322.16.536.24.613.375.078.134.078.775-.178 1.501z" />
            </svg>
            <span class="whatsapp-txt">Chat with Us</span>
        </a>
    </section>

    <!-- -------------------------------------------------------------
         FOOTER
         ------------------------------------------------------------- -->
    <footer class="footer-section">
        <div class="container footer-grid">
            <!-- Col 1: Brand details -->
            <div class="footer-brand">
                <a href="#home" class="footer-logo" aria-label="AD Infotech Home">
                    <img src="<?php echo $base_path; ?>assets/images/logo-light.png" alt="AD Infotech Logo" class="footer-logo-img">
                    
                </a>
                <p class="footer-brand-desc">Providing premium enterprise-level IT hardware, peripherals, and proactive support services across New Delhi since 2006.</p>
                
                <!-- Social media -->
                <div class="footer-socials">
                    <a href="#" class="footer-social-btn" aria-label="Facebook">
                        <!-- Facebook Icon -->
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                    </a>
                    <a href="#" class="footer-social-btn" aria-label="Twitter">
                        <!-- Twitter Icon -->
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"/></svg>
                    </a>
                    <a href="#" class="footer-social-btn" aria-label="Youtube">
                        <!-- Youtube Icon -->
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"/><polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"/></svg>
                    </a>
                    <a href="#" class="footer-social-btn" aria-label="Instagram">
                        <!-- Instagram Icon -->
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
                    </a>
                    <a href="#" class="footer-social-btn" aria-label="Linkedin">
                        <!-- Linkedin Icon -->
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
                    </a>
                </div>
            </div>

            <!-- Col 2: Quick links -->
            <div class="footer-col">
                <h4 class="footer-col-title">Quick Links</h4>
                <ul class="footer-links">
                    <li><a href="#home" class="footer-link">Home</a></li>
                    <li><a href="#about" class="footer-link">About Us</a></li>
                    <li><a href="#services" class="footer-link">Our Services</a></li>
                    <li><a href="#products" class="footer-link">Product Catalog</a></li>
                    <li><a href="#why-choose-us" class="footer-link">Why Choose Us</a></li>
                    <li><a href="#contact" class="footer-link">Contact Support</a></li>
                </ul>
            </div>

            <!-- Col 3: Core expertise -->
            <div class="footer-col">
                <h4 class="footer-col-title">Core Expertise</h4>
                <ul class="footer-links">
                    <li><a href="#services" class="footer-link">Enterprise Laptops</a></li>
                    <li><a href="#services" class="footer-link">Developer Workstations</a></li>
                    <li><a href="#services" class="footer-link">Server Infrastructure</a></li>
                    <li><a href="#services" class="footer-link">Annual Maintenance (AMC)</a></li>
                    <li><a href="#services" class="footer-link">Printer Toner Cartridges</a></li>
                    <li><a href="#services" class="footer-link">IP CCTV Security</a></li>
                </ul>
            </div>
        </div>

        <!-- Footer Bottom Bar -->
        <div class="footer-bottom">
            <div class="container footer-bottom-container">
                <p>&copy; <?php echo date('Y'); ?> A D Infotech. All rights reserved.</p>
                <p>Designed with Glassmorphism & High-Performance UI systems.</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="<?php echo $base_path; ?>assets/js/main.js?v=<?php echo time(); ?>"></script>
</body>
</html>
