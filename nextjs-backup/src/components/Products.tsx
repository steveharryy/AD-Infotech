"use client";

import React, { useState } from "react";
import { Laptop, Monitor, Layout, Printer, Network, Eye, CheckCircle, Package } from "lucide-react";
import { motion, AnimatePresence } from "framer-motion";

export default function Products() {
  const [activeFilter, setActiveFilter] = useState("all");

  const filterButtons = [
    { label: "All Products", filter: "all" },
    { label: "Laptops", filter: "laptops" },
    { label: "Desktops", filter: "desktops" },
    { label: "All in Ones", filter: "aio" },
    { label: "Cartridges", filter: "cartridges" },
    { label: "Networking", filter: "networking" },
  ];

  const productsList = [
    {
      id: 1,
      category: "laptops",
      image: "/product_laptop.png",
      tag: "Elite Edition",
      catLabel: "Enterprise Laptops",
      title: "HP, Dell & Lenovo Laptops",
      desc: "Reliable brand new and refurbished laptops for daily office work, programming, and student learning.",
    },
    {
      id: 2,
      category: "desktops",
      image: "/product_desktop.png",
      tag: "High Performance",
      catLabel: "Business Desktops",
      title: "OptiPlex & ProDesk Towers",
      desc: "Fast business desktop PCs perfect for retail shops, schools, billing counters, and office staff.",
    },
    {
      id: 3,
      category: "aio",
      image: "/product_aio.png",
      tag: "Modern Workspace",
      catLabel: "All-in-One PCs",
      title: "Sleek All-in-One Computers",
      desc: "Elegant, space-saving desktop computers with large screens, built-in speakers, and HD webcams.",
    },
    {
      id: 4,
      category: "cartridges",
      image: "/product_cartridge.png",
      tag: "100% Original",
      catLabel: "Laser Toners",
      title: "HP, Canon & Brother Cartridges",
      desc: "100% genuine printer ink bottles and laser toner cartridges that give clean, smudge-free prints.",
    },
    {
      id: 5,
      category: "networking",
      image: "/product_networking.png",
      tag: "High Speed",
      catLabel: "Cables & Switches",
      title: "Internet Cables & Switches",
      desc: "High-quality network patch cables, office router setups, and internet switches for stable network connection.",
    },
    {
      id: 6,
      category: "networking",
      image: "/product_cctv.png",
      tag: "Ultra HD",
      catLabel: "CCTV & Security",
      title: "Smart HD Security Cameras",
      desc: "HD dome and bullet security cameras for shops, offices, and homes with live mobile screen monitoring.",
    },
  ];

  const filteredProducts =
    activeFilter === "all"
      ? productsList
      : productsList.filter((product) => product.category === activeFilter);

  return (
    <section id="products" className="section-padding relative overflow-hidden bg-slate-50/20">
      <div className="container mx-auto px-6">
        <motion.div
          initial={{ opacity: 0, y: 20 }}
          whileInView={{ opacity: 1, y: 0 }}
          viewport={{ once: true, margin: "-100px" }}
          transition={{ duration: 0.6 }}
          className="text-center max-w-[700px] mx-auto mb-16"
        >
          <span className="section-tagline">Catalog Showcase</span>
          <h2 className="section-title">Our Featured Products</h2>
          <p className="section-subtitle">
            We stock original hardware and IT peripherals from global leaders, fully certified and tested.
          </p>
        </motion.div>

        {/* Products Showcase split graphic banner */}
        <motion.div
          initial={{ opacity: 0, y: 30 }}
          whileInView={{ opacity: 1, y: 0 }}
          viewport={{ once: true, margin: "-100px" }}
          transition={{ duration: 0.7 }}
          className="glass-card p-6 md:p-10 rounded-3xl border border-white/50 shadow-xl overflow-hidden mb-16 text-left grid grid-cols-1 lg:grid-cols-12 gap-8 items-center bg-white/40"
        >
          {/* Left Side: Copy */}
          <div className="lg:col-span-6 flex flex-col items-start gap-4">
            <div className="flex items-center gap-2 text-primary font-bold text-xs uppercase tracking-wider">
              <Package size={14} className="text-primary" />
              <span>Retail & Corporate Supplies</span>
            </div>
            <h3 className="font-heading font-extrabold text-2xl text-slate-950">
              Premium Hardware Inventory & Consumables
            </h3>
            <p className="text-slate-600 text-sm leading-relaxed">
              We stock a wide range of brand new laptops, assembled desktops, original HP, Canon, and Brother toner cartridges, cabling parts, and surveillance cameras. All hardware comes with official company warranties.
            </p>
            <div className="flex items-center gap-4 text-xs font-semibold text-slate-500 mt-2">
              <span>HP Partner</span>
              <span className="w-1.5 h-1.5 rounded-full bg-slate-300" />
              <span>Dell Partner</span>
              <span className="w-1.5 h-1.5 rounded-full bg-slate-300" />
              <span>Lenovo Partner</span>
              <span className="w-1.5 h-1.5 rounded-full bg-slate-300" />
              <span>Canon Integrator</span>
            </div>
          </div>
          {/* Right Side: Image panel */}
          <div className="lg:col-span-6 rounded-2xl overflow-hidden h-[240px] md:h-[300px] shadow-inner bg-slate-955">
            {/* eslint-disable-next-line @next/next/no-img-element */}
            <img
              src="/products_retail.png"
              alt="Computer Hardware Store Display"
              className="w-full h-full object-cover hover:scale-[1.02] transition-transform duration-700"
            />
          </div>
        </motion.div>

        {/* Filters Tabs Menu */}
        <div className="flex justify-center flex-wrap gap-3 mb-12 relative z-10">
          {filterButtons.map((btn) => (
            <button
              key={btn.filter}
              onClick={() => setActiveFilter(btn.filter)}
              className={`font-heading font-semibold text-sm px-6 py-2.5 rounded-full transition-all duration-300 shadow-sm cursor-pointer border relative ${
                activeFilter === btn.filter
                  ? "bg-slate-955 text-white border-slate-955"
                  : "bg-white text-slate-500 border-slate-200/50 hover:text-slate-900 hover:border-slate-350"
              }`}
            >
              <span className="relative z-10">{btn.label}</span>
              {activeFilter === btn.filter && (
                <motion.span
                  layoutId="activeFilterBg"
                  className="absolute inset-0 bg-slate-950 rounded-full z-0"
                  transition={{ type: "spring", stiffness: 380, damping: 30 }}
                />
              )}
            </button>
          ))}
        </div>

        {/* Products Grid with Framer Motion layout animations */}
        <motion.div 
          layout
          className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 min-h-[440px]"
        >
          <AnimatePresence mode="popLayout">
            {filteredProducts.map((product) => {
              return (
                <motion.div
                  layout
                  initial={{ opacity: 0, scale: 0.9 }}
                  animate={{ opacity: 1, scale: 1 }}
                  exit={{ opacity: 0, scale: 0.9 }}
                  transition={{ duration: 0.35 }}
                  key={product.id}
                  className="glass-card flex flex-col rounded-3xl overflow-hidden border border-white/50 h-full text-left hover:-translate-y-2 hover:border-primary/20 group"
                >
                  {/* Product Header Graphic - Using Custom Category Image */}
                  <div className="h-44 bg-slate-900 border-b border-slate-100 flex items-center justify-center relative overflow-hidden">
                    {/* eslint-disable-next-line @next/next/no-img-element */}
                    <img
                      src={product.image}
                      alt={product.title}
                      className="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                    />
                    <div className="absolute inset-0 bg-slate-950/10 pointer-events-none" />
                    <span className="absolute top-4 right-4 bg-white/95 border border-slate-100/50 px-3 py-1 rounded-full text-[10px] font-extrabold uppercase tracking-wider text-slate-800 shadow-sm z-10">
                      {product.tag}
                    </span>
                  </div>

                  {/* Product Meta & Info */}
                  <div className="p-6 flex flex-col flex-grow">
                    <span className="text-[10px] font-bold uppercase tracking-wider text-accent mb-2">
                      {product.catLabel}
                    </span>
                    <h4 className="font-heading font-extrabold text-lg text-slate-900 mb-3">
                      {product.title}
                    </h4>
                    <p className="text-slate-505 text-xs md:text-sm leading-relaxed mb-6 flex-grow">
                      {product.desc}
                    </p>

                    {/* Footer links */}
                    <div className="border-t border-slate-100/50 pt-4 mt-auto flex justify-between items-center">
                      <div className="flex items-center gap-1.5 text-slate-500 text-xs font-semibold">
                        <CheckCircle size={14} className="text-success" />
                        <span>In Stock</span>
                      </div>
                      
                      <a
                        href="#contact"
                        className="btn btn-secondary btn-sm border border-slate-200/50 hover:bg-slate-50 font-semibold"
                      >
                        Enquire Now
                      </a>
                    </div>
                  </div>

                </motion.div>
              );
            })}
          </AnimatePresence>
        </motion.div>
      </div>
    </section>
  );
}
