"use client";

import React from "react";
import { Truck, Clock, PhoneCall, Phone } from "lucide-react";
import { motion } from "framer-motion";

export default function Deals() {
  return (
    <section className="section-padding bg-bg-dark text-white relative overflow-hidden">
      {/* Background glow effects */}
      <div className="absolute top-[-250px] left-[-100px] w-[500px] h-[500px] bg-secondary/15 rounded-full blur-[150px] pointer-events-none" />
      <div className="absolute bottom-[-150px] right-[-100px] w-[400px] h-[400px] bg-accent/10 rounded-full blur-[120px] pointer-events-none" />

      <div className="container mx-auto px-6">
        <motion.div
          initial={{ opacity: 0, scale: 0.98 }}
          whileInView={{ opacity: 1, scale: 1 }}
          viewport={{ once: true, margin: "-100px" }}
          transition={{ duration: 0.7 }}
          className="glass-card-dark p-8 md:p-16 rounded-[32px] border border-white/6 shadow-2xl grid grid-cols-1 lg:grid-cols-12 gap-12 items-center relative overflow-hidden"
        >
          {/* Left Side: Content */}
          <div className="lg:col-span-7 flex flex-col items-start text-left">
            <span className="section-tagline text-accent mb-4">Most Recent Deals</span>
            <h2 className="font-heading font-extrabold text-3xl md:text-4xl text-white mb-6 leading-tight">
              Best Deals on Printers & Peripherals
            </h2>
            <p className="text-slate-300 text-sm md:text-base leading-relaxed mb-10 max-w-[620px]">
              We&apos;re excited to serve you with top-notch solutions tailored to your needs. Get genuine enterprise laser printers and printer cartridges at special wholesale rates.
            </p>
            
            {/* Features list */}
            <div className="flex flex-wrap gap-4 mb-10 w-full">
              {[
                { icon: Truck, text: "Free Shipping (Bulk)" },
                { icon: Clock, text: "On-Time Guaranteed" },
                { icon: PhoneCall, text: "Call for Best Price Quote", highlight: true },
              ].map((badge, idx) => {
                const IconComponent = badge.icon;
                return (
                  <div
                    key={idx}
                    className={`flex items-center gap-2 py-2.5 px-5 rounded-full border text-xs font-semibold ${
                      badge.highlight
                        ? "bg-accent/15 border-accent/30 text-accent"
                        : "bg-white/4 border-white/8 text-slate-100"
                    }`}
                  >
                    <IconComponent size={14} />
                    <span>{badge.text}</span>
                  </div>
                );
              })}
            </div>

            <a
              href="tel:+919811022936"
              className="btn btn-gradient btn-lg flex items-center justify-center gap-2 group shadow-xl shadow-primary/20 hover:shadow-primary/30"
            >
              <Phone size={16} />
              <span>Call for Best Price</span>
            </a>
          </div>

          {/* Right Side: Media Product Image */}
          <div className="lg:col-span-5 relative w-full flex justify-center items-center">
            <div className="relative w-full max-w-[280px] group">
              
              {/* Floating Badge */}
              <div className="absolute top-[-10px] left-[-20px] bg-gradient-to-br from-accent to-primary p-3 px-5 rounded-2xl shadow-xl flex flex-col text-left text-white z-10 animate-float-slow">
                <span className="font-heading font-extrabold text-sm leading-none mb-0.5">Best Deal</span>
                <span className="text-[9px] uppercase tracking-wider opacity-90">Original Supplies</span>
              </div>

              {/* Main product photo */}
              <div className="rounded-2xl overflow-hidden shadow-2xl border border-white/10 aspect-square bg-slate-900">
                {/* eslint-disable-next-line @next/next/no-img-element */}
                <img
                  src="/deals_printer.png"
                  alt="Original Laser Printers and Supplies"
                  className="w-full h-full object-cover transition-transform duration-75 group-hover:scale-102"
                />
              </div>

            </div>
          </div>
        </motion.div>
      </div>
    </section>
  );
}
