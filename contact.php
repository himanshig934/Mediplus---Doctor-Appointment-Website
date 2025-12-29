<?php  
include('header.php');
include('dbconnect.php');
?>


<div class="container-fluid bg-[url('img/sun-fact.jpg')] mb-8 h-[120px] lg:h-[200px] md:h-[150px] sm:h-[150px] flex m-auto justify-center items-center relative bg-no-repeat bg-cover">
  <div class="absolute inset-0 bg-[#1a76d1]/80"></div>
  <div class="container max-w-7xl w-full text-center text-white absolute">
  <h1 class="text-center font-[poppins] font-semibold text-white text-[30px] lg:text-[36px] md:text-[36px] sm:text-[36px]">Contact Us</h1>
 </div>
</div>


<!---------info details------>

<div class="container-fluid m-auto justify-center items-center flex mb-8 lg:mt-14 md:mt-10 sm:mt-10 mt-8">
    <div class="container max-w-7xl m-auto justify-center items-center flex">
       <div class="container max-w-5xl overflow-hidden">
         <div class="grid lg:grid-cols-2 gap-x-3 md:grid-cols-2 md:px-6 lg:px-0 lg:mt-8 md:mt-8 sm:mt-8">

          <div class="map hidden lg:block">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7000.104779206157!2d77.12777614247246!3d28.6880794025377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d03c6c51827a1%3A0x985156ffa7dfabcf!2sRani%20Bagh%2C%20Shakurpur%2C%20Delhi%2C%20110034!5e0!3m2!1sen!2sin!4v1766490941736!5m2!1sen!2sin" width="510" height="560" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

           <!-- #mobile view -->
          <div class="map justify-center m-auto items-center lg:hidden">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7000.104779206157!2d77.12777614247246!3d28.6880794025377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d03c6c51827a1%3A0x985156ffa7dfabcf!2sRani%20Bagh%2C%20Shakurpur%2C%20Delhi%2C%20110034!5e0!3m2!1sen!2sin!4v1766490941736!5m2!1sen!2sin" 
              class="md:w-[350px] md:h-[550px] sm:w-[600px] sm:h-[300px] h-[300px]" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>



          <div class="details border-[1px] border-[#dedede] lg:px-10 md:px-6 sm:px-6 px-6 py-4 lg:py-10 md:py-4 sm:py-8 justify-center items-center m-auto shadow-lg md:mt-4 lg:mt-2 sm:mt-10 mt-6">
           <h2 class="text-[24px] font-[poppins] font-semibold text-gray-800">Contact With Us</h2>
          <div class="w-16 h-[2px] bg-[#1a76d1] my-3"></div>
          <p class="text-gray-500 mb-6">If you have any questions please feel free to contact with us.</p>

          <?php include('contactform.php'); ?>
          
         <form class="space-y-5" method="post" action="contact.php">

          <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            <input type="text" placeholder="Name" name="name"
              class="w-full border border-gray-200 rounded-md px-4 py-2 focus:outline-none focus:ring-1 focus:ring-[#1a76d1] text-[12px] font-[poppins]">
            
            <input type="email" placeholder="Email" name="email"
              class="w-full border border-gray-200 rounded-md px-4 py-2 focus:outline-none focus:ring-1 focus:ring-[#1a76d1] text-[12px] font-[poppins]">
          </div>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            <input type="text" placeholder="Phone" name="phone"
              class="w-full border border-gray-200 rounded-md px-4 py-2 focus:outline-none focus:ring-1 focus:ring-[#1a76d1] text-[12px] font-[poppins]">
            
            <input type="text" placeholder="specialist" name="specialist"
              class="w-full border border-gray-200 rounded-md px-4 py-2 focus:outline-none focus:ring-1 focus:ring-[#1a76d1] text-[12px] font-[poppins]">
          </div>

          <textarea placeholder="Your Message" name="desc"
            class="w-full h-32 border border-gray-200 rounded-md px-4 py-2 focus:outline-none focus:ring-1 focus:ring-[#1a76d1] text-[12px] font-[poppins]"></textarea>

          <button
            class="w-full bg-[#1a76d1] text-white py-2 rounded-[2px] text-[16px] font-medium hover:bg-gray-900 transition">
            Submit
          </button>

          <div class="flex items-center gap-2 text-sm text-gray-600">
            <input type="checkbox" class="accent-blue-600">
            <label>Do you want to subscribe our Newsletter ?</label>
          </div>

        </form>

          </div>
         </div>
       </div>
    </div>

</div>



<!-----contact details-------->

<section class="lg:py-14 md:py-12 sm:py-10 py-6 bg-white mb-10 sm:px-14 lg:px-0 md:px-0">
  <div class="max-w-6xl mx-auto px-4">
    <div class="grid lg:grid-cols-3 md:grid-cols-3 lg:gap-8 md:gap-6 sm:gap-6 gap-4">

      <div class="bg-[#1a76d1] text-white rounded-xl p-4 lg:p-8 flex items-center gap-6 md:px-6 sm:p-6">
        <div class="bg-white/20 p-4 rounded-full size-[50px]">
          <i class="fa fa-phone !text-[20px]"></i>
        </div>

        <div>
          <p class="text-lg font-semibold">Phone No.</p>
          <p class="text-sm opacity-90">+91 8595844425</p>
        </div>
      </div>

        <div class="bg-[#1a76d1] text-white rounded-xl p-4 flex items-center gap-6 md:px-6 sm:p-6">
        <div class="bg-white/20 p-4 rounded-full size-[50px]">
         <i class="fa fa-map !text-[20px]"></i>
        </div>
        <div>
          <p class="text-lg font-semibold">Address</p>
          <p class="text-sm opacity-90">Ranibagh, New Delhi</p>
        </div>
      </div>

     
      <div class="bg-[#1a76d1] text-white rounded-xl p-4 flex items-center gap-6 md:px-6 sm:p-6">
        <div class="bg-white/20 p-4 rounded-full size-[50px]">
          <i class="fa fa-envelope !text-[20px]"></i>
        </div>
        <div>
          <p class="text-lg font-semibold">Email Id</p>
          <p class="text-sm opacity-90">info@mediplus.com</p>
        </div>
      </div>

    </div>
  </div>
</section>



<?php include('footer.php'); ?>