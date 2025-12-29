<?php include('header.php');
include('dbconnect.php');
?>


<div class="container-fluid bg-[url('img/sun-fact.jpg')] mb-10 h-[120px] lg:h-[200px] md:h-[150px] sm:h-[150px] flex m-auto justify-center items-center relative bg-no-repeat bg-cover">
  <div class="absolute inset-0 bg-[#1a76d1]/80"></div>
  <div class="container max-w-7xl w-full text-center text-white absolute">
   <h1 class="text-center font-[poppins] font-semibold text-white text-[28px] lg:text-[36px] md:text-[36px] sm:text-[36px]">Book a <br class="lg:hidden
    md:hidden sm:hidden"> Appointment</h1>
 </div>
</div>





<div class="container-fluid m-auto justify-center items-center flex mb-20 mt-14 md:px-10 sm:px-10 px-2">
    <div class="container max-w-7xl m-auto justify-center items-center flex">
       <div class="container max-w-5xl overflow-hidden lg:py-10 md:py-10 sm:py-10 py-2">
         <div class="grid lg:[grid-template-columns:0.7fr_0.5fr] md:grid-cols-1 sm:grid-cols-1 gap-x-6">

          <div class="details lg:px-10 md:px-10 sm:px-10 px-4 pt-10 pb-10 shadow-xl border-[1px] border-[#dedede]">
           <h2 class="lg:text-[24px] md:text-[26px] sm:text-[24px] text-20px font-[poppins] font-semibold text-gray-800">Book your appointment</h2>
          <div class="w-16 h-[2px] bg-[#1a76d1] my-3"></div>
          <p class="text-gray-500 mb-6">Feel free to contact with us</p>

          <?php include('bookingform.php'); ?>
         <form class="space-y-5" method="post" action="appointment.php">

         <!------------first row------->
          <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            <input type="text" placeholder="Name" name="name"
              class="w-full border border-gray-200 rounded-[2px] px-4 py-2 focus:outline-none focus:ring-1 focus:ring-[#1a76d1] text-[12px] font-[poppins]">
            
            <input type="email" placeholder="Email" name="email"
              class="w-full border border-gray-200 rounded-[2px] px-4 py-2 focus:outline-none focus:ring-1 focus:ring-[#1a76d1] text-[12px] font-[poppins]">
          </div>

          <!---------second row---------->
          <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            <input type="text" placeholder="Phone" name="phoneno"
              class="w-full border border-gray-200 rounded-[2px] px-4 py-2 focus:outline-none focus:ring-1 focus:ring-[#1a76d1] text-[12px] font-[poppins]">
            
            <input type="date" placeholder="Date" onClick="this.showPicker()"  name="appointmentdate"
              class="w-full border border-gray-200 rounded-[2px] px-4 py-2 focus:outline-none focus:ring-1 focus:ring-[#1a76d1] text-[12px] font-[poppins]">
          </div>

          <!------third row------------>
            <div class="grid grid-cols-1  gap-5">
                                      
                <select name="department" class="w-full border border-gray-200 rounded-[2px] px-4 py-2 focus:outline-none focus:ring-1 focus:ring-[#1a76d1] text-[12px] font-[poppins] text-gray-600 ">
                 <option value="" >Department</option>
                 <option value="Cardiologist">Cardiologist</option>
                 <option value="Neurologist">Neurologist</option>
                 <option value="gynology">gynology</option>
                 <option value="Dentist">Dentist</option>
                 </select>
                 </div>

          <!----------forth row--------->
          <textarea placeholder="Your Message" name="message"
            class="w-full h-32 border border-gray-200 rounded-[2px] px-4 py-2 focus:outline-none focus:ring-1 focus:ring-[#1a76d1] text-[12px] font-[poppins]"></textarea>

          <button
            class="w-full bg-[#1a76d1] text-white py-2 rounded-[2px] text-[16px] font-medium hover:bg-gray-900 transition">
            Book an Appointment
          </button>

          </form>
          </div>


          <div class="map bg-[#1f78d1] rounded-lg p-8 md:mt-10 lg:mt-0 sm:mt-8 mt-6">
             
             <h2 class="text-white text-2xl font-semibold mb-6">Working Hours</h2>
               <ul class="space-y-4">
    
               <li class="flex justify-between text-white text-sm">
               <span>Monday - Friday</span>
               <span>10.00 AM–09.00 PM</span>
               </li>

               <li class="flex justify-between text-white text-sm">
               <span>Saturday</span>
               <span>9.00–18.30</span>
               </li>

               <li class="flex justify-between text-white text-sm">
               <span>Monday - Thusday</span>
               <span>10.00 AM–09.00 PM</span>
               </li>

              <li class="flex justify-between text-white text-sm">
              <span>Monday - Friday</span>
              <span>10.00 AM–09.00 PM</span>
              </li>

             <li class="flex justify-between text-white text-sm">
              <span>Saturday</span>
             <span>9.00–18.30</span>
             </li>
 
             <li class="flex justify-between text-white text-sm">
             <span>Monday - Thusday</span>
             <span>10.00 AM–09.00 PM</span>
            </li>

           <li class="flex justify-between text-white text-sm">
           <span>Monday - Friday</span>
           <span>8.00–20.00</span>
           </li>

           <li class="flex justify-between text-white text-sm">
           <span>Saturday</span>
            <span>9.00–18.30</span>
            </li>
           </ul>

         </div>

         </div>
       </div>
    </div>

</div>


<?php include('footer.php'); ?>