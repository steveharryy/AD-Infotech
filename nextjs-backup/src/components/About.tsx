"use client";

import React from "react";
import { Cpu, Award, CheckCircle2 } from "lucide-react";
import { motion } from "framer-motion";

export default function About() {
  return (
    <section id="about" className="section-padding relative overflow-hidden bg-slate-50/50">
      {/* Background glow elements */}
      <div className="absolute top-1/2 left-[-100px] w-[300px] h-[300px] bg-accent/5 rounded-full blur-[80px] pointer-events-none" />

      <div className="container mx-auto px-6">
        <motion.div
          initial={{ opacity: 0, y: 20 }}
          whileInView={{ opacity: 1, y: 0 }}
          viewport={{ once: true, margin: "-100px" }}
          transition={{ duration: 0.6 }}
          className="text-center max-w-[700px] mx-auto mb-16"
        >
          <span className="section-tagline">About AD Infotech</span>
          <h2 className="section-title">20 Years of Trusted Computer Sales & Repairs</h2>
          <p className="section-subtitle">
            Your one-stop destination for laptop sales, computer rentals, printer supplies, and motherboard repair services across Delhi NCR.
          </p>
        </motion.div>

        <div className="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">
          
          {/* Left Side: Modern workspace image block */}
          <motion.div
            initial={{ opacity: 0, scale: 0.95 }}
            whileInView={{ opacity: 1, scale: 1 }}
            viewport={{ once: true, margin: "-100px" }}
            transition={{ duration: 0.7 }}
            className="lg:col-span-5 relative h-[380px] md:h-[440px] w-full max-w-[450px] mx-auto group"
          >
            {/* Primary glass card wrapper for image */}
            <div className="glass-card p-3 absolute top-4 left-0 w-[92%] rounded-[28px] border border-white/50 shadow-xl overflow-hidden text-left bg-white/40">
              <div className="relative w-full h-[320px] md:h-[360px] rounded-2xl overflow-hidden shadow-inner bg-slate-900">
                {/* eslint-disable-next-line @next/next/no-img-element */}
                <img
                  src="/about_workspace.png"
                  alt="IT Hardware Repair Shop"
                  className="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                />
                <div className="absolute inset-0 bg-gradient-to-t from-slate-950/60 via-transparent to-transparent" />
              </div>
            </div>

            {/* Secondary overlapping float card */}
            <motion.div
              initial={{ y: 20, opacity: 0 }}
              whileInView={{ y: 0, opacity: 1 }}
              viewport={{ once: true }}
              transition={{ duration: 0.5, delay: 0.2 }}
              className="glass-card p-5 absolute bottom-4 right-0 w-[68%] rounded-2xl border border-white/60 shadow-2xl animate-float-slow text-left"
            >
              <div className="flex items-center gap-4">
                <div className="w-10 h-10 rounded-xl bg-success/15 text-success flex items-center justify-center shrink-0">
                  <Award size={20} />
                </div>
                <div className="text-left">
                  <h5 className="font-heading font-extrabold text-xs text-slate-955">Authorized Spares</h5>
                  <p className="text-[10px] text-slate-500 font-bold">100% genuine printer parts & toners</p>
                </div>
              </div>
            </motion.div>
          </motion.div>

          {/* Right Side: Copywriting content */}
          <motion.div
            initial={{ opacity: 0, y: 25 }}
            whileInView={{ opacity: 1, y: 0 }}
            viewport={{ once: true, margin: "-100px" }}
            transition={{ duration: 0.6, delay: 0.1 }}
            className="lg:col-span-7 flex flex-col items-start text-left"
          >
            <h3 className="font-heading font-extrabold text-2xl md:text-3xl text-slate-900 mb-6">
              Welcome to AD Infotech
            </h3>
            
            <p className="text-slate-750 font-semibold text-base md:text-lg mb-4 leading-relaxed">
              At A.D Infotech, we are passionate about providing computer hardware parts and premium accessories, including Computer Hardware, Peripherals, Consumables, AMC, and all types of Printer Cartridges and Server Workstations.
            </p>
            
            <p className="text-slate-600 text-sm md:text-base mb-4 leading-relaxed">
              With over 20 years of experience in the industry, our team has a deep understanding of the ever-evolving technology market and is dedicated to staying ahead of the curve. We understand that finding the right computer hardware can be overwhelming, which is why we have curated a wide selection of products from top brands to make your search easier.
            </p>
            
            <p className="text-slate-600 text-sm md:text-base mb-8 leading-relaxed">
              From graphics cards to processors, our goal is to provide you with the best components for your computer needs. Our commitment to customer satisfaction and premium products has earned us a loyal following among tech enthusiasts and professionals alike. We take pride in our excellent client service and strive to exceed expectations with every purchase.
            </p>

            {/* Checklist items */}
            <div className="grid grid-cols-1 sm:grid-cols-2 gap-6 w-full mb-10">
              <div className="flex gap-3">
                <CheckCircle2 className="text-primary shrink-0" size={20} />
                <div>
                  <h5 className="font-heading font-bold text-sm text-slate-900 mb-1">
                    Genuine Brands Only
                  </h5>
                  <p className="text-slate-500 text-xs">
                    We source only original products from HP, Dell, Lenovo, and Canon.
                  </p>
                </div>
              </div>
              
              <div className="flex gap-3">
                <CheckCircle2 className="text-primary shrink-0" size={20} />
                <div>
                  <h5 className="font-heading font-bold text-sm text-slate-900 mb-1">
                    Fast Repair Services
                  </h5>
                  <p className="text-slate-500 text-xs">
                    Expert chip-level motherboard repairing and printer servicing.
                  </p>
                </div>
              </div>
            </div>

            <a href="#contact" className="btn btn-primary shadow-lg shadow-slate-900/10 hover:shadow-slate-900/20">
              Book a Repair Service
            </a>
          </motion.div>
        </div>
      </div>
    </section>
  );
}
