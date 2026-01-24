<!-- Header -->
<header class="w-full bg-white border-b border-gray-200 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex items-center justify-between h-20">

            <!-- Logo -->
            <img src="assets/images/Upstream-logo-copy-removebg-preview.png" alt="Upsteam Energy Logo"
                class="h-20 md:h-18 w-auto">

            <!-- Desktop Navigation -->
            <!-- Desktop Navigation -->
            <nav class="hidden md:flex space-x-8 text-sm font-medium relative">
                <a href="home" class="text-gray-700 relative group">
                    HOME
                    <!-- Animated dash -->
                    <span
                        class="absolute left-0 -bottom-1 h-0.5 w-0 bg-upsteamRed transition-all duration-300 group-hover:w-full"></span>
                </a>

                <div class="relative group">
                    <button
                        class="flex items-center text-gray-700 relative group-hover:text-upsteamRed transition focus:outline-none">
                        ABOUT US
                        <svg class="w-4 h-4 ml-1 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                        <!-- Animated dash -->
                        <span
                            class="absolute left-0 -bottom-1 h-0.5 w-0 bg-upsteamRed transition-all duration-300 group-hover:w-full"></span>
                    </button>
                    <!-- Dropdown Menu -->
                    <div
                        class="absolute left-0 mt-2 w-48 bg-white rounded-lg shadow-lg opacity-0 group-hover:opacity-100 invisible group-hover:visible transition-opacity duration-300 z-50">
                        <a href="culture"
                            class="block px-4 py-2 text-gray-700 hover:bg-upsteamRed hover:text-white transition">OUR
                            CULTURE</a>
                        <a href="history"
                            class="block px-4 py-2 text-gray-700 hover:bg-upsteamRed hover:text-white transition">OUR
                            HISTORY</a>
                        <a href="leadership"
                            class="block px-4 py-2 text-gray-700 hover:bg-upsteamRed hover:text-white transition">OUR
                            LEADERSHIP</a>
                    </div>
                </div>

                <a href="services" class="text-gray-700 relative group">
                    SERVICES
                    <span
                        class="absolute left-0 -bottom-1 h-0.5 w-0 bg-upsteamRed transition-all duration-300 group-hover:w-full"></span>
                </a>

                <a href="news" class="text-gray-700 relative group">
                    NEWS
                    <span
                        class="absolute left-0 -bottom-1 h-0.5 w-0 bg-upsteamRed transition-all duration-300 group-hover:w-full"></span>
                </a>

                <a href="contact" class="text-gray-700 relative group">
                    CONTACT US
                    <span
                        class="absolute left-0 -bottom-1 h-0.5 w-0 bg-upsteamRed transition-all duration-300 group-hover:w-full"></span>
                </a>
            </nav>


            <!-- CTA Button -->
            <div class="hidden md:block">
                <a href="contact"
                    class="inline-flex items-center px-5 py-2.5 bg-upsteamRed text-white text-sm font-semibold rounded hover:bg-opacity-90 transition">
                    GET IN TOUCH
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button id="menuBtn" class="md:hidden text-gray-700 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="hidden md:hidden bg-white border-t border-gray-200">
        <nav class="px-6 py-4 space-y-4 text-sm font-medium">
            <a href="home" class="block text-gray-700 hover:text-upsteamRed">HOME</a>
            <div class="relative group">
                <button class="flex items-center text-gray-700 hover:text-upsteamRed transition focus:outline-none">
                    ABOUT US
                    <svg class="w-4 h-4 ml-1 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                        </path>
                    </svg>
                </button>
                <!-- Dropdown Menu -->
                <div
                    class="absolute left-0 mt-2 w-48 bg-white rounded-lg shadow-lg opacity-0 group-hover:opacity-100 invisible group-hover:visible transition-opacity duration-300 z-50">
                    <a href="culture"
                        class="block px-4 py-2 text-gray-700 hover:bg-upsteamRed hover:text-white transition">Tech
                        OUR CULTURE</a>
                    <a href="history"
                        class="block px-4 py-2 text-gray-700 hover:bg-upsteamRed hover:text-white transition">Tech
                        OUR HISTORY</a>
                    <a href="leadership"
                        class="block px-4 py-2 text-gray-700 hover:bg-upsteamRed hover:text-white transition">Tech
                        OUR LEADERSHIP</a>
                </div>
            </div>
            <a href="services" class="block text-gray-700 hover:text-upsteamRed">SERVICES</a>
            <a href="news" class="block text-gray-700 hover:text-upsteamRed">NEWS</a>
            <a href="contact" class="block text-gray-700 hover:text-upsteamRed">CONTACT US</a>

            <a href="contact" class="block text-center mt-4 px-4 py-2 bg-upsteamRed text-white rounded">
                GET IN TOUCH
            </a>
        </nav>
    </div>
</header>