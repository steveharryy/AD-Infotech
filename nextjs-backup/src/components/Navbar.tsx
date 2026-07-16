"use client";

import React, { useState, useEffect } from "react";
import { Menu, X, Phone, Mail, MapPin, Search } from "lucide-react";
import { motion, AnimatePresence } from "framer-motion";

export default function Navbar() {
  const [isOpen, setIsOpen] = useState(false);
  const [isScrolled, setIsScrolled] = useState(false);
  const [activeSection, setActiveSection] = useState("home");

  useEffect(() => {
    const handleScroll = () => {
      setIsScrolled(window.scrollY > 50);

      const sections = ["home", "about", "services", "products", "why-choose-us", "contact"];
      const scrollY = window.pageYOffset;

      for (const section of sections) {
        const el = document.getElementById(section);
        if (el) {
          const top = el.offsetTop - 120;
          const height = el.offsetHeight;
          if (scrollY > top && scrollY <= top + height) {
            setActiveSection(section);
            break;
          }
        }
      }
    };

    window.addEventListener("scroll", handleScroll);
    handleScroll();

    return () => window.removeEventListener("scroll", handleScroll);
  }, []);

  const navLinks = [
    { label: "Home", href: "#home", id: "home" },
    { label: "About", href: "#about", id: "about" },
    { label: "Services", href: "#services", id: "services" },
    { label: "Products", href: "#products", id: "products" },
    { label: "Why Us", href: "#why-choose-us", id: "why-choose-us" },
    { label: "Contact", href: "#contact", id: "contact" },
  ];

  return (
    <>
      {/* Top Contact Strip */}
      <div className="bg-bg-darker text-slate-400 text-[11px] font-medium py-2 border-b border-white/5 transition-colors duration-300">
        <div className="container mx-auto px-6 flex flex-col sm:flex-row justify-between items-center gap-2">
          <div className="flex flex-wrap justify-center gap-6">
            <a href="tel:+919811022936" className="flex items-center gap-2 hover:text-white transition-colors duration-200">
              <Phone size={11} className="text-accent" />
              <span>+91 98110 22936</span>
            </a>
            <a href="tel:+918510022936" className="flex items-center gap-2 hover:text-white transition-colors duration-200">
              <Phone size={11} className="text-accent" />
              <span>+91 85100 22936</span>
            </a>
            <a href="mailto:info@adinfotech.online" className="flex items-center gap-2 hover:text-white transition-colors duration-200">
              <Mail size={11} className="text-accent" />
              <span>info@adinfotech.online</span>
            </a>
          </div>
          <div className="flex items-center gap-2 text-slate-300">
            <MapPin size={11} className="text-primary" />
            <span>Nehru Place, New Delhi</span>
          </div>
        </div>
      </div>

      {/* Floating Sticky Header */}
      <header className="sticky top-5 z-50 -mb-[72px] px-6 w-full max-w-[1248px] mx-auto pointer-events-none">
        <motion.nav
          initial={{ y: -20, opacity: 0 }}
          animate={{ y: 0, opacity: 1 }}
          transition={{ duration: 0.6, ease: [0.16, 1, 0.3, 1] }}
          className={`w-full flex justify-between items-center py-3 px-6 md:px-8 rounded-full pointer-events-auto transition-all duration-500 shadow-md ${
            isScrolled
              ? "bg-slate-950/85 backdrop-blur-xl border border-white/10 shadow-2xl text-white"
              : "bg-white/70 backdrop-blur-xl border border-white/40 text-slate-900"
          }`}
        >
          {/* Logo */}
          <a href="#home" className="flex items-center gap-3 group">
            <div className="w-9 h-9 transition-transform group-hover:scale-105 duration-500">
              <svg viewBox="0 0 100 100" className="w-full h-full drop-shadow-md">
                <polygon
                  points="50,5 90,28 90,72 50,95 10,72 10,28"
                  fill="none"
                  stroke="url(#nav-logo-grad)"
                  strokeWidth="8"
                />
                <text
                  x="50"
                  y="58"
                  fontFamily="var(--font-plus-jakarta-sans)"
                  fontWeight="800"
                  fontSize="28"
                  fill={isScrolled ? "white" : "#0F172A"}
                  textAnchor="middle"
                >
                  ADI
                </text>
                <defs>
                  <linearGradient id="nav-logo-grad" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" stopColor="#4F46E5" />
                    <stop offset="50%" stopColor="#7C3AED" />
                    <stop offset="100%" stopColor="#06B6D4" />
                  </linearGradient>
                </defs>
              </svg>
            </div>
            <span className="font-heading font-extrabold text-lg tracking-tight">
              AD <span className={`font-semibold ${isScrolled ? "text-slate-400" : "text-slate-500"}`}>Infotech</span>
            </span>
          </a>

          {/* Navigation Links (Desktop) */}
          <ul className="hidden md:flex items-center gap-7">
            {navLinks.map((link) => (
              <li key={link.id} className="relative">
                <a
                  href={link.href}
                  className={`font-heading font-bold text-[13px] tracking-wide relative py-1.5 px-1.5 transition-colors duration-300 ${
                    activeSection === link.id
                      ? isScrolled
                        ? "text-white"
                        : "text-slate-950"
                      : isScrolled
                      ? "text-slate-400 hover:text-white"
                      : "text-slate-500 hover:text-slate-900"
                  }`}
                >
                  {link.label}
                  {activeSection === link.id && (
                    <motion.span
                      layoutId="activeNavIndicator"
                      className="absolute bottom-0 left-0 right-0 h-[2px] bg-gradient-to-r from-primary to-accent rounded-full"
                      transition={{ type: "spring", stiffness: 380, damping: 30 }}
                    />
                  )}
                </a>
              </li>
            ))}
          </ul>

          {/* Right Action / CMD Indicator */}
          <div className="hidden md:flex items-center gap-4">
            {/* Search command visual cue (Linear style) */}
            <div className={`flex items-center gap-2 border px-3 py-1.5 rounded-full text-[11px] font-medium transition-all ${
              isScrolled
                ? "bg-white/5 border-white/10 text-slate-400"
                : "bg-slate-100/70 border-slate-200/50 text-slate-500"
            }`}>
              <Search size={12} />
              <span>Search Services</span>
              <span className={`px-1.5 py-0.5 rounded text-[9px] font-bold border ${
                isScrolled ? "bg-white/10 border-white/10 text-white" : "bg-white border-slate-200 text-slate-600"
              }`}>
                ⌘K
              </span>
            </div>

            <a
              href="#contact"
              className={`font-heading font-bold text-[13px] px-5 py-2.5 rounded-full transition-all duration-300 hover:scale-[1.02] shadow-sm hover:shadow-md ${
                isScrolled
                  ? "bg-white text-slate-950 hover:bg-slate-100"
                  : "bg-slate-950 text-white hover:bg-primary"
              }`}
            >
              Let&apos;s Talk
            </a>
          </div>

          {/* Menu Toggle Button (Mobile) */}
          <button
            onClick={() => setIsOpen(!isOpen)}
            className="md:hidden p-1.5 rounded-lg focus:outline-none transition-colors"
            aria-label="Toggle Navigation Menu"
          >
            {isOpen ? <X size={22} /> : <Menu size={22} />}
          </button>

          {/* Mobile Menu Panel */}
          <AnimatePresence>
            {isOpen && (
              <motion.div
                initial={{ opacity: 0, y: 15 }}
                animate={{ opacity: 1, y: 0 }}
                exit={{ opacity: 0, y: 15 }}
                transition={{ duration: 0.25, ease: "easeInOut" }}
                className={`absolute top-20 left-4 right-4 p-6 rounded-3xl border flex flex-col gap-4 shadow-2xl pointer-events-auto md:hidden ${
                  isScrolled
                    ? "bg-slate-950/98 border-white/10 text-white"
                    : "bg-white/98 border-slate-200/60 text-slate-900"
                }`}
              >
                <ul className="flex flex-col gap-3">
                  {navLinks.map((link) => (
                    <li key={link.id} className="w-full">
                      <a
                        href={link.href}
                        onClick={() => setIsOpen(false)}
                        className={`block w-full py-2 font-heading font-bold text-base transition-colors ${
                          activeSection === link.id ? "text-primary" : "opacity-80 hover:opacity-100"
                        }`}
                      >
                        {link.label}
                      </a>
                    </li>
                  ))}
                  <li className="pt-3 border-t border-slate-200/20">
                    <a
                      href="#contact"
                      onClick={() => setIsOpen(false)}
                      className="block w-full text-center font-heading font-bold text-sm py-3 px-6 rounded-full bg-primary text-white hover:shadow-lg transition-all"
                    >
                      Let&apos;s Talk
                    </a>
                  </li>
                </ul>
              </motion.div>
            )}
          </AnimatePresence>
        </motion.nav>
      </header>
    </>
  );
}
