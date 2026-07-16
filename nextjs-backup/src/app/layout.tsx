import type { Metadata } from "next";
import { Inter, Plus_Jakarta_Sans } from "next/font/google";
import "./globals.css";

const inter = Inter({
  subsets: ["latin"],
  variable: "--font-inter",
  display: "swap",
});

const plusJakartaSans = Plus_Jakarta_Sans({
  subsets: ["latin"],
  variable: "--font-plus-jakarta-sans",
  display: "swap",
});

export const metadata: Metadata = {
  title: "AD Infotech | Premium IT Solutions, Hardware & Support",
  description: "A D Infotech provides premium computer hardware, desktop management services, AMC, networking, and IT support solutions in Nehru Place, New Delhi.",
  keywords: ["AD Infotech", "computer hardware", "Nehru Place", "IT support", "AMC", "server", "workstation", "CCTV", "printer toner"],
};

export default function RootLayout({
  children,
}: Readonly<{
  children: React.ReactNode;
}>) {
  return (
    <html
      lang="en"
      className={`${inter.variable} ${plusJakartaSans.variable} scroll-smooth`}
    >
      <body className="min-h-screen bg-bg-light text-slate-800 font-sans selection:bg-primary/20 selection:text-primary">
        {children}
      </body>
    </html>
  );
}
