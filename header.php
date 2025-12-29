<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Noto+Serif:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

  <!-------poppins font------>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  

    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link rel="stylesheet" href="output.css">

  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">



  <!-- jQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <!-- Owl JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

  <link rel="stylesheet" href="style.css">

    
    
    <script>
  tailwind.config = {
      screens: {
        'sm':'640',
        'md': '768',
        'lg': '1024px',
        'xl': '1280px',
      },
    theme: {
      extend: {
        colors: {
         
       }
      }
    }
  }
</script>
</head>
<body>
    

<!-------header--------->

<header class="desktop-header sm:hidden lg:block md:hidden"> 
  <div class="inner-header pt-2">
  <div class="container mx-auto">

  <div class="container max-w-6xl m-auto border-b-[1px] border-[#bcbcbc] p-4">  
  <div class="grid [grid-template-columns:0.4fr_1fr_0.5fr]">

   <div class="social-icons">
     <div class="bg-[#1a76d1] text-white inline py-1 px-2 rounded-[50%] text-[14px]"><i class="fa fa-instagram"></i></div>
     <div class="bg-[#1a76d1] text-white inline py-1 px-2 rounded-[50%] text-[14px]"><i class="fa fa-facebook"></i></div>
     <div class="bg-[#1a76d1] text-white inline py-1 px-2 rounded-[50%] text-[14px]"><i class="fa fa-whatsapp"></i></div>
   </div>

    <div class="empty"></div>

    <div class="contact-info text-[14px]">
      <i class="fa fa-phone text-[#1a76d1]"><a href="" class="font-[poppins] text-black"> +91 8595844425</a></i>&nbsp;
      <i class="fa fa-envelope text-[#1a76d1]"><a href="" class="font-[poppins] text-black"> info@mediplus.com</a></i>
    </div>

    </div>
     </div>

   <div class="container-fluid">
      <div class="max-w-6xl mx-auto">
        <div class="grid [grid-template-columns:0.4fr_1.5fr_0.5fr]">

          <div class="p-3 text-[34px] text-[#1a76d1] font-[600] font-[poppins]">Medi<span class="text-[#2c2d3f] font-[600]">plus</span></div>

          <div class="p-3 items-center justify-center flex">
            <div class="main-menu">
              <ul class="flex space-x-8 justify-center m-auto items-center font-[poppins] cursor-pointer font-medium">
                <a href="index.php"><li class="hover:text-[#1a76d1] transition-all duration-150 delay-100">Home</li></a>
                <a href="about.php"><li class="hover:text-[#1a76d1] transition-all duration-150 delay-100">About us</li></a>
                <a href="services.php"><li class="hover:text-[#1a76d1] transition-all duration-150 delay-100">services</li></a>
                <a href="appointment.php"><li class="hover:text-[#1a76d1] transition-all duration-150 delay-100">Appointment</li></a>
                <a href="contact.php"><li class="hover:text-[#1a76d1] transition-all duration-150 delay-100">contact Us</li></a>
              </ul>
            </div>
          </div>

          <div class="p-3 items-center justify-center flex">
            <button class="bg-[#1a76d1] text-white px-6 py-2 hover:bg-[#2c2d3f] transition-all duration-150 delay-100"><a href="http://localhost/mediplus/appointment.php">Book an Appointment</a></button>
          </div>

        </div>
      </div>

    </div>

    </div>
  </div>
</header>



<!----mobile header----->
<header class="mobile header sm:block md:block lg:hidden">
  <div class="container-fluid py-1">
 <div class="container max-w-5xl justify-center m-auto">
    <div class="grid grid-cols-2">
      <div class="box pl-4 pt-3">
        <div id="menuBtn" class="sm:text-[26px] md:text-[26px] text-[20px]"><i class="fa fa-bars"></i></div>
      </div>
      <div class="logo text-right">
        <div class="p-3 text-[20px] md:text-[26px] sm:text-[26px] text-[#1a76d1] font-[600] font-[poppins]">Medi<span class="text-[#2c2d3f] font-[600]">plus</span></div>
      </div>
      

    </div>
 </div>
 </div> 
</header>


<!-- side menu -->
<div id="sideMenu"
  class="fixed top-0 left-0 h-full w-[80%] bg-[#f5f9ff] shadow-xl
  transform -translate-x-full transition-transform duration-300 z-50">

  <!-- Close -->
  <div class="flex justify-end p-2 mt-4">
    <button id="closeBtn" class="header-close-button md:text-2xl sm:text-2xl text-[14px] text-white bg-[#1a76d1] md:px-4 sm:px-4 md:py-1 sm:py-1 px-4 py-2">×</button>
  </div>

  <!-- Menu Links -->
  <nav class="header-menu flex flex-col px-6 md:text-[18px] sm:text-[18px] text-[14px] text-[#1b1b1b] font-[poppins] tracking-[1px] ">
              <ul class="font-normal">
                <a href="index.php"><li class="hover:text-[#1a76d1] transition-all duration-150 delay-100">Home</li></a>
                <a href="about.php"><li class="hover:text-[#1a76d1] transition-all duration-150 delay-100 mt-2">About us</li></a>
                <a href="services.php"><li class="hover:text-[#1a76d1] transition-all duration-150 delay-100 mt-2">services</li></a>
                <a href="appointment.php"><li class="hover:text-[#1a76d1] transition-all duration-150 delay-100 mt-2">Appointment</li></a>
                <a href="contact.php"><li class="hover:text-[#1a76d1] transition-all duration-150 delay-100 mt-2">contact Us</li></a>    
              </ul>
  </nav>
</div>

<!-- overlay -->
<div id="overlay" class="fixed inset-0 bg-black/40 hidden z-40"></div>
