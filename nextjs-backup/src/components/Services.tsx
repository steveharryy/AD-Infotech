"use client";

import React, { useState } from "react";
import {
  Laptop,
  Terminal,
  Network,
  Settings,
  ShieldAlert,
  Wrench,
  BatteryCharging,
  Printer,
  Eye,
  Calculator,
  ChevronRight,
  Shield,
  CheckCircle,
} from "lucide-react";
import { motion } from "framer-motion";

export default function Services() {
  // IT Fleet Calculator State
  const [laptopsCount, setLaptopsCount] = useState(25);
  const [workstationsCount, setWorkstationsCount] = useState(5);
  const [duration, setDuration] = useState(12); // months: 3, 6, 12

  // Calculation rates (in Rupees)
  const LAPTOP_RATE = 500; // per laptop per month
  const WORKSTATION_RATE = 1200; // per workstation per month

  const baseMonthlyCost = laptopsCount * LAPTOP_RATE + workstationsCount * WORKSTATION_RATE;
  const rawTotal = baseMonthlyCost * duration;

  // Discount percentages
  const discountRate = duration === 12 ? 0.2 : duration === 6 ? 0.1 : 0;
  const discountSaved = rawTotal * discountRate;
  const finalEstimate = rawTotal - discountSaved;

  // Format currency in Indian format (INR)
  const formatCurrency = (val: number) => {
    return new Intl.NumberFormat("en-IN", {
      style: "currency",
      currency: "INR",
      maximumFractionDigits: 0,
    }).format(val);
  };

  const primaryServices = [
    {
      num: "01",
      icon: Laptop,
      title: "Laptop Sales & Rentals",
      desc: "Buy or rent brand new and refurbished laptops from HP, Dell, and Lenovo for personal use, school work, or office employees.",
    },
    {
      num: "02",
      icon: Terminal,
      title: "Custom built Desktops",
      desc: "Get custom-built gaming PCs, high-end office workstations, and dual-monitor systems tailored to your exact needs and budget.",
    },
    {
      num: "03",
      icon: Network,
      title: "WiFi & Network Cabling",
      desc: "Setup high-speed internet connections, Wi-Fi routers, office network cabling (CAT6), and switch configurations.",
    },
  ];

  const extendedServices = [
    {
      icon: Settings,
      title: "Computer Parts & Peripherals",
      desc: "Original mouse, keyboards, docking stations, monitors, power adapters, and speed-up component upgrades.",
    },
    {
      icon: ShieldAlert,
      title: "Annual Maintenance (AMC)",
      desc: "Regular maintenance cleaning, system speed-up tuning, software installation, and quick doorstep repair visits.",
    },
    {
      icon: Wrench,
      title: "All Types of Repairing",
      desc: "Motherboard chip-level repairing, laptop screen replacements, data recovery, and printer servicing.",
    },
    {
      icon: BatteryCharging,
      title: "Computer UPS & Backups",
      desc: "Computer UPS repairs, brand new UPS sales, and backup battery replacement services.",
    },
    {
      icon: Printer,
      title: "Printer Toner Cartridges",
      desc: "Original and high-yield compatible laser toner cartridges, drum units, ink bottles, and printers parts supplies.",
    },
    {
      icon: Eye,
      title: "CCTV Camera Installation",
      desc: "Installation of HD dome and bullet security cameras with mobile live view setups for shops, homes, and offices.",
    },
  ];

  // WhatsApp Enquiry Link generator
  const getWhatsAppLink = () => {
    const message = `Hello AD Infotech, I'm interested in an AMC maintenance quote:\n- Laptops: ${laptopsCount}\n- Desktops: ${workstationsCount}\n- Contract term: ${duration} months.\n\nMy estimated cost is ${formatCurrency(finalEstimate)}. Please contact me!`;
    return `https://wa.me/919811022936?text=${encodeURIComponent(message)}`;
  };

  return (
    <section id="services" className="section-padding relative bg-slate-50/20">
      <div className="container mx-auto px-6">
        <motion.div
          initial={{ opacity: 0, y: 20 }}
          whileInView={{ opacity: 1, y: 0 }}
          viewport={{ once: true, margin: "-100px" }}
          transition={{ duration: 0.6 }}
          className="text-center max-w-[700px] mx-auto mb-16"
        >
          <span className="section-tagline">What We Do</span>
          <h2 className="section-title">Our Services</h2>
          <p className="section-subtitle">
            Everything from computer sales and corporate AMC support to quick component repair services.
          </p>
        </motion.div>

        {/* Highlighted Core Focus Cards */}
        <div className="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
          {primaryServices.map((service, index) => {
            const IconComponent = service.icon;
            return (
              <motion.div
                key={index}
                initial={{ opacity: 0, y: 25 }}
                whileInView={{ opacity: 1, y: 0 }}
                viewport={{ once: true, margin: "-100px" }}
                transition={{ duration: 0.5, delay: index * 0.1 }}
                className="glass-card group p-8 md:p-10 rounded-3xl border border-white/50 relative overflow-hidden text-left hover:-translate-y-2 hover:border-primary/30"
              >
                <div className="w-14 h-14 bg-primary/8 text-primary group-hover:bg-primary group-hover:text-white rounded-2xl flex items-center justify-center mb-6 transition-all duration-300">
                  <IconComponent size={24} />
                </div>
                <h3 className="font-heading font-extrabold text-xl text-slate-900 mb-3">
                  {service.title}
                </h3>
                <p className="text-slate-600 text-sm leading-relaxed mb-6">
                  {service.desc}
                </p>
                <span className="absolute bottom-[-15px] right-2 text-8xl font-heading font-extrabold text-primary/3 group-hover:text-primary/6 group-hover:-translate-y-1 transition-all duration-500 select-none">
                  {service.num}
                </span>
              </motion.div>
            );
          })}
        </div>

        {/* Premium Split Banner with Services Setup Image */}
        <motion.div
          initial={{ opacity: 0, y: 30 }}
          whileInView={{ opacity: 1, y: 0 }}
          viewport={{ once: true, margin: "-100px" }}
          transition={{ duration: 0.7 }}
          className="glass-card p-6 md:p-10 rounded-3xl border border-white/50 shadow-xl overflow-hidden mb-16 text-left grid grid-cols-1 lg:grid-cols-12 gap-8 items-center bg-white/40"
        >
          {/* Left: Image panel */}
          <div className="lg:col-span-6 rounded-2xl overflow-hidden h-[240px] md:h-[300px] shadow-inner bg-slate-950">
            {/* eslint-disable-next-line @next/next/no-img-element */}
            <img
              src="/services_setup.png"
              alt="Computer Repair and Spares"
              className="w-full h-full object-cover hover:scale-[1.02] transition-transform duration-700"
            />
          </div>
          {/* Right: Copy details */}
          <div className="lg:col-span-6 flex flex-col items-start gap-4">
            <div className="flex items-center gap-2 text-primary font-bold text-xs uppercase tracking-wider">
              <Shield size={14} className="text-primary" />
              <span>Quick Service</span>
            </div>
            <h3 className="font-heading font-extrabold text-2xl text-slate-955">
              Computer Repairs & AMC Maintenance
            </h3>
            <p className="text-slate-600 text-sm leading-relaxed">
              Got a slow computer, broken laptop screen, or printer that won&apos;t print? Our skilled technicians can repair motherboards, replace screens, fix software errors, and provide reliable AMC maintenance for your office computers.
            </p>
            <div className="grid grid-cols-2 gap-4 w-full mt-2">
              <div className="flex items-center gap-2 text-slate-700 text-xs font-semibold">
                <CheckCircle size={14} className="text-success" />
                <span>Motherboard Repair</span>
              </div>
              <div className="flex items-center gap-2 text-slate-700 text-xs font-semibold">
                <CheckCircle size={14} className="text-success" />
                <span>Screen & Keyboard Spares</span>
              </div>
              <div className="flex items-center gap-2 text-slate-700 text-xs font-semibold">
                <CheckCircle size={14} className="text-success" />
                <span>Office Computer AMC</span>
              </div>
              <div className="flex items-center gap-2 text-slate-700 text-xs font-semibold">
                <CheckCircle size={14} className="text-success" />
                <span>Printer & Toner Refills</span>
              </div>
            </div>
          </div>
        </motion.div>

        {/* Secondary Extended Services Grid */}
        <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-24">
          {extendedServices.map((service, index) => {
            const IconComponent = service.icon;
            return (
              <motion.div
                key={index}
                initial={{ opacity: 0, y: 15 }}
                whileInView={{ opacity: 1, y: 0 }}
                viewport={{ once: true, margin: "-100px" }}
                transition={{ duration: 0.4, delay: (index % 3) * 0.05 }}
                className="glass-card p-6 rounded-2xl border border-white/40 text-left flex flex-col hover:-translate-y-1 hover:border-primary/20"
              >
                <div className="w-11 h-11 bg-primary/8 text-primary rounded-xl flex items-center justify-center mb-5 shrink-0">
                  <IconComponent size={20} />
                </div>
                <h4 className="font-heading font-bold text-base text-slate-900 mb-2">
                  {service.title}
                </h4>
                <p className="text-slate-505 text-xs md:text-sm leading-relaxed">
                  {service.desc}
                </p>
              </motion.div>
            );
          })}
        </div>

        {/* Live Interactive Computer AMC Budget Calculator */}
        <motion.div
          initial={{ opacity: 0, y: 30 }}
          whileInView={{ opacity: 1, y: 0 }}
          viewport={{ once: true, margin: "-100px" }}
          transition={{ duration: 0.7 }}
          className="glass-card p-8 md:p-12 rounded-[32px] border border-white/50 shadow-2xl relative overflow-hidden"
        >
          <div className="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center relative z-10 text-left">
            {/* Left Calculator Inputs */}
            <div className="lg:col-span-7 flex flex-col gap-6">
              <div className="flex items-center gap-3 mb-2">
                <div className="w-10 h-10 bg-primary/10 text-primary rounded-xl flex items-center justify-center">
                  <Calculator size={20} />
                </div>
                <div>
                  <h3 className="font-heading font-extrabold text-2xl text-slate-950">
                    Computer AMC Budget Estimator
                  </h3>
                  <p className="text-slate-500 text-xs md:text-sm">
                    Adjust the sliders below to calculate the estimated cost for maintaining your home or office computers.
                  </p>
                </div>
              </div>

              {/* Laptops Slider */}
              <div className="flex flex-col gap-2">
                <div className="flex justify-between items-baseline text-sm font-semibold">
                  <span className="text-slate-700">Number of Laptops</span>
                  <span className="text-primary font-bold text-lg">{laptopsCount} Devices</span>
                </div>
                <input
                  type="range"
                  min="0"
                  max="150"
                  value={laptopsCount}
                  onChange={(e) => setLaptopsCount(Number(e.target.value))}
                />
                <span className="text-[10px] text-slate-400 font-bold self-end">Rate: ₹500/device/mo</span>
              </div>

              {/* Workstations Slider */}
              <div className="flex flex-col gap-2">
                <div className="flex justify-between items-baseline text-sm font-semibold">
                  <span className="text-slate-700">Number of Desktops</span>
                  <span className="text-primary font-bold text-lg">{workstationsCount} Devices</span>
                </div>
                <input
                  type="range"
                  min="0"
                  max="40"
                  value={workstationsCount}
                  onChange={(e) => setWorkstationsCount(Number(e.target.value))}
                />
                <span className="text-[10px] text-slate-400 font-bold self-end">Rate: ₹1,200/device/mo</span>
              </div>

              {/* Support Contract Term Selection */}
              <div className="flex flex-col gap-3">
                <span className="text-sm font-semibold text-slate-700">Service Contract Term</span>
                <div className="grid grid-cols-3 gap-4">
                  {[
                    { label: "3 Months", value: 3, discount: "No Discount" },
                    { label: "6 Months", value: 6, discount: "10% Discount" },
                    { label: "12 Months", value: 12, discount: "20% Discount" },
                  ].map((item) => (
                    <button
                      key={item.value}
                      type="button"
                      onClick={() => setDuration(item.value)}
                      className={`py-3 px-4 rounded-xl border flex flex-col items-center justify-center gap-1 cursor-pointer transition-all duration-300 ${
                        duration === item.value
                          ? "bg-slate-900 text-white border-slate-900 shadow-md shadow-slate-900/10"
                          : "bg-white text-slate-600 border-slate-200 hover:border-slate-350"
                      }`}
                    >
                      <span className="font-heading font-extrabold text-sm">{item.label}</span>
                      <span className={`text-[9px] font-bold ${duration === item.value ? "text-accent" : "text-slate-400"}`}>
                        {item.discount}
                      </span>
                    </button>
                  ))}
                </div>
              </div>
            </div>

            {/* Right Calculator Outputs Summary Box */}
            <div className="lg:col-span-5 bg-gradient-to-br from-slate-900 to-slate-950 p-6 md:p-8 rounded-3xl text-white shadow-xl relative overflow-hidden flex flex-col justify-between h-full min-h-[320px]">
              {/* Background gradient orb */}
              <div className="absolute top-[-100px] right-[-100px] w-[200px] h-[200px] bg-accent/20 rounded-full blur-[60px]" />

              <div className="relative z-10 flex flex-col gap-5">
                <h4 className="font-heading font-bold text-slate-400 text-xs tracking-wider uppercase">
                  Estimator Summary
                </h4>
                
                <div className="flex flex-col gap-2">
                  <div className="flex justify-between items-center text-slate-300 text-xs font-semibold">
                    <span>Total Devices:</span>
                    <span className="font-bold text-white">{laptopsCount + workstationsCount} Items</span>
                  </div>
                  <div className="flex justify-between items-center text-slate-300 text-xs font-semibold">
                    <span>Monthly AMC Rate:</span>
                    <span className="font-bold text-white">{formatCurrency(baseMonthlyCost)} / mo</span>
                  </div>
                  {discountSaved > 0 && (
                    <div className="flex justify-between items-center text-accent text-xs font-semibold">
                      <span>Discount Saved:</span>
                      <span className="font-bold">-{formatCurrency(discountSaved)}</span>
                    </div>
                  )}
                </div>

                <div className="border-t border-white/10 pt-4 mt-2">
                  <span className="text-[10px] uppercase font-bold text-slate-400 tracking-wider">Estimated AMC Cost</span>
                  <div className="font-heading font-extrabold text-3xl text-white mt-1">
                    {formatCurrency(finalEstimate)}
                  </div>
                  <span className="text-[10px] text-slate-400 font-semibold block mt-0.5">
                    *Taxes extra. Valid for Delhi NCR locations.
                  </span>
                </div>
              </div>

              {/* CTA Whatsapp Enquiry Button */}
              <a
                href={getWhatsAppLink()}
                target="_blank"
                rel="noopener noreferrer"
                className="btn btn-gradient w-full mt-6 py-3.5 flex items-center justify-center gap-2 group font-bold relative z-10 shadow-lg"
              >
                <span>Request Quotation</span>
                <ChevronRight size={16} className="transition-transform group-hover:translate-x-1" />
              </a>
            </div>
          </div>
        </motion.div>

      </div>
    </section>
  );
}
