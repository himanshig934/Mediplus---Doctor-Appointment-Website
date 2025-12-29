
<!--------footer-------------->

<footer class="bg-[#1a6dbb] text-white font-[poppins]">

  <div class="max-w-6xl mx-auto px-6 py-20">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

      
      <div class="about-section">
        <h3 class="text-xl font-semibold mb-4 relative inline-block">
          About Us
          <span class="block w-10 h-[2px] bg-white mt-2"></span>
        </h3>

        <p class="text-sm lg:text-[12px] md:text-[14px] leading-relaxed text-white/90 mb-6">
          We offer comprehensive medical services across 
          cardiology, neurology, gynecology, dentistry, orthopedics, and more.
        </p>

        <div class="flex gap-3">
          <a class="w-10 h-10 border border-white rounded-full flex items-center justify-center hover:bg-white hover:text-[#1a6dbb] transition">
            <i class="fa fa-facebook"></i>
          </a>
          <a class="w-10 h-10 border border-white rounded-full flex items-center justify-center hover:bg-white hover:text-[#1a6dbb] transition">
            <i class="fa fa-google-plus"></i>
          </a>
          <a class="w-10 h-10 border border-white rounded-full flex items-center justify-center hover:bg-white hover:text-[#1a6dbb] transition">
            <i class="fa fa-twitter"></i>
          </a>
        </div>
      </div>

      
      <div class="quick-links">
        <h3 class="text-xl font-semibold mb-4 relative inline-block">
          Quick Links
          <span class="block w-10 h-[2px] bg-white mt-2"></span>
        </h3>

        <div class="grid grid-cols-1 text-sm lg:text-[12px] md:text-[14px]">
          <ul class="space-y-3">
            <li class="flex items-center gap-2 hover:translate-x-1 transition">
              <span>›</span><a href="index.php">Home</a>
            </li>
            <li class="flex items-center gap-2 hover:translate-x-1 transition">
              <span>›</span><a href="about.php">About Us</a>
            </li>
            <li class="flex items-center gap-2 hover:translate-x-1 transition">
              <span>›</span><a href="services.php">Services</a>
            </li>
            <li class="flex items-center gap-2 hover:translate-x-1 transition">
              <span>›</span><a href="contact.php">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>

      <div class="quick-links">
        <h3 class="text-xl font-semibold mb-4 relative inline-block">
          Contact Info
          <span class="block w-10 h-[2px] bg-white mt-2"></span>
        </h3>

        <div class="grid grid-cols-1 text-sm lg:text-[12px] md:text-[14px]">
          <ul class="space-y-3">
            <li class="flex items-center gap-2 hover:translate-x-1 transition">
              <span>›</span> +91 8595844425
            </li>
            <li class="flex items-center gap-2 hover:translate-x-1 transition">
              <span>›</span> info@mediplus.com
            </li>
            <li class="flex items-center gap-2 hover:translate-x-1 transition">
              <span>›</span> Ranibagh, New Delhi
            </li>
          </ul>
        </div>
      </div>
     
      <div>
        <h3 class="text-xl font-semibold mb-4 relative inline-block">
          Newsletter
          <span class="block w-10 h-[2px] bg-white mt-2"></span>
        </h3>

        <p class="text-sm mb-6 lg:text-[12px] md:text-[14px]">
          Subscribe to our newsletter to get new query
        </p>

        <div class="flex">
          <input
            type="email"
            placeholder="Email Address"
            class="w-full px-4 py-3 text-sm text-white placeholder-white bg-[#1e73be] border border-white/30 focus:outline-none"
          />
          <button class="bg-white text-[#1a6dbb] px-4 flex items-center justify-center">
            <i class="fa fa-paper-plane"></i>
          </button>
        </div>
      </div>

    </div>
  </div>

  <!-- Bottom Footer -->
  <div class="bg-gray-900 py-6 text-center text-sm">
    © Copyright 2024 | All Rights Reserved by Mediplus
  </div>
</footer>






<script>
$(document).ready(function(){
  $('.testimonial-carousel').owlCarousel({
    loop: true,
    margin: 24,
    nav: false,
    dots: true,
    autoplay: true,
    autoplayTimeout: 3000,
    responsive:{
      0:{ items:1 },
      768:{ items:3 },
      1024:{ items:4 }
    }
  });
});
</script>

<script>
  const menuBtn = document.getElementById("menuBtn");
  const closeBtn = document.getElementById("closeBtn");
  const sideMenu = document.getElementById("sideMenu");
  const overlay = document.getElementById("overlay");

  menuBtn.addEventListener("click", () => {
    sideMenu.classList.remove("-translate-x-full");
    overlay.classList.remove("hidden");
  });

  closeBtn.addEventListener("click", () => {
    sideMenu.classList.add("-translate-x-full");
    overlay.classList.add("hidden");
  });

  overlay.addEventListener("click", () => {
    sideMenu.classList.add("-translate-x-full");
    overlay.classList.add("hidden");
  });
</script>

