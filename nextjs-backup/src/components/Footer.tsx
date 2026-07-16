import React from "react";
import { Facebook, Twitter, Youtube, Instagram, Linkedin } from "lucide-react";

export default function Footer() {
  const quickLinks = [
    { label: "Home", href: "#home" },
    { label: "About Us", href: "#about" },
    { label: "Our Services", href: "#services" },
    { label: "Product Catalog", href: "#products" },
    { label: "Why Choose Us", href: "#why-choose-us" },
    { label: "Contact Support", href: "#contact" },
  ];

  const coreExpertise = [
    { label: "Enterprise Laptops", href: "#services" },
    { label: "Developer Workstations", href: "#services" },
    { label: "Server Infrastructure", href: "#services" },
    { label: "Annual Maintenance (AMC)", href: "#services" },
    { label: "Printer Toner Cartridges", href: "#services" },
    { label: "IP CCTV Security", href: "#services" },
  ];

  return (
    <footer className="bg-bg-darker text-slate-400 pt-20 border-t border-white/5 text-left">
      <div className="container mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-12 mb-16">
        
        {/* Brand Information */}
        <div className="flex flex-col items-start gap-5">
          <a href="#home" className="flex items-center gap-3">
            <svg viewBox="0 0 100 100" className="w-8 h-8 drop-shadow-md">
              <polygon
                points="50,5 90,28 90,72 50,95 10,72 10,28"
                fill="none"
                stroke="url(#footer-logo-grad)"
                strokeWidth="8"
              />
              <defs>
                <linearGradient id="footer-logo-grad" x1="0%" y1="0%" x2="100%" y2="100%">
                  <stop offset="0%" stopColor="#4F46E5" />
                  <stop offset="100%" stopColor="#06B6D4" />
                </linearGradient>
              </defs>
            </svg>
            <span className="font-heading font-extrabold text-white text-lg tracking-tight">
              AD <span className="font-medium text-slate-400">Infotech</span>
            </span>
          </a>
          
          <p className="text-sm leading-relaxed text-slate-400">
            Providing premium enterprise-level IT hardware, peripherals, and proactive support services across New Delhi since 2006.
          </p>

          {/* Social Icons */}
          <div className="flex gap-3">
            {[
              { icon: Facebook, label: "Facebook" },
              { icon: Twitter, label: "Twitter" },
              { icon: Youtube, label: "Youtube" },
              { icon: Instagram, label: "Instagram" },
              { icon: Linkedin, label: "Linkedin" },
            ].map((social, i) => {
              const IconComponent = social.icon;
              return (
                <a
                  key={i}
                  href="#"
                  aria-label={social.label}
                  className="w-9 h-9 rounded-full bg-white/3 border border-white/5 hover:bg-primary hover:text-white hover:border-primary transition-all duration-300 flex items-center justify-center text-slate-400"
                >
                  <IconComponent size={15} />
                </a>
              );
            })}
          </div>
        </div>

        {/* Quick Links */}
        <div className="flex flex-col items-start md:pl-10">
          <h4 className="font-heading font-bold text-white text-base mb-6">Quick Links</h4>
          <ul className="flex flex-col gap-3">
            {quickLinks.map((link, idx) => (
              <li key={idx}>
                <a
                  href={link.href}
                  className="text-sm text-slate-400 hover:text-white hover:translate-x-1 inline-block transition-all"
                >
                  {link.label}
                </a>
              </li>
            ))}
          </ul>
        </div>

        {/* Core Expertise Links */}
        <div className="flex flex-col items-start md:pl-10">
          <h4 className="font-heading font-bold text-white text-base mb-6">Core Expertise</h4>
          <ul className="flex flex-col gap-3">
            {coreExpertise.map((link, idx) => (
              <li key={idx}>
                <a
                  href={link.href}
                  className="text-sm text-slate-400 hover:text-white hover:translate-x-1 inline-block transition-all"
                >
                  {link.label}
                </a>
              </li>
            ))}
          </ul>
        </div>

      </div>

      {/* Footer Bottom Strip */}
      <div className="border-t border-white/5 py-6 text-slate-500 text-xs">
        <div className="container mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-3">
          <p>&copy; {new Date().getFullYear()} A D Infotech. All rights reserved.</p>
          <p>Designed with Glassmorphism & High-Performance UI systems.</p>
        </div>
      </div>
    </footer>
  );
}
