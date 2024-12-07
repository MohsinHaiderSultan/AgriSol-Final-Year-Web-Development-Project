<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AgriSolutionsPakistan - Empowering Farmers, Nurturing Growth</title>

    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/HomePage.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
      integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer" />
    <link
      href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"
      rel="stylesheet" />
      <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLR6DQ8C/AFQ1Ic+kp0k5xKPtsG9NKOWI4Q1Hg6P4" crossorigin="anonymous"></script>


  </head>


  <body class="bg-gray-200">
    <div class="h-screen bg-cover bg-fixed bg-center bg-no-repeat shadow-lg rounded-2xl"
      style="background-image: url('images/freestockpro.jpg');">

      <div class="header text-white shadow-lg">
        <div
          class=" navbar bg-green-700  mx-auto flex items-center justify-between py-4">
          <div class="flex items-center ml-3 ">
            <img src="images/logo.jpeg" alt="logo"
              class="h-10 w-10 mr-2 rounded-full" />
            <h1 class="font-bold text-2xl">AgriSolutionsPakistan</h1>
          </div>
          <!-- Hamburger menu icon -->
          <button class="md:hidden" onclick="toggleMenu()">
            <svg
              class="hamburger w-7 h-7 text-white"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg">
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
          </button>
          <!-- Navbar Links -->
          <ul class="menu hidden md:flex items-center space-x-6">
            <li><a href="HomePage.php">Home</a></li>
            <li><a href="ResorcesPage.html">Resources</a></li>            
            <li><a href="AboutUs.html">About Us</a></li>
            <li><a href="contectUs.html">Contact</a></li>
            
             <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName" class="text-white flex items-center  rounded-full hover:text-green-600 md:me-0 focus:ring-gray-100 mr4  " type="button">
              <img class="w-10 h-10 m-1 rounded-full" src="images/mohsin.jpeg" alt="user photo">
              <svg class="w-2.5 h-2.5 ms-3 mr-4 ml-2 mt-1 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
              </svg>
              </button>
              
              <!-- Dropdown menu -->
              <div id="dropdownAvatarName" class="dropdown-item z-10 w-44 p-6  bg-green-700  divide-y divide-gray-100 rounded-lg hidden  dark:bg-gray-700 dark:divide-gray-600">
                  <div class=" py-3 text-sm text-black ">
                    <div class="font-medium ">Mohsin Haider</div>
                    <div class="truncate">mohsinhaidersultan001@gmail.com</div>
                  </div>
                  <ul class="text-sm" >
                    <li>
                      <a href="#" class="block ">Dashboard</a>
                    </li>
                    <li>
                      <a href="#" class="block">Settings</a>
                    </li>
                    <li>
                      <a href="Get_involved" class="block">Get Involved</a>
                    </li>
                  </ul>
                  <div class="py-2">
                    <a href="loginPage.html" class="flex pl-4 py-2  text-sm text-black rounded-2xl hover:bg-green-700 hover:text-white font-bold ">Sign out</a>        
                  </div>
              </div>
         </ul>
        </div>
      </div>
      <!-- Mobile Menu -->
      <div id="mobileMenu" class="manu hidden md:hidden bg-green-700 text-white">
        <ul class="mobile">
            <li><a href="HomePage.php" class="block px-4 py-2 ml-4">Home</a></li>
            <li>
              <a href="ResorcesPage.html">Resources</a>
            </li>
            <li><a href="AboutUs.html" class="block px-4 py-2 ml-4">About Us</a></li>
            <li><a href="contectUs.html" class="block px-4 py-2 ml-4">Contact</a></li>
           <li>
            <a href="loginPage.html" class="block px-4 py-2">
              <button
            class="w-full bg-gray-200 text-green-700 py-2 rounded-full hover:bg-green-600 hover:text-white">
            Join Us
          </button>
           </li> 
          </a>       
          </ul>
      </div>

      <div class="container mx-auto py-52 text-center">
        <h1 class="text-4xl font-bold mb-5 text-green-900">
          Welcome to AgriSolutionsPakistan
        </h1>
        <p class="text-green-900 mb-6 text-xl ">Empowering Farmers, Nurturing
          Growth</p>
        
      </div>

      <!-- Features Section -->
