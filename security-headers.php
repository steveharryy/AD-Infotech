<?php

function apply_security_headers() {
    if (headers_sent()) return;
    header("X-Content-Type-Options: nosniff");
    header("X-Frame-Options: SAMEORIGIN");
    header("X-XSS-Protection: 1; mode=block");
    header("Referrer-Policy: strict-origin-when-cross-origin");
    header("Content-Security-Policy: default-src 'self'; script-src 'self' 'unsafe-inline'; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; font-src 'self' https://fonts.gstatic.com; img-src 'self' data: https:; connect-src 'self' https://formspree.io; frame-src 'self' https://www.google.com https://www.google.com/maps/ https://*.google.com; frame-ancestors 'self';");
}
apply_security_headers();
