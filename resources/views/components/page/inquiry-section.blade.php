<div class="py-20 mx-auto max-w-6xl">
  <h2 class="my-8 text-2xl font-extrabold text-brand-1">Any question or remarks ? Just write a message!</h2>
  <div class="p-4 grid md:grid-cols-3 items-center bg-white border border-gray-200 rounded-lg shadow dark:border-gray-700 dark:bg-gray-800">
    <div class="rounded-lg overflow-hidden text-white bg-cover bg-center text-sm" style="background-image: url(/images/bgInquiryCard.png)">
      <div class="bg-brand-1/90 p-8">
        <h5 class="mb-2 text-xl text-secondary-1 font-bold tracking-widest dark:text-white" data-aos="fade-up">Contact Information</h5>
        <p data-aos="fade-up">Say something to start a live chat!</p>
        <div class="py-14 space-y-6" data-aos="fade-up">
          <div class="flex gap-8">
            <i class="fa-solid fa-phone"></i>
            <p>+1012 3456 789</p>
          </div>
          <div class="flex gap-8" data-aos="fade-up">
            <i class="fa-solid fa-envelope"></i>
            <p>demo@gmail.com</p>
          </div>
          <div class="flex gap-8" data-aos="fade-up">
            <i class="fa-solid fa-location-dot"></i>
            <p>132 Dartmouth Street Boston, Massachusetts 02156 United States</p>
          </div>
        </div>
        <div data-aos="fade-up">
          <x-link-sosmed/>
        </div>
      </div>
    </div>
    <div class="md:col-span-2 p-4 leading-normal xl:pl-8">
      <form class="md:space-y-8">
        <div class="grid lg:grid-cols-2 md:gap-6">
          <div class="relative z-0 w-full mb-6 group" data-aos="fade-up">
              <input type="text" name="first_name" id="first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-black peer" placeholder=" " required />
              <label for="first_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-black peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">First name</label>
          </div>
          <div class="relative z-0 w-full mb-6 group" data-aos="fade-up">
              <input type="text" name="last_name" id="last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-black peer" placeholder=" " required />
              <label for="last_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-black peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Last name</label>
          </div>
        </div>
        <div class="grid lg:grid-cols-2 md:gap-6">
          <div class="relative z-0 w-full mb-6 group" data-aos="fade-up">
              <input type="text" name="email" id="email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-black peer" placeholder=" " required />
              <label for="email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-black peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
          </div>
          <div class="relative z-0 w-full mb-6 group" data-aos="fade-up">
              <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="phone" id="phone" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-black peer" placeholder=" " required />
              <label for="phone" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-black peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone number</label>
          </div>
        </div>
        <div class="relative z-0 w-full mb-6 group" data-aos="fade-up">
            <input type="text" name="massage" id="massage" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-black peer" placeholder=" " required />
            <label for="massage" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-black peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Massage</label>
        </div>
        <div class="text-right" data-aos="fade-up">
          <button type="submit" class="text-brand-1 hover:text-blue-500 border-2 border-brand-1 hover:border-blue-500 focus:ring-2 focus:outline-none focus:ring-brand-1 font-medium text-sm px-6 py-2.5 text-center dark:border-brand-1 dark:text-brand-1 dark:hover:text-white dark:hover:bg-brand-1 dark:focus:ring-brand-1 transition-all duration-300">Send Massage</button>
        </div>
      </form>
    </div>
  </div>
</div>