<div class="features-section mx-12 ">
  <h2 class="text-3xl font-bold text-center mb-12">Key Features and Resources</h2>
  <div class="features-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
   <div class="feature-card p-8 bg-white shadow-md rounded-lg flex flex-col items-center justify-center transition-transform transform hover:scale-105 duration-300 ease-in-out">
      <i class="fas fa-leaf text-green-600 text-4xl mb-6"></i>
      <h3 class="text-xl font-semibold mb-4">Agricultural Best Practices</h3>
      <p class="text-gray-700 text-center">Information on modern farming techniques, crop management, and sustainable agriculture practices tailored to Pakistani farmers.</p>
     <a href="ABP.html"> <button  class="bg-green-700 text-white py-2 px-6 rounded-full hover:bg-green-600 mt-4 transition-colors duration-300 ease-in-out mt-6">Learn More</button></a>
    </div>
    <div class="feature-card p-8 bg-white shadow-md rounded-lg flex flex-col items-center justify-center transition-transform transform hover:scale-105 duration-300 ease-in-out">
      <i class="fas fa-chart-line text-green-600 text-4xl mb-6"></i>
      <h3 class="text-xl font-semibold mb-4">Market Access</h3>
      <p class="text-gray-700 text-center">Guidance on accessing markets, price trends, marketing strategies, and value-added opportunities.</p>
      <a href="MA.html"> <button  class="bg-green-700 text-white py-2 px-6 rounded-full hover:bg-green-600 mt-4 transition-colors duration-300 ease-in-out mt-6">Learn More</button></a>
    </div>
    <div class="feature-card p-8 bg-white shadow-md rounded-lg flex flex-col items-center justify-center transition-transform transform hover:scale-105 duration-300 ease-in-out">
      <i class="fas fa-money-bill-alt text-green-600 text-4xl mb-6"></i>
      <h3 class="text-xl font-semibold mb-4">Financial Assistance</h3>
      <p class="text-gray-700 text-center">Details on government schemes, subsidies, loans, and grants available to farmers.</p>
      <a href="FA.html"> <button  class="bg-green-700 text-white py-2 px-6 rounded-full hover:bg-green-600 mt-4 transition-colors duration-300 ease-in-out mt-6">Learn More</button></a>
    </div>
    <div class="feature-card p-8 bg-white shadow-md rounded-lg flex flex-col items-center justify-center transition-transform transform hover:scale-105 duration-300 ease-in-out">
      <i class="fas fa-phone text-green-600 text-4xl mb-6"></i>
      <h3 class="text-xl font-semibold mb-4">Technical Support</h3>
      <p class="text-gray-700 text-center">Access to agricultural extension services, helplines, online forums, and expert consultations.</p>
      <a href="TS.html"> <button  class="bg-green-700 text-white py-2 px-6 rounded-full hover:bg-green-600 mt-4 transition-colors duration-300 ease-in-out mt-6">Learn More</button></a>
    </div>
  </div>
</div>


<button onclick="scrollToTop()" id="scrollToTopBtn"
title="Go to top"><i class="fa fa-arrow-up" aria-hidden="true"></i></button>

   <!-- Latest Articles -->
   <section>
<div class="articles rounded-2xl py-2 mt-24 bg-gray-100">
  <div class="container mx-auto text-center">
    <h2 class="text-3xl font-bold  mb-16 mt-16">Latest Articles</h2>
    <div class="post-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 py-8 lg:mx-16">
      <!-- Blog Post Card -->
     <div class="article-card bg-white shadow-md rounded-lg overflow-hidden lg:mr-10">
      <a href="#">
        <img src="images/field.jpg" alt="Field" class="w-full h-48 object-cover rounded-t-lg" />
      </a>
      <div class="p-6">
        <a href="#">
          <h3 class="text-2xl font-bold mb-2">Sustainable Agriculture Practices for a Greener Tomorrow</h3>
        </a>
        <p class="text-gray-700 mb-4">Discover the latest sustainable agriculture practices being implemented by AgriSolutionsPakistan to promote environmental conservation and ensure a greener future.</p>
        <a href="#" class="bg-green-700 text-white py-2 px-6 rounded-full hover:bg-green-600">Read more</a>
      </div>
    </div>

    <!-- Blog Post Card -->
    <div class="article-card bg-white shadow-md rounded-lg overflow-hidden lg:mr-10">
      <a href="#">
        <img src="images/zoo.jpg" alt="Zoo" class="w-full h-48 object-cover rounded-t-lg" />
      </a>
      <div class="p-6">
        <a href="#">
          <h3 class="text-2xl font-bold mb-2">Empowering Farmers: The Role of Technology in Agriculture</h3>
        </a>
        <p class="text-gray-700 mb-4">Learn how AgriSolutionsPakistan is leveraging technology to empower farmers across Pakistan, enhancing productivity, and promoting sustainable agricultural practices.</p>
        <a href="#" class="bg-green-700 text-white py-2 px-6 rounded-full hover:bg-green-600">Read more</a>
      </div>
    </div>

    <!-- Blog Post Card -->
    <div class="article-card bg-white shadow-md rounded-lg overflow-hidden lg:mr-10">
      <a href="#">
        <img src="images/burgue.jpg" alt="Burgue" class="w-full h-48 object-cover rounded-t-lg" />
      </a>
      <div class="p-6">
        <a href="#">
          <h3 class="text-2xl font-bold mb-2">Ensuring Food Security: AgriSolutionsPakistan's Initiatives</h3>
        </a>
        <p class="text-gray-700 mb-4">Explore the various initiatives undertaken by AgriSolutionsPakistan to ensure food security, improve livelihoods, and promote sustainable growth in the agricultural sector.</p>
        <a href="#" class="bg-green-700 text-white py-2 px-6 rounded-full hover:bg-green-600">Read more</a>
      </div>
    </div>
    </div>
  </div>
