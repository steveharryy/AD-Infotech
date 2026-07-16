"use client";

import React from "react";
import { Award, Users, Zap, Activity, ShieldCheck, DollarSign } from "lucide-react";
import { motion } from "framer-motion";

export default function WhyUs() {
  const advantages = [
    {
      icon: Award,
      color: "bg-primary/8 text-primary border-primary/10",
      title: "Expertise & Experience",
      desc: "With years of industry experience, we bring deep knowledge and a proven track record to deliver effective IT solutions.",
    },
    {
      icon: Users,
      color: "bg-accent/8 text-accent border-accent/10",
      title: "Customer-Centric Approach",
      desc: "Our client-focused strategy ensures that your unique needs and goals are our top priority, resulting in tailored solutions.",
    },
    {
      icon: Zap,
      color: "bg-secondary/8 text-secondary border-secondary/10",
      title: "Cutting-Edge Technology",
      desc: "We stay at the forefront of technology trends, providing you with the latest and most innovative solutions for your IT infrastructure.",
    },
    {
      icon: Activity,
      color: "bg-success/8 text-success border-success/10",
      title: "Proactive Support",
      desc: "We don&apos;t just resolve issues; we prevent them. With proactive monitoring and maintenance, we ensure that your IT environment runs smoothly.",
    },
    {
      icon: ShieldCheck,
      color: "bg-primary/8 text-primary border-primary/10",
      title: "Security & Reliability",
      desc: "We prioritize the security of your data and the reliability of your IT environment, ensuring your network and information remain protected.",
    },
    {
      icon: DollarSign,
      color: "bg-accent/8 text-accent border-accent/10",
      title: "Cost-Efficiency",
      desc: "We believe that efficient IT doesn&apos;t have to break the bank. Our solutions are designed to be cost-effective, providing you with the best value.",
    },
  ];

  return (
    <section id="why-choose-us" className="section-padding relative overflow-hidden bg-slate-50/10">
      <div className="container mx-auto px-6">
        <motion.div
          initial={{ opacity: 0, y: 20 }}
          whileInView={{ opacity: 1, y: 0 }}
          viewport={{ once: true, margin: "-100px" }}
          transition={{ duration: 0.6 }}
          className="text-center max-w-[700px] mx-auto mb-16"
        >
          <span className="section-tagline">Why Partner With Us</span>
          <h2 className="section-title">The AD Infotech Advantage</h2>
          <p className="section-subtitle">
            Our core pillars of service that ensure your corporate computers and networks function with zero disruption.
          </p>
        </motion.div>

        {/* Advantage Cards Grid */}
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          {advantages.map((item, index) => {
            const IconComponent = item.icon;
            return (
              <motion.div
                key={index}
                initial={{ opacity: 0, y: 20 }}
                whileInView={{ opacity: 1, y: 0 }}
                viewport={{ once: true, margin: "-100px" }}
                transition={{ duration: 0.5, delay: (index % 3) * 0.1 }}
                className="glass-card p-8 rounded-3xl border border-white/50 text-left hover:-translate-y-1.5"
              >
                <div className={`w-12 h-12 rounded-xl flex items-center justify-center mb-6 border ${item.color}`}>
                  <IconComponent size={22} />
                </div>
                <h4 className="font-heading font-extrabold text-lg text-slate-900 mb-3">
                  {item.title}
                </h4>
                <p className="text-slate-500 text-xs md:text-sm leading-relaxed">
                  {item.desc}
                </p>
              </motion.div>
            );
          })}
        </div>
      </div>
    </section>
  );
}
