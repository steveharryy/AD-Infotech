<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$base_path = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\');
$base_path = ($base_path === '/' || $base_path === '\\') ? '' : $base_path;
$base_path = $base_path . '/';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | AD Infotech</title>
    <meta name="description" content="Get in touch with AD Infotech for IT support, hardware, networking, AMC, and sales enquiries.">
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
                <li><a href="<?php echo $base_path; ?>services.php" class="nav-link">Services</a></li>
                <li><a href="<?php echo $base_path; ?>products.php" class="nav-link">Products</a></li>
                <li><a href="<?php echo $base_path; ?>index.php#why-choose-us" class="nav-link">Why Us</a></li>
                <li><a href="<?php echo $base_path; ?>contact.php" class="nav-link active">Contact</a></li>
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
                    <li><a href="<?php echo $base_path; ?>services.php" class="mobile-menu-link">Services</a></li>
                    <li><a href="<?php echo $base_path; ?>products.php" class="mobile-menu-link">Products</a></li>
                    <li><a href="<?php echo $base_path; ?>index.php#why-choose-us" class="mobile-menu-link">Why Us</a></li>
                    <li><a href="<?php echo $base_path; ?>contact.php" class="mobile-menu-link active">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="contact-page-main">
        <section class="contact-page-hero">
            <div class="container">
                <span class="section-tagline">Connect With Us</span>
                <h1 class="contact-page-title">Let’s talk about your next IT solution.</h1>
                <p class="contact-page-intro">Reach out for hardware sales, AMC support, networking, repairs, or any other IT requirement. We’ll get back to you promptly.</p>
            </div>
        </section>

        <section class="container contact-page-section">
            <div class="contact-grid">
                <div class="glass-card contact-info">
                    <h3 class="contact-info-title">Contact Details</h3>
                    <p class="contact-info-desc">Visit our sales hub in Nehru Place or give us a call for direct wholesale hardware pricing and quotes.</p>
                    <div class="contact-banner-card">
                        <img src="<?php echo $base_path; ?>assets/images/contact_support.png" alt="Computer Helpdesk Customer Support" class="contact-banner-img">
                        <div class="contact-banner-overlay"></div>
                        <span class="contact-status-badge">
                            <span class="contact-status-dot"></span>
                            Support Active Now
                        </span>
                    </div>
                    <div class="contact-details-list">
                        <div class="contact-detail-item">
                            <div class="contact-detail-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            </div>
                            <div>
                                <h5 class="contact-detail-lbl">Office Location</h5>
                                <p class="contact-detail-val">601-A Skylark Building, 60,<br>Nehru Place, New Delhi-110019</p>
                            </div>
                        </div>
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
                        <div class="contact-detail-item">
                            <div class="contact-detail-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                            </div>
                            <div>
                                <h5 class="contact-detail-lbl">Email Enquiries</h5>
                                <div class="contact-detail-val">
                                    <a href="mailto:infotech.dilip@gmail.com">infotech.dilip@gmail.com</a>
                                    <a href="mailto:salesadinfotech@gmail.com">salesadinfotech@gmail.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact-map-wrapper">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3504.6543169829986!2d77.2514339!3d28.5493921!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce3c4beab49c1%3A0xe54fb7a00f2e0431!2sSkylark%20Building%2C%20Nehru%20Place%2C%20New%20Delhi%2C%20Delhi%20110019!5e0!3m2!1sen!2sin!4v1689255000000!5m2!1sen!2sin" class="contact-map-iframe" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <div class="glass-card contact-form-container">
                    <h3 class="contact-form-title">Send Us a Message</h3>
                    <p class="contact-form-desc">Fill out the form below to enquire about buying computers, original spares, toner refills, or to book a repair service. We will get back to you shortly.</p>
                    <form id="contact-enquiry-form" class="contact-form" novalidate>
                        <div class="form-group">
                            <label for="name" class="form-label">Full Name</label>
                            <div class="form-input-wrapper">
                                <input type="text" id="name" name="name" class="form-control" placeholder="John Doe" required>
                                <svg class="form-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                            </div>
                        </div>
                        <div style="display: grid; gap: 20px;">
                            <div class="form-group">
                                <label for="email" class="form-label">Email Address</label>
                                <div class="form-input-wrapper">
                                    <input type="email" id="email" name="email" class="form-control" placeholder="john@example.com" required>
                                    <svg class="form-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="form-label">Phone Number (Optional)</label>
                                <div class="form-input-wrapper">
                                    <input type="tel" id="phone" name="phone" class="form-control" placeholder="+91 99999 99999">
                                    <svg class="form-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                                </div>
                            </div>
                        </div>
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
                                <svg class="form-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"/><line x1="7" y1="7" x2="7.01" y2="7"/></svg>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message" class="form-label">Your Message</label>
                            <textarea id="message" name="message" class="form-control form-textarea" placeholder="Tell us about your requirement..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-full">Send Message</button>
                    </form>
                </div>
            </div>
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