</div>
</section>

      
<!-- News and Updates Section -->
<section class="news-updates bg-gray-100 py-20 mx-8 mt-24 rounded-2xl">
  <div class="container mx-auto text-center">
    <h2 class="text-3xl font-bold  mb-16">News and Updates</h2>
    <p class="text-lg mb-12">Stay up-to-date with the latest news, updates, and announcements from AgriSolutionsPakistan.</p>
    <div class="news-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 py-8">
      <!-- News Card 1 -->
      <div class="bg-white shadow-md rounded-lg p-6 flex flex-col items-center">
        <i class="fas fa-newspaper fa-3x text-green-700 mb-4"></i>
        <h3 class="text-xl font-bold mb-2">New Initiative Launched</h3>
        <p class="text-gray-700">AgriSolutionsPakistan launches new initiative to support small-scale farmers in rural areas.</p>
        <a href="#" class="bg-green-700 text-white py-2 px-6 rounded-full hover:bg-green-600 mt-4">Read More</a>
      </div>
      <!-- News Card 2 -->
      <div class="bg-white shadow-md rounded-lg p-6 flex flex-col items-center">
        <i class="fas fa-video fa-3x text-green-700 mb-4"></i>
        <h3 class="text-xl font-bold mb-2">New Video Tutorial Released</h3>
        <p class="text-gray-700">Watch our latest video tutorial on sustainable agriculture practices.</p>
        <a href="watchMore.html" class="bg-green-700 text-white py-2 px-6 rounded-full hover:bg-green-600 mt-4">Watch Now</a>
      </div>
      <!-- News Card 3 -->
      <div class="bg-white shadow-md rounded-lg p-6 flex flex-col items-center">
        <i class="fas fa-calendar fa-3x text-green-700 mb-4"></i>
        <h3 class="text-xl font-bold mb-2">Upcoming Event: Agri Expo 2024</h3>
        <p class="text-gray-700">Join us at the Agri Expo 2024, where we'll be showcasing the latest innovations in agriculture.</p>
        <a href="#" class="bg-green-700 text-white py-2 px-6 rounded-full hover:bg-green-600 mt-4">Learn More</a>
      </div>
    </div>
  </div>
</section>     
  
    <!-- Get Involved Section -->
<section class=" Get_involved bg-gray-100 py-20 mx-8 mt-24 rounded-2xl">
  <div class="container mx-auto text-center">
    <h2 class="text-3xl font-bold  mb-16">Get Involved</h2>
    <p class=" text-lg mb-12">Join our movement by volunteering your time, skills, or resources, donating financially, or partnering with us.</p>
    <div class="Involved-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 py-8">
      <!-- Get Involved Card -->
      <div class="bg-white shadow-md rounded-lg p-6 flex flex-col items-center">
        <i class="fas fa-hands-helping fa-3x text-green-700 mb-4"></i>
        <h3 class="text-xl font-bold mb-2 text-gray-800">Volunteer Opportunities</h3>
        <p class="text-gray-700">Learn about volunteer opportunities to support farmers and promote sustainable agriculture practices.</p>
        <button class="bg-green-700 text-white py-2 px-6 rounded-full hover:bg-green-600 mt-4">Volunteer</button>
      </div>
      <!-- Get Involved Card -->
      <div class="bg-white shadow-md rounded-lg p-6 flex flex-col items-center">
        <i class="fas fa-donate fa-3x text-green-700 mb-4"></i>
        <h3 class="text-xl font-bold mb-2 text-gray-800">Donation Options</h3>
        <p class="text-gray-700">Discover ways to contribute financially to agricultural development projects or support specific initiatives.</p>
        <button class="bg-green-700 text-white py-2 px-6 rounded-full hover:bg-green-600 mt-4">Donate</button>
      </div>

      <!-- Get Involved Card -->
      <div class="bg-white shadow-md rounded-lg p-6 flex flex-col items-center">
        <i class="fas fa-handshake fa-3x text-green-700 mb-4"></i>
        <h3 class="text-xl font-bold mb-2 text-gray-800">Partner with Us</h3>
        <p class="text-gray-700">Explore opportunities for potential partners, collaborators, and sponsors to support our mission and activities.</p>
        <button class="bg-green-700 text-white py-2 px-6 rounded-full hover:bg-green-600 mt-4">Partner with Us</button>
      </div>
    </div>
  </div>
