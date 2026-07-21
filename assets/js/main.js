document.addEventListener("DOMContentLoaded", () => {
  // -------------------------------------------------------------
  // 1. Navigation Scroll Effect & Active Link Highlighter
  // -------------------------------------------------------------
  const navBar = document.querySelector(".nav-bar");
  const navLinks = document.querySelectorAll(".nav-link");
  const mobileMenuLinks = document.querySelectorAll(".mobile-menu-link");
  const sections = ["home", "about", "services", "products", "why-choose-us", "contact"];

  function handleScroll() {
    // Toggle sticky glass class
    if (window.scrollY > 50) {
      navBar.classList.add("scrolled");
      navBar.classList.remove("not-scrolled");
    } else {
      navBar.classList.add("not-scrolled");
      navBar.classList.remove("scrolled");
    }

    // Dynamic active link selection
    let currentActive = "home";
    const scrollY = window.pageYOffset;

    for (const sectionId of sections) {
      const el = document.getElementById(sectionId);
      if (el) {
        const top = el.offsetTop - 130;
        const height = el.offsetHeight;
        if (scrollY > top && scrollY <= top + height) {
          currentActive = sectionId;
          break;
        }
      }
    }

    // Update Desktop Nav Links
    navLinks.forEach((link) => {
      if (link.getAttribute("href") === `#${currentActive}`) {
        link.classList.add("active");
      } else {
        link.classList.remove("active");
      }
    });

    // Update Mobile Nav Links
    mobileMenuLinks.forEach((link) => {
      if (link.getAttribute("href") === `#${currentActive}`) {
        link.classList.add("active");
      } else {
        link.classList.remove("active");
      }
    });
  }

  window.addEventListener("scroll", handleScroll);
  handleScroll(); // Trigger on load

  // -------------------------------------------------------------
  // 2. Mobile Menu Toggle Panel
  // -------------------------------------------------------------
  const navToggleBtn = document.querySelector(".nav-toggle-btn");
  const mobileMenuPanel = document.querySelector(".mobile-menu-panel");
  const menuIcon = navToggleBtn.querySelector(".menu-icon");
  const closeIcon = navToggleBtn.querySelector(".close-icon");

  navToggleBtn.addEventListener("click", () => {
    const isOpen = mobileMenuPanel.classList.toggle("open");
    if (isOpen) {
      menuIcon.style.display = "none";
      closeIcon.style.display = "block";
    } else {
      menuIcon.style.display = "block";
      closeIcon.style.display = "none";
    }
  });

  // Close mobile menu when clicking a link
  mobileMenuLinks.forEach((link) => {
    link.addEventListener("click", () => {
      mobileMenuPanel.classList.remove("open");
      menuIcon.style.display = "block";
      closeIcon.style.display = "none";
    });
  });

  // -------------------------------------------------------------
  // 3. Live Interactive Computer AMC Budget Estimator
  // -------------------------------------------------------------
  const laptopsInput = document.getElementById("laptops-count");
  const desktopsInput = document.getElementById("desktops-count");
  
  const laptopsValText = document.getElementById("laptops-val-text");
  const desktopsValText = document.getElementById("desktops-val-text");
  
  const totalDevicesText = document.getElementById("calc-total-devices");
  const monthlyRateText = document.getElementById("calc-monthly-rate");
  const discountRow = document.getElementById("calc-discount-row");
  const discountValText = document.getElementById("calc-discount-val");
  const finalEstimateText = document.getElementById("calc-final-estimate");
  const whatsappCta = document.getElementById("calc-whatsapp-cta");
  
  const termButtons = document.querySelectorAll(".calc-term-btn");

  let laptopsCount = 25;
  let workstationsCount = 5;
  let duration = 12; // Months: 3, 6, 12

  // Calculation rates (in Rupees)
  const LAPTOP_RATE = 500;
  const WORKSTATION_RATE = 1200;

  function formatCurrency(val) {
    return new Intl.NumberFormat("en-IN", {
      style: "currency",
      currency: "INR",
      maximumFractionDigits: 0,
    }).format(val);
  }

  function updateEstimator() {
    laptopsCount = parseInt(laptopsInput.value, 10) || 0;
    workstationsCount = parseInt(desktopsInput.value, 10) || 0;
    
    // Update slider label texts
    laptopsValText.textContent = `${laptopsCount} Devices`;
    desktopsValText.textContent = `${workstationsCount} Devices`;

    // Perform AMC calculations
    const baseMonthlyCost = (laptopsCount * LAPTOP_RATE) + (workstationsCount * WORKSTATION_RATE);
    const rawTotal = baseMonthlyCost * duration;

    // Discount percentage
    let discountRate = 0;
    if (duration === 12) discountRate = 0.2; // 20%
    else if (duration === 6) discountRate = 0.1; // 10%

    const discountSaved = rawTotal * discountRate;
    const finalEstimate = rawTotal - discountSaved;

    // Update Estimate summary card
    totalDevicesText.textContent = `${laptopsCount + workstationsCount} Items`;
    monthlyRateText.textContent = `${formatCurrency(baseMonthlyCost)} / mo`;

    if (discountSaved > 0) {
      discountRow.style.display = "flex";
      discountValText.textContent = `-${formatCurrency(discountSaved)}`;
    } else {
      discountRow.style.display = "none";
    }

    finalEstimateText.textContent = formatCurrency(finalEstimate);

    // Dynamic WhatsApp Link Generation
    const message = `Hello AD Infotech, I'm interested in an AMC maintenance quote:\n- Laptops: ${laptopsCount}\n- Desktops: ${workstationsCount}\n- Contract term: ${duration} months.\n\nMy estimated cost is ${formatCurrency(finalEstimate)}. Please contact me!`;
    whatsappCta.setAttribute("href", `https://wa.me/919811022936?text=${encodeURIComponent(message)}`);
  }

  // Bind Slider Inputs
  if (laptopsInput && desktopsInput) {
    laptopsInput.addEventListener("input", updateEstimator);
    desktopsInput.addEventListener("input", updateEstimator);
  }

  // Bind Term Buttons
  termButtons.forEach((btn) => {
    btn.addEventListener("click", () => {
      termButtons.forEach((b) => b.classList.remove("active"));
      btn.classList.add("active");
      duration = parseInt(btn.getAttribute("data-value"), 10);
      updateEstimator();
    });
  });

  // Run initial estimate
  if (laptopsInput) {
    updateEstimator();
  }

  // -------------------------------------------------------------
  // 4. Products Filter Tabs Menu
  // -------------------------------------------------------------
  const filterButtons = document.querySelectorAll(".filter-btn");
  const productCards = document.querySelectorAll(".product-card");

  filterButtons.forEach((btn) => {
    btn.addEventListener("click", () => {
      // Toggle active states on tabs
      filterButtons.forEach((b) => b.classList.remove("active"));
      btn.classList.add("active");

      const filterValue = btn.getAttribute("data-filter");

      // Filter product cards
      productCards.forEach((card) => {
        const cardCategory = card.getAttribute("data-category");
        if (filterValue === "all" || cardCategory === filterValue) {
          card.classList.remove("hidden");
          // Re-trigger visual transition opacity
          card.style.opacity = "0";
          setTimeout(() => {
            card.style.opacity = "1";
          }, 50);
        } else {
          card.classList.add("hidden");
        }
      });
    });
  });

  // -------------------------------------------------------------
  // 5. Contact Form Handler (AJAX Submission)
  // -------------------------------------------------------------
  const contactForm = document.getElementById("contact-enquiry-form");
  const successBox = document.getElementById("contact-success-toast");
  const submitBtn = document.getElementById("contact-submit-btn");
  const submitText = document.getElementById("contact-submit-text");
  const spinnerIcon = document.getElementById("contact-btn-spinner");
  const sendIcon = document.getElementById("contact-btn-send");

  if (contactForm) {
    contactForm.addEventListener("submit", (e) => {
      e.preventDefault();

      const name = document.getElementById("name").value.trim();
      const email = document.getElementById("email").value.trim();
      const phone = document.getElementById("phone").value.trim();
      const service = document.getElementById("service").value;
      const message = document.getElementById("message").value.trim();

      if (!name || !email || !message) {
        alert("Please fill in all required fields (Name, Email, Message).");
        return;
      }

      // Enter submitting state
      submitBtn.disabled = true;
      spinnerIcon.style.display = "inline";
      sendIcon.style.display = "none";
      submitText.textContent = "Sending Request...";

      // Prepare request data
      const formData = new FormData();
      formData.append("name", name);
      formData.append("email", email);
      formData.append("phone", phone);
      formData.append("service", service);
      formData.append("message", message);

      // Perform AJAX Post
      const fetchUrl = (window.BASE_PATH || "") + "contact-handler.php";
      fetch(fetchUrl, {
        method: "POST",
        body: formData,
      })
      .then((res) => {
        if (!res.ok) {
          throw new Error("Server error, status: " + res.status);
        }
        return res.json();
      })
      .then((data) => {
        // Exit submitting state
        submitBtn.disabled = false;
        spinnerIcon.style.display = "none";
        sendIcon.style.display = "inline";
        submitText.textContent = "Send Message";

        if (data.status === "success") {
          // Construct pre-filled WhatsApp message
          const serviceSelect = document.getElementById("service");
          const serviceName = serviceSelect ? serviceSelect.options[serviceSelect.selectedIndex].text : service;
          const waMessage = `Hello AD Infotech,\n\n*New Website Enquiry*\n👤 *Name:* ${name}\n📧 *Email:* ${email}\n📞 *Phone:* ${phone || 'Not provided'}\n🛠 *Service:* ${serviceName}\n💬 *Message:* ${message}`;
          const whatsappUrl = `https://wa.me/919811022936?text=${encodeURIComponent(waMessage)}`;

          // Redirect to WhatsApp
          window.open(whatsappUrl, "_blank");

          // Show beautiful success notification banner
          successBox.style.display = "flex";
          contactForm.reset();
          
          // Hide success toast after 6 seconds
          setTimeout(() => {
            successBox.style.display = "none";
          }, 6000);
        } else {
          alert("Error: " + (data.message || "Something went wrong. Please try again."));
        }
      })
      .catch((err) => {
        // Reset states on error and still open WhatsApp fallback
        submitBtn.disabled = false;
        spinnerIcon.style.display = "none";
        sendIcon.style.display = "inline";
        submitText.textContent = "Send Message";

        const serviceSelect = document.getElementById("service");
        const serviceName = serviceSelect ? serviceSelect.options[serviceSelect.selectedIndex].text : service;
        const waMessage = `Hello AD Infotech,\n\n*New Website Enquiry*\n👤 *Name:* ${name}\n📧 *Email:* ${email}\n📞 *Phone:* ${phone || 'Not provided'}\n🛠 *Service:* ${serviceName}\n💬 *Message:* ${message}`;
        const whatsappUrl = `https://wa.me/919811022936?text=${encodeURIComponent(waMessage)}`;
        
        window.open(whatsappUrl, "_blank");
        successBox.style.display = "flex";
        contactForm.reset();
      });
    });
  }

  // -------------------------------------------------------------
  // 6. Brands We Deal In Carousel Slider Logic
  // -------------------------------------------------------------
  const brandsTrack = document.getElementById("brands-track");
  const brandsPrevBtn = document.getElementById("brands-prev-btn");
  const brandsNextBtn = document.getElementById("brands-next-btn");
  const brandsDotsContainer = document.getElementById("brands-dots");

  if (brandsTrack && brandsPrevBtn && brandsNextBtn && brandsDotsContainer) {
    const slides = Array.from(brandsTrack.children);
    const totalSlides = slides.length;
    let currentIndex = 0;
    let autoPlayTimer = null;

    function getItemsPerPage() {
      if (window.innerWidth <= 576) return 1;
      if (window.innerWidth <= 992) return 2;
      return 3; // Desktop: 3 items per view
    }

    function getMaxIndex() {
      const perPage = getItemsPerPage();
      return Math.max(0, totalSlides - perPage);
    }

    function createDots() {
      brandsDotsContainer.innerHTML = "";
      const maxIdx = getMaxIndex();
      for (let i = 0; i <= maxIdx; i++) {
        const dot = document.createElement("div");
        dot.classList.add("brands-dot");
        if (i === currentIndex) dot.classList.add("active");
        dot.addEventListener("click", () => {
          goToSlide(i);
          resetAutoPlay();
        });
        brandsDotsContainer.appendChild(dot);
      }
    }

    function updateSlider() {
      const maxIdx = getMaxIndex();
      if (currentIndex > maxIdx) currentIndex = maxIdx;
      if (currentIndex < 0) currentIndex = 0;

      const perPage = getItemsPerPage();
      const slideWidthPercent = 100 / perPage;
      const translateX = -(currentIndex * slideWidthPercent);
      brandsTrack.style.transform = `translateX(${translateX}%)`;

      // Update active dot
      const dots = Array.from(brandsDotsContainer.children);
      dots.forEach((dot, index) => {
        if (index === currentIndex) {
          dot.classList.add("active");
        } else {
          dot.classList.remove("active");
        }
      });
    }

    function goToSlide(index) {
      currentIndex = index;
      updateSlider();
    }

    function nextSlide() {
      const maxIdx = getMaxIndex();
      if (currentIndex >= maxIdx) {
        currentIndex = 0; // Loop back to start
      } else {
        currentIndex++;
      }
      updateSlider();
    }

    function prevSlide() {
      const maxIdx = getMaxIndex();
      if (currentIndex <= 0) {
        currentIndex = maxIdx; // Loop to end
      } else {
        currentIndex--;
      }
      updateSlider();
    }

    brandsNextBtn.addEventListener("click", () => {
      nextSlide();
      resetAutoPlay();
    });

    brandsPrevBtn.addEventListener("click", () => {
      prevSlide();
      resetAutoPlay();
    });

    function startAutoPlay() {
      autoPlayTimer = setInterval(nextSlide, 3500); // Auto-slide every 3.5s
    }

    function resetAutoPlay() {
      clearInterval(autoPlayTimer);
      startAutoPlay();
    }

    // Touch Swipe support for mobile
    let startX = 0;
    let isSwiping = false;

    brandsTrack.addEventListener("touchstart", (e) => {
      startX = e.touches[0].clientX;
      isSwiping = true;
    });

    brandsTrack.addEventListener("touchend", (e) => {
      if (!isSwiping) return;
      const endX = e.changedTouches[0].clientX;
      const diffX = startX - endX;
      if (diffX > 40) {
        nextSlide();
        resetAutoPlay();
      } else if (diffX < -40) {
        prevSlide();
        resetAutoPlay();
      }
      isSwiping = false;
    });

    // Handle Window Resize
    window.addEventListener("resize", () => {
      createDots();
      updateSlider();
    });

    // Initialize
    createDots();
    updateSlider();
    startAutoPlay();
  }

});
