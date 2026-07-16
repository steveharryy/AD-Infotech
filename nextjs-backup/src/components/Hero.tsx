"use client";

import React from "react";
import { Sparkles, ArrowRight, Shield, Award } from "lucide-react";
import { motion } from "framer-motion";

export default function Hero() {
  return (
    <section id="home" className="relative pt-44 pb-28 md:pt-48 md:pb-32 overflow-hidden min-h-[90vh] flex items-center bg-slate-50/10">
      {/* Decorative Spotlights */}
      <div className="absolute top-[-10%] right-[5%] w-[450px] h-[450px] bg-primary/10 rounded-full blur-[120px] pointer-events-none animate-pulse duration-[8000ms]" />
      <div className="absolute bottom-[10%] left-[5%] w-[350px] h-[350px] bg-secondary/10 rounded-full blur-[100px] pointer-events-none" />
      <div className="absolute top-[30%] left-[40%] w-[300px] h-[300px] bg-accent/10 rounded-full blur-[90px] pointer-events-none" />

      <div className="container mx-auto px-6 grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">
        
        {/* Left Side: Content */}
        <motion.div
          initial={{ opacity: 0, x: -30 }}
          animate={{ opacity: 1, x: 0 }}
          transition={{ duration: 0.8, ease: [0.16, 1, 0.3, 1] }}
          className="lg:col-span-7 flex flex-col items-start text-left"
        >
          <div className="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-primary/8 border border-primary/15 text-primary text-xs font-bold mb-6">
            <Sparkles size={13} className="text-primary animate-pulse" />
            <span>Genuine Laptops, Printers & Computer Service Center</span>
          </div>
          
          <h1 className="font-heading font-extrabold text-4xl sm:text-5xl md:text-6xl text-slate-900 tracking-tight leading-[1.1] mb-6">
            Computer Sales, Rentals <br className="hidden sm:inline" />
            & <span className="gradient-text">Expert Repairs</span>
          </h1>
          
          <p className="text-slate-600 text-base md:text-lg max-w-[580px] mb-10 leading-relaxed font-medium">
            We sell original laptops, desktops, printers, and genuine cartridges at wholesale prices. We also offer fast doorstep repair services and computer AMC maintenance for offices and homes across Delhi NCR.
          </p>
          
          <div className="flex flex-col sm:flex-row gap-4 mb-14 w-full sm:w-auto">
            <a
              href="#services"
              className="btn btn-gradient btn-lg flex items-center justify-center gap-2 group shadow-xl shadow-secondary/10 hover:shadow-secondary/20 hover:-translate-y-0.5 transition-all"
            >
              <span>Explore Services</span>
              <ArrowRight size={18} className="transition-transform duration-300 group-hover:translate-x-1" />
            </a>
            <a
              href="#contact"
              className="btn btn-secondary btn-lg flex items-center justify-center border border-slate-200/50 hover:bg-slate-100/60 shadow-sm hover:shadow-md transition-all"
            >
              <span>Book a Service</span>
            </a>
          </div>

          {/* Statistics Grid */}
          <div className="grid grid-cols-3 gap-6 w-full max-w-[550px]">
            {[
              { num: "20+", label: "Years of Trust" },
              { num: "10k+", label: "Computers Sold & Fixed" },
              { num: "100%", label: "Genuine Products" },
            ].map((stat, i) => (
              <div key={i} className="glass-card p-5 rounded-2xl flex flex-col justify-center border border-white/50">
                <span className="font-heading font-extrabold text-2xl md:text-3xl text-primary mb-1">
                  {stat.num}
                </span>
                <span className="text-[11px] text-slate-500 font-bold">
                  {stat.label}
                </span>
              </div>
            ))}
          </div>
        </motion.div>

        {/* Right Side: Commercial Hero Media Block */}
        <motion.div
          initial={{ opacity: 0, x: 30 }}
          animate={{ opacity: 1, x: 0 }}
          transition={{ duration: 0.8, ease: [0.16, 1, 0.3, 1], delay: 0.1 }}
          className="lg:col-span-5 relative w-full flex justify-center lg:justify-end"
        >
          <div className="glass-card p-4 rounded-[32px] w-full max-w-[430px] border border-white/50 shadow-2xl relative overflow-visible group">
            
            {/* Main Visual Image */}
            <div className="relative w-full h-[320px] md:h-[380px] rounded-2xl overflow-hidden shadow-inner bg-slate-955">
              {/* eslint-disable-next-line @next/next/no-img-element */}
              <img
                src="/hero_it_infrastructure.png"
                alt="Computer Sales and Repairs"
                className="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
              />
              <div className="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent" />
            </div>

            {/* Overlapping Floating badge 1 */}
            <motion.div
              initial={{ y: 20, opacity: 0 }}
              animate={{ y: 0, opacity: 1 }}
              transition={{ duration: 0.5, delay: 0.3 }}
              className="absolute top-8 -left-6 md:-left-10 bg-white/95 backdrop-blur-md border border-slate-200/50 rounded-2xl p-4 shadow-2xl flex items-center gap-3.5 animate-float-slow z-10 text-slate-900"
            >
              <div className="w-9 h-9 rounded-xl bg-primary/10 text-primary flex items-center justify-center shrink-0">
                <Shield size={18} />
              </div>
              <div className="text-left">
                <h4 className="font-heading font-extrabold text-xs text-slate-900">Expert Repairing</h4>
                <p className="text-[10px] text-slate-500 font-bold">Motherboard & Chip Level</p>
              </div>
            </motion.div>

            {/* Overlapping Floating badge 2 */}
            <motion.div
              initial={{ y: -20, opacity: 0 }}
              animate={{ y: 0, opacity: 1 }}
              transition={{ duration: 0.5, delay: 0.4 }}
              className="absolute bottom-10 -right-6 md:-right-8 bg-slate-955/95 backdrop-blur-md border border-white/10 rounded-2xl p-4 shadow-2xl flex items-center gap-3.5 animate-float-fast z-10 text-white"
            >
              <div className="w-9 h-9 rounded-xl bg-accent/15 text-accent flex items-center justify-center shrink-0">
                <Award size={18} />
              </div>
              <div className="text-left">
                <h4 className="font-heading font-extrabold text-xs text-white">Dell & HP Partner</h4>
                <p className="text-[10px] text-slate-455 font-bold">Original Sales & Spares</p>
              </div>
            </motion.div>

          </div>
        </motion.div>
      </div>
    </section>
  );
}