</section>


     <!-- Footer -->
     <footer class="bg-gray-100 text-black mt-24">
      <div class="footer mx-auto py-6 px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
          <!-- Company -->
          <div class="mb-6 md:mb-0">
            <h2 class="font-bold text-xl mb-4">Company</h2>
            <ul>
              <li>
                <a href="#" class="flex items-center mb-2">
                  <i class="fas fa-info-circle text-green-700 mr-2"></i> About Us
                </a>
              </li>
              <li>
                <a href="#" class="flex items-center mb-2">
                  <i class="fas fa-briefcase text-green-700 mr-3"></i> Careers
                </a>
              </li>
              <li>
                <a href="#" class="flex items-center mb-2">
                  <i class="fas fa-newspaper text-green-700 mr-3"></i> Press Releases
                </a>
              </li>
            </ul>
          </div>
    
          <!-- Resources -->
          <div class="mb-6 md:mb-0">
            <h2 class="font-bold text-xl mb-4">Resources</h2>
            <ul>
              <li>
                <a href="#" class="flex items-center mb-2">
                  <i class="fas fa-blog text-green-700 mr-3"></i> Blog
                </a>
              </li>
              <li>
                <a href="#" class="flex items-center mb-2">
                  <i class="fas fa-video text-green-700 mr-3"></i> Video Tutorials
                </a>
              </li>
              <li>
                <a href="#" class="flex items-center mb-2">
                  <i class="fas fa-seedling text-green-700 mr-3"></i> Agri News
                </a>
              </li>
            </ul>
          </div>
    
          <!-- Contact Us -->
          <div class="mb-6 md:mb-0">
            <h2 class="font-bold text-xl mb-4">Contact Us</h2>
            <ul>
              <li>
                <a href="#" class="flex items-center mb-2">
                  <i class="fas fa-envelope text-green-700 mr-3"></i> Contact
                </a>
              </li>
              <li>
                <a href="#" class="flex items-center mb-2">
                  <i class="fas fa-life-ring text-green-700 mr-3"></i> Help
                </a>
              </li>
              <li>
                <a href="#" class="flex items-center mb-2">
                  <i class="fas fa-question-circle text-green-700 mr-3"></i> FAQs
                </a>
              </li>
            </ul>
          </div>
    
          <!-- Newsletter -->
          <div>
            <h2 class="font-bold text-xl mb-4">Newsletter</h2>
            <p class="mb-4">
              Subscribe to our newsletter for the latest updates.
            </p>
            <form action="suscrib.php"  method="post" class="flex flex-col sm:flex-row">
            <input
              type="email"
              name="email"
              id="email"
              class="py-2 border border-green-700 rounded-2xl shadow-sm focus:ring focus:ring-green-600 px-4 mb-2 sm:mb-0 mr-2"
              placeholder="name@company.com"
              required
            />
              <button
                type="submit"
                class="bg-gray-200 border border-green-700 text-green-700 py-2 px-4 rounded-2xl hover:bg-green-600 hover:text-white transition"
              >
                Subscribe
              </button>
            </form>
          </div>
        </div>
    
        <div
          class="flex flex-col lg:flex-row justify-between items-center mt-10 border-t-2 pt-4"
        >
          <p class="mb-4 text-black lg:mb-0">
            &copy; 2024 AgriSolutionsPakistan. All rights reserved.
          </p>
          <ul class="flex flex-wrap lg:flex-row text-bold mx-auto">
            <li class="mb-2 lg:mb-0">
              <a href="#" class="text-black hover:text-green-600 px-3"
                >Privacy Policy</a
              >
            </li>
            <li class="mb-2 lg:mb-0">
              <a href="#" class="text-black hover:text-green-600 px-3"
                >Terms of Use</a
              >
            </li>
            <li class="mb-2 lg:mb-0">
              <a href="#" class="text-black hover:text-green-600 mr-4"
                >Contact Us</a
              >
            </li>
          </ul>
          <ul class="social-icons flex flex-wrap lg:flex-row mt-4 lg:mt-0 text-2xl mr-20 ">
                 <li class="mb-2 lg:mb-0">
              <a href="#" class="facbook hover:text-facebook px-3">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="mb-2 lg:mb-0">
              <a href="#" class="twitter hover:text-twitter px-3">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="mb-2 lg:mb-0">
              <a href="#" class="instagram hover:text-instagram px-3">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
            <li class="mb-2 lg:mb-0">
              <a href="#" class="linkedin hover:text-linkedin px-3">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
            <li class="mb-2 lg:mb-0">
              <a href="#" class="youtube hover:text-youtube px-3">
                <i class="fab fa-youtube"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </footer>


      <script src="js/homepage.js"></script>


    </body>
  </html>
