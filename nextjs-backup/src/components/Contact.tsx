"use client";

import React, { useState } from "react";
import {
  MapPin,
  Phone,
  Mail,
  User,
  ChevronDown,
  MessageSquare,
  Send,
  CheckCircle2,
  Loader2,
} from "lucide-react";
import { motion } from "framer-motion";

export default function Contact() {
  const [formData, setFormData] = useState({
    name: "",
    email: "",
    phone: "",
    service: "hardware",
    message: "",
  });
  const [isSubmitting, setIsSubmitting] = useState(false);
  const [showSuccess, setShowSuccess] = useState(false);

  const handleChange = (
    e: React.ChangeEvent<HTMLInputElement | HTMLTextAreaElement | HTMLSelectElement>
  ) => {
    const { name, value } = e.target;
    setFormData((prev) => ({ ...prev, [name]: value }));
  };

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault();

    if (!formData.name || !formData.email || !formData.message) {
      alert("Please fill out all required fields.");
      return;
    }

    setIsSubmitting(true);

    setTimeout(() => {
      setIsSubmitting(false);
      setShowSuccess(true);
      setFormData({
        name: "",
        email: "",
        phone: "",
        service: "hardware",
        message: "",
      });

      // Hide success toast after 6 seconds
      setTimeout(() => {
        setShowSuccess(false);
      }, 6000);
    }, 1200);
  };

  return (
    <section id="contact" className="section-padding relative overflow-hidden bg-slate-50/10">
      <div className="container mx-auto px-6">
        <motion.div
          initial={{ opacity: 0, y: 20 }}
          whileInView={{ opacity: 1, y: 0 }}
          viewport={{ once: true, margin: "-100px" }}
          transition={{ duration: 0.6 }}
          className="text-center max-w-[700px] mx-auto mb-16"
        >
          <span className="section-tagline">Connect With Us</span>
          <h2 className="section-title">Get In Touch</h2>
          <p className="section-subtitle">
            Reach out anytime! We&apos;re here to assist you. Let&apos;s connect and explore how we can support your business goals.
          </p>
        </motion.div>

        <div className="grid grid-cols-1 lg:grid-cols-12 gap-12">
          
          {/* Left Column: Contact info */}
          <motion.div
            initial={{ opacity: 0, x: -20 }}
            whileInView={{ opacity: 1, x: 0 }}
            viewport={{ once: true, margin: "-100px" }}
            transition={{ duration: 0.6 }}
            className="lg:col-span-5 glass-card p-8 md:p-10 rounded-3xl border border-white/50 flex flex-col text-left group"
          >
            <h3 className="font-heading font-extrabold text-2xl text-slate-900 mb-3">
              Contact Details
            </h3>
            <p className="text-slate-505 text-sm leading-relaxed mb-6">
              Visit our sales hub in Nehru Place or give us a call for direct wholesale hardware pricing and quotes.
            </p>

            {/* Customer Support Image Banner */}
            <div className="w-full h-[150px] rounded-2xl overflow-hidden mb-6 border border-slate-200/50 shadow-inner relative bg-slate-950">
              {/* eslint-disable-next-line @next/next/no-img-element */}
              <img 
                src="/contact_support.png" 
                alt="Computer Helpdesk Customer Support" 
                className="w-full h-full object-cover transition-transform duration-700 group-hover:scale-102" 
              />
              <div className="absolute inset-0 bg-gradient-to-t from-slate-950/70 to-transparent pointer-events-none" />
              <span className="absolute bottom-3 left-4 text-white text-xs font-bold font-heading flex items-center gap-1.5">
                <span className="w-2 h-2 rounded-full bg-success animate-pulse" />
                Support Active Now
              </span>
            </div>

            <div className="flex flex-col gap-6 mb-8">
              {/* Location */}
              <div className="flex gap-4">
                <div className="w-10 h-10 bg-primary/8 text-primary rounded-xl flex items-center justify-center shrink-0">
                  <MapPin size={18} />
                </div>
                <div>
                  <h5 className="font-heading font-bold text-[10px] uppercase tracking-wider text-slate-400 mb-1">
                    Office Location
                  </h5>
                  <p className="text-slate-800 text-sm font-semibold leading-relaxed">
                    601-A Skylark Building, 60,<br />Nehru Place, New Delhi-110019
                  </p>
                </div>
              </div>

              {/* Phone */}
              <div className="flex gap-4">
                <div className="w-10 h-10 bg-primary/8 text-primary rounded-xl flex items-center justify-center shrink-0">
                  <Phone size={18} />
                </div>
                <div>
                  <h5 className="font-heading font-bold text-[10px] uppercase tracking-wider text-slate-400 mb-1">
                    Phone Numbers
                  </h5>
                  <div className="flex flex-col gap-0.5 text-slate-800 text-sm font-semibold">
                    <a href="tel:+919811022936" className="hover:text-primary transition-colors">
                      +91-98110 22936
                    </a>
                    <a href="tel:+918510022936" className="hover:text-primary transition-colors">
                      +91-85100 22936
                    </a>
                  </div>
                </div>
              </div>

              {/* Emails */}
              <div className="flex gap-4">
                <div className="w-10 h-10 bg-primary/8 text-primary rounded-xl flex items-center justify-center shrink-0">
                  <Mail size={18} />
                </div>
                <div>
                  <h5 className="font-heading font-bold text-[10px] uppercase tracking-wider text-slate-400 mb-1">
                    Email Enquiries
                  </h5>
                  <div className="flex flex-col gap-0.5 text-slate-800 text-sm font-semibold">
                    <a href="mailto:info@adinfotech.online" className="hover:text-primary transition-colors">
                      info@adinfotech.online
                    </a>
                    <a href="mailto:infotech.dilip@gmail.com" className="hover:text-primary transition-colors">
                      infotech.dilip@gmail.com
                    </a>
                    <a href="mailto:salesadinfotech@gmail.com" className="hover:text-primary transition-colors">
                      salesadinfotech@gmail.com
                    </a>
                  </div>
                </div>
              </div>
            </div>

            {/* Embedded Google Maps Wrapper */}
            <div className="w-full mt-auto rounded-2xl overflow-hidden border border-slate-200/50 shadow-inner">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3504.6543169829986!2d77.2514339!3d28.5493921!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce3c4beab49c1%3A0xe54fb7a00f2e0431!2sSkylark%20Building%2C%20Nehru%20Place%2C%20New%20Delhi%2C%20Delhi%20110019!5e0!3m2!1sen!2sin!4v1689255000000!5m2!1sen!2sin"
                width="100%"
                height="210"
                style={{ border: 0 }}
                allowFullScreen={true}
                loading="lazy"
                referrerPolicy="no-referrer-when-downgrade"
                className="map-iframe"
              />
            </div>
          </motion.div>

          {/* Right Column: Contact form */}
          <motion.div
            initial={{ opacity: 0, x: 20 }}
            whileInView={{ opacity: 1, x: 0 }}
            viewport={{ once: true, margin: "-100px" }}
            transition={{ duration: 0.6 }}
            className="lg:col-span-7 glass-card p-8 md:p-10 rounded-3xl border border-white/50 flex flex-col text-left"
          >
            <h3 className="font-heading font-extrabold text-2xl text-slate-900 mb-3">
              Send Us a Message
            </h3>
            <p className="text-slate-500 text-sm leading-relaxed mb-8">
              Fill out the form below to enquire about buying computers, original spares, toner refills, or to book a repair service. We will get back to you shortly.
            </p>

            <form onSubmit={handleSubmit} className="flex flex-col gap-5 w-full">
              {/* Full Name */}
              <div className="flex flex-col relative w-full">
                <label htmlFor="name" className="text-[10px] font-bold uppercase tracking-wider text-slate-400 mb-2">
                  Full Name
                </label>
                <input
                  type="text"
                  id="name"
                  name="name"
                  placeholder="John Doe"
                  value={formData.name}
                  onChange={handleChange}
                  required
                  className="w-full bg-slate-100/50 border border-slate-200/30 py-3.5 pl-11 pr-4 rounded-xl text-sm transition-all focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/10"
                />
                <User size={16} className="absolute left-4 bottom-[14px] text-slate-400 pointer-events-none" />
              </div>

              {/* Email & Phone side by side */}
              <div className="grid grid-cols-1 sm:grid-cols-2 gap-5 w-full">
                <div className="flex flex-col relative w-full">
                  <label htmlFor="email" className="text-[10px] font-bold uppercase tracking-wider text-slate-400 mb-2">
                    Email Address
                  </label>
                  <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="john@example.com"
                    value={formData.email}
                    onChange={handleChange}
                    required
                    className="w-full bg-slate-100/50 border border-slate-200/30 py-3.5 pl-11 pr-4 rounded-xl text-sm transition-all focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/10"
                  />
                  <Mail size={16} className="absolute left-4 bottom-[14px] text-slate-400 pointer-events-none" />
                </div>

                <div className="flex flex-col relative w-full">
                  <label htmlFor="phone" className="text-[10px] font-bold uppercase tracking-wider text-slate-400 mb-2">
                    Phone Number (Optional)
                  </label>
                  <input
                    type="tel"
                    id="phone"
                    name="phone"
                    placeholder="+91 99999 99999"
                    value={formData.phone}
                    onChange={handleChange}
                    className="w-full bg-slate-100/50 border border-slate-200/30 py-3.5 pl-11 pr-4 rounded-xl text-sm transition-all focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/10"
                  />
                  <Phone size={16} className="absolute left-4 bottom-[14px] text-slate-400 pointer-events-none" />
                </div>
              </div>

              {/* Select Service */}
              <div className="flex flex-col relative w-full">
                <label htmlFor="service" className="text-[10px] font-bold uppercase tracking-wider text-slate-400 mb-2">
                  Select Service Required
                </label>
                <div className="relative w-full">
                  <select
                    id="service"
                    name="service"
                    value={formData.service}
                    onChange={handleChange}
                    className="w-full bg-slate-100/50 border border-slate-200/30 py-3.5 pl-11 pr-10 rounded-xl text-sm appearance-none focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/10"
                  >
                    <option value="hardware">Buy Laptops or Desktops</option>
                    <option value="amc">Annual Maintenance Contract (AMC)</option>
                    <option value="networking">WiFi & Network Setup</option>
                    <option value="repair">Computer/Printer Repairs</option>
                    <option value="cctv">CCTV Camera Setup</option>
                  </select>
                  <Phone size={16} className="absolute left-4 bottom-[14px] text-slate-400 pointer-events-none" />
                  <ChevronDown size={16} className="absolute right-4 bottom-[14px] text-slate-400 pointer-events-none" />
                </div>
              </div>

              {/* Message */}
              <div className="flex flex-col relative w-full">
                <label htmlFor="message" className="text-[10px] font-bold uppercase tracking-wider text-slate-400 mb-2">
                  Your Message
                </label>
                <textarea
                  id="message"
                  name="message"
                  rows={5}
                  placeholder="Describe your computer requirements, model number of the device to repair, or toner cartridge count needed..."
                  value={formData.message}
                  onChange={handleChange}
                  required
                  className="w-full bg-slate-100/50 border border-slate-200/30 py-3.5 pl-11 pr-4 rounded-xl text-sm transition-all focus:bg-white focus:border-primary focus:ring-4 focus:ring-primary/10 resize-none"
                />
                <MessageSquare size={16} className="absolute left-4 top-10 text-slate-400 pointer-events-none" />
              </div>

              {/* Submit Button */}
              <button
                type="submit"
                disabled={isSubmitting}
                className="btn btn-gradient btn-full mt-2 py-4 flex items-center justify-center gap-2 font-bold cursor-pointer disabled:opacity-75 disabled:cursor-not-allowed shadow-lg"
              >
                {isSubmitting ? (
                  <>
                    <span>Sending Request...</span>
                    <Loader2 size={16} className="animate-spin" />
                  </>
                ) : (
                  <>
                    <span>Send Message</span>
                    <Send size={16} />
                  </>
                )}
              </button>
            </form>

            {/* Success toast status */}
            {showSuccess && (
              <motion.div
                initial={{ opacity: 0, y: 10 }}
                animate={{ opacity: 1, y: 0 }}
                className="glass-card mt-6 p-5 border border-success/20 bg-success/5 rounded-2xl flex items-center gap-4 text-left"
              >
                <CheckCircle2 size={24} className="text-success shrink-0" />
                <div>
                  <h5 className="font-heading font-extrabold text-sm text-success mb-0.5">
                    Message Sent Successfully!
                  </h5>
                  <p className="text-slate-500 text-xs font-medium">
                    Thank you. Our support representative will call you shortly.
                  </p>
                </div>
              </motion.div>
            )}
          </motion.div>
        </div>
      </div>

      {/* Floating WhatsApp Widget */}
      <a
        href="https://wa.me/919811022936"
        target="_blank"
        rel="noopener noreferrer"
        className="fixed bottom-[30px] right-[30px] bg-[#25D366] text-white flex items-center gap-2 p-3 px-5 rounded-full shadow-2xl z-50 transition-all hover:scale-102 hover:-translate-y-1 hover:shadow-[0_15px_40px_rgba(37,211,102,0.5)] group overflow-hidden"
        aria-label="Chat on WhatsApp"
      >
        <svg viewBox="0 0 24 24" className="w-6 h-6 fill-white">
          <path d="M12.012 2c-5.506 0-9.989 4.478-9.99 9.984a9.96 9.96 0 0 0 1.333 4.99L2 22l5.233-1.371a9.936 9.936 0 0 0 4.779 1.22c5.507 0 9.99-4.478 9.99-9.986 0-2.67-1.037-5.18-2.92-7.062A9.92 9.92 0 0 0 12.012 2zm5.835 14.165c-.256.726-1.5 1.33-2.046 1.402-.497.067-1.144.11-3.328-.8-2.793-1.163-4.59-4.008-4.73-4.195-.14-.187-1.136-1.509-1.136-2.879 0-1.37.717-2.043 1.01-2.35.293-.306.637-.382.85-.382.213 0 .426.002.61.01.196.008.46-.073.722.56.262.637.897 2.188.974 2.343.078.156.129.337.026.55-.104.214-.156.347-.311.53-.156.184-.328.408-.469.547-.156.155-.32.324-.138.637.182.311.81 1.336 1.734 2.162.925.826 1.708 1.082 2.022 1.238.314.156.497.13.682-.08.187-.214.793-.923 1.004-1.239.213-.314.426-.263.722-.156.295.109 1.874.883 2.196 1.044.322.16.536.24.613.375.078.134.078.775-.178 1.501z" />
        </svg>
        <span className="max-w-0 overflow-hidden opacity-0 group-hover:max-w-[120px] group-hover:opacity-100 transition-all duration-500 font-bold text-sm whitespace-nowrap">
          Chat with Us
        </span>
      </a>
    </section>
  );
}
